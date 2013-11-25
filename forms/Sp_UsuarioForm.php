<?php

class Sp_UsuarioForm extends Form {

    public function buildFields(){
        $this->fields = array(
            array(
                'label' => 'acodigo', 'nombre' => 'acodigo',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'ausuario', 'nombre' => 'ausuario',
                'tipo' => 'varchar', 'tamano' => 15,
                'atributos' => ''
            ),
            array(
                'label' => 'acontrasena', 'nombre' => 'acontrasena',
                'tipo' => 'varchar', 'tamano' => 32,
                'atributos' => ''
            ),
            array(
                'label' => 'aidperfil', 'nombre' => 'aidperfil',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'aestado', 'nombre' => 'aestado',
                'tipo' => 'varchar', 'tamano' => 100,
                'atributos' => ''
            ),
            array(
                'label' => 'aidpersona', 'nombre' => 'aidpersona',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'anivel', 'nombre' => 'anivel',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'ainscripcion', 'nombre' => 'ainscripcion',
                'tipo' => 'date', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'aultimasesion', 'nombre' => 'aultimasesion',
                'tipo' => 'datetime', 'tamano' => 10,
                'atributos' => ''
            )
        );
        return $this;
    }
}