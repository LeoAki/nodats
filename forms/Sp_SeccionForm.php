<?php

class Sp_SeccionForm extends Form {

    public function buildFields(){
        $this->fields = array(
            array(
                'label' => 'acodigo', 'nombre' => 'acodigo',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'aano_escolar', 'nombre' => 'aano_escolar',
                'tipo' => 'char', 'tamano' => 4,
                'atributos' => ''
            ),
            array(
                'label' => 'acod_nivel', 'nombre' => 'acod_nivel',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'acod_grado', 'nombre' => 'acod_grado',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'anombreseccion', 'nombre' => 'anombreseccion',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            array(
                'label' => 'acod_tutor', 'nombre' => 'acod_tutor',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'acod_auxiliar', 'nombre' => 'acod_auxiliar',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'acod_registroasistencia', 'nombre' => 'acod_registroasistencia',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'acod_psicologo', 'nombre' => 'acod_psicologo',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            )
        );
        return $this;
    }
}