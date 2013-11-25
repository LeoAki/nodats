<?php

class Sp_AsinaturaForm extends Form {

    public function buildFields(){
        $this->fields = array(
            array(
                'label' => 'acodigo', 'nombre' => 'acodigo',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'acodigogrado', 'nombre' => 'acodigogrado',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'acodigonivel', 'nombre' => 'acodigonivel',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'acodigocurso', 'nombre' => 'acodigocurso',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'aasinatura', 'nombre' => 'aasinatura',
                'tipo' => 'varchar', 'tamano' => 250,
                'atributos' => ''
            ),
            array(
                'label' => 'aabreviatura', 'nombre' => 'aabreviatura',
                'tipo' => 'varchar', 'tamano' => 250,
                'atributos' => ''
            ),
            array(
                'label' => 'ahorassemanales', 'nombre' => 'ahorassemanales',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'anumerocapacidades', 'nombre' => 'anumerocapacidades',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            )
        );
        return $this;
    }
}