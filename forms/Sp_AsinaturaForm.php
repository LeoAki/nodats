<?php

class Sp_AsinaturaForm extends Form {

    public function buildFields(){
        $this->fields = array(
            'acodigo' => array(
                'label' => 'acodigo', 'nombre' => 'acodigo',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'acodigogrado' => array(
                'label' => 'acodigogrado', 'nombre' => 'acodigogrado',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'acodigonivel' => array(
                'label' => 'acodigonivel', 'nombre' => 'acodigonivel',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'acodigocurso' => array(
                'label' => 'acodigocurso', 'nombre' => 'acodigocurso',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'aasinatura' => array(
                'label' => 'aasinatura', 'nombre' => 'aasinatura',
                'tipo' => 'varchar', 'tamano' => 250,
                'atributos' => ''
            ),
            'aabreviatura' => array(
                'label' => 'aabreviatura', 'nombre' => 'aabreviatura',
                'tipo' => 'varchar', 'tamano' => 250,
                'atributos' => ''
            ),
            'ahorassemanales' => array(
                'label' => 'ahorassemanales', 'nombre' => 'ahorassemanales',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'anumerocapacidades' => array(
                'label' => 'anumerocapacidades', 'nombre' => 'anumerocapacidades',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            )
        );
        return $this;
    }
}