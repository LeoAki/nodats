<?php

class Sp_alumnoForm extends Form {

    public function buildFields(){
        $this->fields = array(
            'acodigo' => array(
                'label' => 'acodigo', 'nombre' => 'acodigo',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'acod_seccion' => array(
                'label' => 'acod_seccion', 'nombre' => 'acod_seccion',
                'tipo' => 'select', 'tamano' => 10,
                'atributos' => ''
            ),
            'apaterno' => array(
                'label' => 'apaterno', 'nombre' => 'apaterno',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            'amaterno' => array(
                'label' => 'amaterno', 'nombre' => 'amaterno',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            'anombres' => array(
                'label' => 'anombres', 'nombre' => 'anombres',
                'tipo' => 'varchar', 'tamano' => 20,
                'atributos' => ''
            ),
            'anacionalidad' => array(
                'label' => 'anacionalidad', 'nombre' => 'anacionalidad',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            'asexo' => array(
                'label' => 'asexo', 'nombre' => 'asexo',
                'tipo' => 'char', 'tamano' => 1,
                'atributos' => ''
            ),
            'adni' => array(
                'label' => 'adni', 'nombre' => 'adni',
                'tipo' => 'char', 'tamano' => 8,
                'atributos' => ''
            ),
            'afechainscripcion' => array(
                'label' => 'afechainscripcion', 'nombre' => 'afechainscripcion',
                'tipo' => 'date', 'tamano' => 10,
                'atributos' => ''
            ),
            'amatriculante' => array(
                'label' => 'amatriculante', 'nombre' => 'amatriculante',
                'tipo' => 'varchar', 'tamano' => 100,
                'atributos' => ''
            ),
            'afechanacimiento' => array(
                'label' => 'afechanacimiento', 'nombre' => 'afechanacimiento',
                'tipo' => 'date', 'tamano' => 10,
                'atributos' => ''
            ),
            'adepartamento_nac' => array(
                'label' => 'adepartamento_nac', 'nombre' => 'adepartamento_nac',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            'aprovincia_nac' => array(
                'label' => 'aprovincia_nac', 'nombre' => 'aprovincia_nac',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            'adistrito_nac' => array(
                'label' => 'adistrito_nac', 'nombre' => 'adistrito_nac',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            'alocalidad_nac' => array(
                'label' => 'alocalidad_nac', 'nombre' => 'alocalidad_nac',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            'atipodeparto' => array(
                'label' => 'atipodeparto', 'nombre' => 'atipodeparto',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            'adescripcion_parto' => array(
                'label' => 'adescripcion_parto', 'nombre' => 'adescripcion_parto',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            'adepartamento' => array(
                'label' => 'adepartamento', 'nombre' => 'adepartamento',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            'aprovincia' => array(
                'label' => 'aprovincia', 'nombre' => 'aprovincia',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            'adistrito' => array(
                'label' => 'adistrito', 'nombre' => 'adistrito',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            'adomicilio' => array(
                'label' => 'adomicilio', 'nombre' => 'adomicilio',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            'aano_residencia' => array(
                'label' => 'aano_residencia', 'nombre' => 'aano_residencia',
                'tipo' => 'char', 'tamano' => 4,
                'atributos' => ''
            ),
            'acelular' => array(
                'label' => 'acelular', 'nombre' => 'acelular',
                'tipo' => 'char', 'tamano' => 9,
                'atributos' => ''
            ),
            'afijo' => array(
                'label' => 'afijo', 'nombre' => 'afijo',
                'tipo' => 'varchar', 'tamano' => 9,
                'atributos' => ''
            ),
            'arpm' => array(
                'label' => 'arpm', 'nombre' => 'arpm',
                'tipo' => 'varchar', 'tamano' => 9,
                'atributos' => ''
            ),
            'arpc' => array(
                'label' => 'arpc', 'nombre' => 'arpc',
                'tipo' => 'varchar', 'tamano' => 9,
                'atributos' => ''
            ),
            'aemail' => array(
                'label' => 'aemail', 'nombre' => 'aemail',
                'tipo' => 'varchar', 'tamano' => 55,
                'atributos' => ''
            ),
            'areligion' => array(
                'label' => 'areligion', 'nombre' => 'areligion',
                'tipo' => 'varchar', 'tamano' => 50,
                'atributos' => ''
            ),
            'aalergicomedicamento1' => array(
                'label' => 'aalergicomedicamento1', 'nombre' => 'aalergicomedicamento1',
                'tipo' => 'varchar', 'tamano' => 100,
                'atributos' => ''
            ),
            'aalergicomedicamento2' => array(
                'label' => 'aalergicomedicamento2', 'nombre' => 'aalergicomedicamento2',
                'tipo' => 'varchar', 'tamano' => 100,
                'atributos' => ''
            ),
            'aalergicomedicamento3' => array(
                'label' => 'aalergicomedicamento3', 'nombre' => 'aalergicomedicamento3',
                'tipo' => 'varchar', 'tamano' => 100,
                'atributos' => ''
            ),
            'aalergicomedicamento4' => array(
                'label' => 'aalergicomedicamento4', 'nombre' => 'aalergicomedicamento4',
                'tipo' => 'varchar', 'tamano' => 100,
                'atributos' => ''
            ),
            'aalergia_polvo_acaro' => array(
                'label' => 'aalergia_polvo_acaro', 'nombre' => 'aalergia_polvo_acaro',
                'tipo' => 'tinyint', 'tamano' => 10,
                'atributos' => ''
            ),
            'aalergia_humedad_hongos' => array(
                'label' => 'aalergia_humedad_hongos', 'nombre' => 'aalergia_humedad_hongos',
                'tipo' => 'tinyint', 'tamano' => 10,
                'atributos' => ''
            ),
            'atipo_sangre' => array(
                'label' => 'atipo_sangre', 'nombre' => 'atipo_sangre',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            'abecado' => array(
                'label' => 'abecado', 'nombre' => 'abecado',
                'tipo' => 'tinyint', 'tamano' => 10,
                'atributos' => ''
            ),
            'atipo_beca' => array(
                'label' => 'atipo_beca', 'nombre' => 'atipo_beca',
                'tipo' => 'varchar', 'tamano' => 15,
                'atributos' => ''
            ),
            'aresolucion_beca' => array(
                'label' => 'aresolucion_beca', 'nombre' => 'aresolucion_beca',
                'tipo' => 'varchar', 'tamano' => 50,
                'atributos' => ''
            ),
            'acant_hermanos' => array(
                'label' => 'acant_hermanos', 'nombre' => 'acant_hermanos',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'alugar_hermanos' => array(
                'label' => 'alugar_hermanos', 'nombre' => 'alugar_hermanos',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            'acolegioprocedente' => array(
                'label' => 'acolegioprocedente', 'nombre' => 'acolegioprocedente',
                'tipo' => 'varchar', 'tamano' => 100,
                'atributos' => ''
            )
        );
        return $this;
    }
}