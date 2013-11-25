<?php

class Sp_PersonasForm extends Form {

    public function buildFields(){
        $this->fields = array(
            array(
                'label' => 'acodigo', 'nombre' => 'acodigo',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'apaterno', 'nombre' => 'apaterno',
                'tipo' => 'varchar', 'tamano' => 50,
                'atributos' => ''
            ),
            array(
                'label' => 'amaterno', 'nombre' => 'amaterno',
                'tipo' => 'varchar', 'tamano' => 50,
                'atributos' => ''
            ),
            array(
                'label' => 'anombres', 'nombre' => 'anombres',
                'tipo' => 'varchar', 'tamano' => 100,
                'atributos' => ''
            ),
            array(
                'label' => 'adni', 'nombre' => 'adni',
                'tipo' => 'char', 'tamano' => 8,
                'atributos' => ''
            ),
            array(
                'label' => 'asexo', 'nombre' => 'asexo',
                'tipo' => 'char', 'tamano' => 1,
                'atributos' => ''
            ),
            array(
                'label' => 'aemail', 'nombre' => 'aemail',
                'tipo' => 'varchar', 'tamano' => 100,
                'atributos' => ''
            )
        );
        return $this;
    }
}