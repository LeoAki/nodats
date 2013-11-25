<?php

class Sp_DocenteForm extends Form {

    public function buildFields(){
        $this->fields = array(
            array(
                'label' => 'acodigo', 'nombre' => 'acodigo',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'apaterno', 'nombre' => 'apaterno',
                'tipo' => 'varchar', 'tamano' => 32,
                'atributos' => ''
            ),
            array(
                'label' => 'amaterno', 'nombre' => 'amaterno',
                'tipo' => 'varchar', 'tamano' => 32,
                'atributos' => ''
            ),
            array(
                'label' => 'anombres', 'nombre' => 'anombres',
                'tipo' => 'varchar', 'tamano' => 150,
                'atributos' => ''
            ),
            array(
                'label' => 'adni', 'nombre' => 'adni',
                'tipo' => 'char', 'tamano' => 8,
                'atributos' => ''
            ),
            array(
                'label' => 'acodigopersona', 'nombre' => 'acodigopersona',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'atipoprofe', 'nombre' => 'atipoprofe',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            )
        );
        return $this;
    }
}