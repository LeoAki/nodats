<?php

class Sp_RegistroForm extends Form {

    public function buildFields(){
        $this->fields = array(
            array(
                'label' => 'acodigo', 'nombre' => 'acodigo',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'acodigoseccion', 'nombre' => 'acodigoseccion',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'acodigodocente', 'nombre' => 'acodigodocente',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'acodigoasinatura', 'nombre' => 'acodigoasinatura',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'auno', 'nombre' => 'auno',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'ados', 'nombre' => 'ados',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'atres', 'nombre' => 'atres',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'acuatro', 'nombre' => 'acuatro',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            )
        );
        return $this;
    }
}