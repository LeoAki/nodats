<?php

class Sp_IndicadorForm extends Form {

    public function buildFields(){
        $this->fields = array(
            array(
                'label' => 'acodigo', 'nombre' => 'acodigo',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'aidcomponente', 'nombre' => 'aidcomponente',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'anro_criterio', 'nombre' => 'anro_criterio',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'acriterio', 'nombre' => 'acriterio',
                'tipo' => 'varchar', 'tamano' => 257,
                'atributos' => ''
            ),
            array(
                'label' => 'apeso', 'nombre' => 'apeso',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            )
        );
        return $this;
    }
}