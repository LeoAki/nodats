<?php

class Sp_IndicadorForm extends Form {

    public function buildFields(){
        $this->fields = array(
            'acodigo' => array(
                'label' => 'acodigo', 'nombre' => 'acodigo',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'aidcomponente' => array(
                'label' => 'aidcomponente', 'nombre' => 'aidcomponente',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'anro_criterio' => array(
                'label' => 'anro_criterio', 'nombre' => 'anro_criterio',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'acriterio' => array(
                'label' => 'acriterio', 'nombre' => 'acriterio',
                'tipo' => 'varchar', 'tamano' => 257,
                'atributos' => ''
            ),
            'apeso' => array(
                'label' => 'apeso', 'nombre' => 'apeso',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            )
        );
        return $this;
    }
}