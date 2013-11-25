<?php

class Sp_DocenteForm extends Form {

    public function buildFields(){
        $this->fields = array(
            'acodigo' => array(
                'label' => 'acodigo', 'nombre' => 'acodigo',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'apaterno' => array(
                'label' => 'apaterno', 'nombre' => 'apaterno',
                'tipo' => 'varchar', 'tamano' => 32,
                'atributos' => ''
            ),
            'amaterno' => array(
                'label' => 'amaterno', 'nombre' => 'amaterno',
                'tipo' => 'varchar', 'tamano' => 32,
                'atributos' => ''
            ),
            'anombres' => array(
                'label' => 'anombres', 'nombre' => 'anombres',
                'tipo' => 'varchar', 'tamano' => 150,
                'atributos' => ''
            ),
            'adni' => array(
                'label' => 'adni', 'nombre' => 'adni',
                'tipo' => 'char', 'tamano' => 8,
                'atributos' => ''
            ),
            'acodigopersona' => array(
                'label' => 'acodigopersona', 'nombre' => 'acodigopersona',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'atipoprofe' => array(
                'label' => 'atipoprofe', 'nombre' => 'atipoprofe',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            )
        );
        return $this;
    }
}