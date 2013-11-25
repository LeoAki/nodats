<?php

class Sp_UsuarioForm extends Form {

    public function buildFields(){
        $this->fields = array(
            'acodigo' => array(
                'label' => 'acodigo', 'nombre' => 'acodigo',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'ausuario' => array(
                'label' => 'ausuario', 'nombre' => 'ausuario',
                'tipo' => 'varchar', 'tamano' => 15,
                'atributos' => ''
            ),
            'acontrasena' => array(
                'label' => 'acontrasena', 'nombre' => 'acontrasena',
                'tipo' => 'varchar', 'tamano' => 32,
                'atributos' => ''
            ),
            'aidperfil' => array(
                'label' => 'aidperfil', 'nombre' => 'aidperfil',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'aestado' => array(
                'label' => 'aestado', 'nombre' => 'aestado',
                'tipo' => 'varchar', 'tamano' => 100,
                'atributos' => ''
            ),
            'aidpersona' => array(
                'label' => 'aidpersona', 'nombre' => 'aidpersona',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'anivel' => array(
                'label' => 'anivel', 'nombre' => 'anivel',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'ainscripcion' => array(
                'label' => 'ainscripcion', 'nombre' => 'ainscripcion',
                'tipo' => 'date', 'tamano' => 10,
                'atributos' => ''
            ),
            'aultimasesion' => array(
                'label' => 'aultimasesion', 'nombre' => 'aultimasesion',
                'tipo' => 'datetime', 'tamano' => 10,
                'atributos' => ''
            )
        );
        return $this;
    }
}