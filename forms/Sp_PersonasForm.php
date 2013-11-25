<?php

class Sp_PersonasForm extends Form {

    public function buildFields(){
        $this->fields = array(
            'acodigo' => array(
                'label' => 'acodigo', 'nombre' => 'acodigo',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'apaterno' => array(
                'label' => 'apaterno', 'nombre' => 'apaterno',
                'tipo' => 'varchar', 'tamano' => 50,
                'atributos' => ''
            ),
            'amaterno' => array(
                'label' => 'amaterno', 'nombre' => 'amaterno',
                'tipo' => 'varchar', 'tamano' => 50,
                'atributos' => ''
            ),
            'anombres' => array(
                'label' => 'anombres', 'nombre' => 'anombres',
                'tipo' => 'varchar', 'tamano' => 100,
                'atributos' => ''
            ),
            'adni' => array(
                'label' => 'adni', 'nombre' => 'adni',
                'tipo' => 'char', 'tamano' => 8,
                'atributos' => ''
            ),
            'asexo' => array(
                'label' => 'asexo', 'nombre' => 'asexo',
                'tipo' => 'char', 'tamano' => 1,
                'atributos' => ''
            ),
            'aemail' => array(
                'label' => 'aemail', 'nombre' => 'aemail',
                'tipo' => 'varchar', 'tamano' => 100,
                'atributos' => ''
            )
        );
        return $this;
    }
}