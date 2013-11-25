<?php

class Sp_2alumnoregistroForm extends Form {

    public function buildFields(){
        $this->fields = array(
            'aidalumnoregistro' => array(
                'label' => 'aidalumnoregistro', 'nombre' => 'aidalumnoregistro',
                'tipo' => 'bigint', 'tamano' => 10,
                'atributos' => ''
            ),
            'aidregistro' => array(
                'label' => 'aidregistro', 'nombre' => 'aidregistro',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'aidalumnoseccion' => array(
                'label' => 'aidalumnoseccion', 'nombre' => 'aidalumnoseccion',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'asituacion' => array(
                'label' => 'asituacion', 'nombre' => 'asituacion',
                'tipo' => 'varchar', 'tamano' => 250,
                'atributos' => ''
            ),
            'apromedio1' => array(
                'label' => 'apromedio1', 'nombre' => 'apromedio1',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'apromedio2' => array(
                'label' => 'apromedio2', 'nombre' => 'apromedio2',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'apromedio3' => array(
                'label' => 'apromedio3', 'nombre' => 'apromedio3',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'apromedio4' => array(
                'label' => 'apromedio4', 'nombre' => 'apromedio4',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'apromedio5' => array(
                'label' => 'apromedio5', 'nombre' => 'apromedio5',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'apb' => array(
                'label' => 'apb', 'nombre' => 'apb',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap11' => array(
                'label' => 'ap11', 'nombre' => 'ap11',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap12' => array(
                'label' => 'ap12', 'nombre' => 'ap12',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap13' => array(
                'label' => 'ap13', 'nombre' => 'ap13',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap14' => array(
                'label' => 'ap14', 'nombre' => 'ap14',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap15' => array(
                'label' => 'ap15', 'nombre' => 'ap15',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap16' => array(
                'label' => 'ap16', 'nombre' => 'ap16',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap17' => array(
                'label' => 'ap17', 'nombre' => 'ap17',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap18' => array(
                'label' => 'ap18', 'nombre' => 'ap18',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap19' => array(
                'label' => 'ap19', 'nombre' => 'ap19',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap110' => array(
                'label' => 'ap110', 'nombre' => 'ap110',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap21' => array(
                'label' => 'ap21', 'nombre' => 'ap21',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap22' => array(
                'label' => 'ap22', 'nombre' => 'ap22',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap23' => array(
                'label' => 'ap23', 'nombre' => 'ap23',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap24' => array(
                'label' => 'ap24', 'nombre' => 'ap24',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap25' => array(
                'label' => 'ap25', 'nombre' => 'ap25',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap26' => array(
                'label' => 'ap26', 'nombre' => 'ap26',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap27' => array(
                'label' => 'ap27', 'nombre' => 'ap27',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap28' => array(
                'label' => 'ap28', 'nombre' => 'ap28',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap29' => array(
                'label' => 'ap29', 'nombre' => 'ap29',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap210' => array(
                'label' => 'ap210', 'nombre' => 'ap210',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap31' => array(
                'label' => 'ap31', 'nombre' => 'ap31',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap32' => array(
                'label' => 'ap32', 'nombre' => 'ap32',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap33' => array(
                'label' => 'ap33', 'nombre' => 'ap33',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap34' => array(
                'label' => 'ap34', 'nombre' => 'ap34',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap35' => array(
                'label' => 'ap35', 'nombre' => 'ap35',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap36' => array(
                'label' => 'ap36', 'nombre' => 'ap36',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap37' => array(
                'label' => 'ap37', 'nombre' => 'ap37',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap38' => array(
                'label' => 'ap38', 'nombre' => 'ap38',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap39' => array(
                'label' => 'ap39', 'nombre' => 'ap39',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap310' => array(
                'label' => 'ap310', 'nombre' => 'ap310',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap41' => array(
                'label' => 'ap41', 'nombre' => 'ap41',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap42' => array(
                'label' => 'ap42', 'nombre' => 'ap42',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap43' => array(
                'label' => 'ap43', 'nombre' => 'ap43',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap44' => array(
                'label' => 'ap44', 'nombre' => 'ap44',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap45' => array(
                'label' => 'ap45', 'nombre' => 'ap45',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap46' => array(
                'label' => 'ap46', 'nombre' => 'ap46',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap47' => array(
                'label' => 'ap47', 'nombre' => 'ap47',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap48' => array(
                'label' => 'ap48', 'nombre' => 'ap48',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap49' => array(
                'label' => 'ap49', 'nombre' => 'ap49',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap410' => array(
                'label' => 'ap410', 'nombre' => 'ap410',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap51' => array(
                'label' => 'ap51', 'nombre' => 'ap51',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap52' => array(
                'label' => 'ap52', 'nombre' => 'ap52',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap53' => array(
                'label' => 'ap53', 'nombre' => 'ap53',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap54' => array(
                'label' => 'ap54', 'nombre' => 'ap54',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap55' => array(
                'label' => 'ap55', 'nombre' => 'ap55',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap56' => array(
                'label' => 'ap56', 'nombre' => 'ap56',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap57' => array(
                'label' => 'ap57', 'nombre' => 'ap57',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap58' => array(
                'label' => 'ap58', 'nombre' => 'ap58',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap59' => array(
                'label' => 'ap59', 'nombre' => 'ap59',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            ),
            'ap510' => array(
                'label' => 'ap510', 'nombre' => 'ap510',
                'tipo' => 'decimal', 'tamano' => 10,
                'atributos' => ''
            )
        );
        return $this;
    }
}