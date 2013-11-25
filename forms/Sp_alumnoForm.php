<?php

class Sp_alumnoForm extends Form {

    public function buildFields(){
        $this->fields = array(
            array(
                'label' => 'acodigo', 'nombre' => 'acodigo',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'acod_seccion', 'nombre' => 'acod_seccion',
                'tipo' => 'select', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'apaterno', 'nombre' => 'apaterno',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            array(
                'label' => 'amaterno', 'nombre' => 'amaterno',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            array(
                'label' => 'anombres', 'nombre' => 'anombres',
                'tipo' => 'varchar', 'tamano' => 20,
                'atributos' => ''
            ),
            array(
                'label' => 'anacionalidad', 'nombre' => 'anacionalidad',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            array(
                'label' => 'asexo', 'nombre' => 'asexo',
                'tipo' => 'char', 'tamano' => 1,
                'atributos' => ''
            ),
            array(
                'label' => 'adni', 'nombre' => 'adni',
                'tipo' => 'char', 'tamano' => 8,
                'atributos' => ''
            ),
            array(
                'label' => 'afechainscripcion', 'nombre' => 'afechainscripcion',
                'tipo' => 'date', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'amatriculante', 'nombre' => 'amatriculante',
                'tipo' => 'varchar', 'tamano' => 100,
                'atributos' => ''
            ),
            array(
                'label' => 'afechanacimiento', 'nombre' => 'afechanacimiento',
                'tipo' => 'date', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'adepartamento_nac', 'nombre' => 'adepartamento_nac',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            array(
                'label' => 'aprovincia_nac', 'nombre' => 'aprovincia_nac',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            array(
                'label' => 'adistrito_nac', 'nombre' => 'adistrito_nac',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            array(
                'label' => 'alocalidad_nac', 'nombre' => 'alocalidad_nac',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            array(
                'label' => 'atipodeparto', 'nombre' => 'atipodeparto',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            array(
                'label' => 'adescripcion_parto', 'nombre' => 'adescripcion_parto',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            array(
                'label' => 'adepartamento', 'nombre' => 'adepartamento',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            array(
                'label' => 'aprovincia', 'nombre' => 'aprovincia',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            array(
                'label' => 'adistrito', 'nombre' => 'adistrito',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            array(
                'label' => 'adomicilio', 'nombre' => 'adomicilio',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            array(
                'label' => 'aano_residencia', 'nombre' => 'aano_residencia',
                'tipo' => 'char', 'tamano' => 4,
                'atributos' => ''
            ),
            array(
                'label' => 'acelular', 'nombre' => 'acelular',
                'tipo' => 'char', 'tamano' => 9,
                'atributos' => ''
            ),
            array(
                'label' => 'afijo', 'nombre' => 'afijo',
                'tipo' => 'varchar', 'tamano' => 9,
                'atributos' => ''
            ),
            array(
                'label' => 'arpm', 'nombre' => 'arpm',
                'tipo' => 'varchar', 'tamano' => 9,
                'atributos' => ''
            ),
            array(
                'label' => 'arpc', 'nombre' => 'arpc',
                'tipo' => 'varchar', 'tamano' => 9,
                'atributos' => ''
            ),
            array(
                'label' => 'aemail', 'nombre' => 'aemail',
                'tipo' => 'varchar', 'tamano' => 55,
                'atributos' => ''
            ),
            array(
                'label' => 'areligion', 'nombre' => 'areligion',
                'tipo' => 'varchar', 'tamano' => 50,
                'atributos' => ''
            ),
            array(
                'label' => 'aalergicomedicamento1', 'nombre' => 'aalergicomedicamento1',
                'tipo' => 'varchar', 'tamano' => 100,
                'atributos' => ''
            ),
            array(
                'label' => 'aalergicomedicamento2', 'nombre' => 'aalergicomedicamento2',
                'tipo' => 'varchar', 'tamano' => 100,
                'atributos' => ''
            ),
            array(
                'label' => 'aalergicomedicamento3', 'nombre' => 'aalergicomedicamento3',
                'tipo' => 'varchar', 'tamano' => 100,
                'atributos' => ''
            ),
            array(
                'label' => 'aalergicomedicamento4', 'nombre' => 'aalergicomedicamento4',
                'tipo' => 'varchar', 'tamano' => 100,
                'atributos' => ''
            ),
            array(
                'label' => 'aalergia_polvo_acaro', 'nombre' => 'aalergia_polvo_acaro',
                'tipo' => 'tinyint', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'aalergia_humedad_hongos', 'nombre' => 'aalergia_humedad_hongos',
                'tipo' => 'tinyint', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'atipo_sangre', 'nombre' => 'atipo_sangre',
                'tipo' => 'varchar', 'tamano' => 25,
                'atributos' => ''
            ),
            array(
                'label' => 'abecado', 'nombre' => 'abecado',
                'tipo' => 'tinyint', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'atipo_beca', 'nombre' => 'atipo_beca',
                'tipo' => 'varchar', 'tamano' => 15,
                'atributos' => ''
            ),
            array(
                'label' => 'aresolucion_beca', 'nombre' => 'aresolucion_beca',
                'tipo' => 'varchar', 'tamano' => 50,
                'atributos' => ''
            ),
            array(
                'label' => 'acant_hermanos', 'nombre' => 'acant_hermanos',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'alugar_hermanos', 'nombre' => 'alugar_hermanos',
                'tipo' => 'int', 'tamano' => 10,
                'atributos' => ''
            ),
            array(
                'label' => 'acolegioprocedente', 'nombre' => 'acolegioprocedente',
                'tipo' => 'varchar', 'tamano' => 100,
                'atributos' => ''
            )
        );
        return $this;
    }
}