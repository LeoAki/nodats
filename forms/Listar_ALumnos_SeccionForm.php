<?php

class Listar_ALumnos_SeccionForm extends Form {

    public function buildFields(){
        $this->fields = array(
            'aseccion' => array(
                'label' => 'aseccion', 'nombre' => 'aseccion',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            )
        );
        return $this;
    }
}