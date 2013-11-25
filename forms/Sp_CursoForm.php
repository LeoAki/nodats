<?php

class Sp_CursoForm extends Form {

    public function buildFields(){
        $this->fields = array(
            array(
                'label' => 'acodigo', 'nombre' => 'acodigo',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'acurso', 'nombre' => 'acurso',
                'tipo' => 'varchar', 'tamano' => 50,
                'atributos' => ''
            )
        );
        return $this;
    }
}