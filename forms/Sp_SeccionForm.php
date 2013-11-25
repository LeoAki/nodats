<?php

class Sp_SeccionForm extends Form {

    public function buildFields(){
        $this->fields = array(
            'acodigo' => array(
                'label' => 'acodigo', 'nombre' => 'acodigo',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'aano_escolar' => array(
                'label' => 'aano_escolar', 'nombre' => 'aano_escolar',
                'tipo' => 'char', 'tamano' => 4,
                'atributos' => ''
            ),
            'acod_nivel' => array(
                'label' => 'acod_nivel', 'nombre' => 'acod_nivel',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'acod_grado' => array(
                'label' => 'acod_grado', 'nombre' => 'acod_grado',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'anombreseccion' => array(
                'label' => 'anombreseccion', 'nombre' => 'anombreseccion',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            'acod_tutor' => array(
                'label' => 'acod_tutor', 'nombre' => 'acod_tutor',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'acod_auxiliar' => array(
                'label' => 'acod_auxiliar', 'nombre' => 'acod_auxiliar',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'acod_registroasistencia' => array(
                'label' => 'acod_registroasistencia', 'nombre' => 'acod_registroasistencia',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'acod_psicologo' => array(
                'label' => 'acod_psicologo', 'nombre' => 'acod_psicologo',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            )
        );
        return $this;
    }
}