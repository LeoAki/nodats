<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class Form {

    protected $fields = null;
    private $htmlfields = null;
    private static $TIPOS = array(
        'varchar' => 'text',
        'char' => 'text',
        'text' => 'textarea',
        'integer' => 'text',
        'int' => 'text',
        'bigint' => 'text',
        'decimal' => 'text',
        'double' => 'text',
        'date' => 'text',
        'datetime' => 'text',
        'boolean' => 'checkbox',
        'tinyint' => 'text',
        'select' => 'select'
    );
    private static $INPUT = '<label for="id_%s">%s</label><input type="%s" maxlength="%d" 
            name="%s" id="id_%s" %s %s/>';
    private static $TEXTAREA = '<label for="id_%s">%s</label><textarea name="%s" id="id_%s"
            %s>%s</textarea>';
    private static $SELECT = '<label for="id_%s">%s</label><select name="%s" id="id_%s" %s>
            %s</select>';

    public function __construct() {
        $this->fields = array();
        $this->buildFields();
    }

    private function renderOptions($array, $valor) {
        $choices = '';
        foreach ($array as $key => $value) {
            if ($valor === $valor) {
                $choices .= sprintf('<option value="%s" selected="selected">%s</option>', $key, $value);
            } else {
                $choices .= sprintf('<option value="%s">%s</option>', $key, $value);
            }
        }
        return $choices;
    }

    public function getFields() {
        if($this->htmlfields){
            return $this->htmlfields;
        }
        $html = array();
        foreach ($this->fields as $field) {
            $tipo = self::$TIPOS[$field['tipo']];
            if ($tipo === 'textarea') {
                $html[$field['nombre']] = sprintf(self::$TEXTAREA, $field['label'], $field['nombre'], $field['nombre'], $field['nombre'], $field['atributos'], array_key_exists('valor', $field) ? $field['valor'] : ""
                );
            } else if ($tipo === 'select') {
                $_choice = array_key_exists('choices', $field) ? $field['choices'] : array();
                $valor = array_key_exists('valor', $field) ? $field['valor'] : "";
                $choices = $this->renderOptions($_choice, $valor);
                $html[$field['nombre']] = sprintf(self::$SELECT, $field['label'], $field['nombre'], $field['nombre'], $field['nombre'], $field['atributos'], $choices
                );
            } else {
                $html[$field['nombre']] = sprintf(self::$INPUT, $field['label'], $field['nombre'], $tipo, $field['tamano'], $field['nombre'], $field['nombre'], array_key_exists('valor', $field) ? 'value="'.$field['valor'].'"' : "", $field['atributos']
                );
            }
        }
        $this->htmlfields = $html;
        return $this->htmlfields;
    }
    
    public function __get($name) {
        $fields = $this->getFields();
        return $fields[$name];
    }

    public function as_html() {
        return implode('<br>', $this->getFields());
    }

    public function handleRequest() {
        foreach ($this->fields as $key => $field) {
            $this->fields[$key]['valor'] = $this->getPostParam($field['nombre']);
            
        }
    }

    public function getFieldValues($prefix = '') {
        $values = array();
        foreach ($this->fields as $field) {
            $name = $prefix . $field['nombre'];
            $values[$name] = $field['valor'];
        }
        return $values;
    }
    
    public function setFieldValues($values, $prefix='a'){
        foreach ($this->fields as $key => $field) {
            $name = substr($key, strpos($prefix, $key)+1);            
            $this->fields[$key]['valor'] = array_key_exists($name, $values)
                    ?$values[$name]:'';
        }
    }
    
    protected function getPostParam($clave) {
        $value = filter_input(INPUT_POST, $clave, FILTER_SANITIZE_SPECIAL_CHARS);
        return $value;
    }

    public function __toString() {
        return implode('<br>', $this->getFields());
    }

    public abstract function buildFields();
}
