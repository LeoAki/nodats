<?php

class Sp_RegistroForm extends Form {

    public function buildFields(){
        $this->fields = array(
            'acodigo' => array(
                'label' => 'acodigo', 'nombre' => 'acodigo',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'acodigoseccion' => array(
                'label' => 'acodigoseccion', 'nombre' => 'acodigoseccion',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'acodigodocente' => array(
                'label' => 'acodigodocente', 'nombre' => 'acodigodocente',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'acodigoasinatura' => array(
                'label' => 'acodigoasinatura', 'nombre' => 'acodigoasinatura',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'auno' => array(
                'label' => 'auno', 'nombre' => 'auno',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'ados' => array(
                'label' => 'ados', 'nombre' => 'ados',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'atres' => array(
                'label' => 'atres', 'nombre' => 'atres',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'acuatro' => array(
                'label' => 'acuatro', 'nombre' => 'acuatro',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            )
        );
        return $this;
    }
}