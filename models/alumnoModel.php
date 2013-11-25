<?php
/**
 * Description of cursoModel
 *
 * @author aquino
 */
class alumnoModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }    
       
    public function Grabar(array $datos) {
        $stmt = $this->_db->prepare("Call Sp_alumno(:acodigo,
:acod_seccion,
:apaterno,
:amaterno,
:anombres,
:anacionalidad,
:asexo,
:adni,
:afechainscripcion,
:amatriculante,
:afechanacimiento,
:adepartamento_nac,
:aprovincia_nac,
:adistrito_nac,
:alocalidad_nac,
:atipodeparto,
:adescripcion_parto,
:adepartamento,
:aprovincia,
:adistrito,
:adomicilio,
:aano_residencia,
:acelular,
:afijo,
:arpm,
:arpc,
:aemail,
:areligion,
:aalergicomedicamento1,
:aalergicomedicamento2,
:aalergicomedicamento3,
:aalergicomedicamento4,
:aalergia_polvo_acaro,
:aalergia_humedad_hongos,
:atipo_sangre,
:abecado,
:atipo_beca,
:aresolucion_beca,
:acant_hermanos,
:alugar_hermanos,
:acolegioprocedente)");
//        print_r( $stmt->errorCode());
//        print_r( $stmt->errorInfo());
//        exit;
        if(!$stmt) return false;
        return $stmt->execute($datos);
    }    
    
    public function findByCodigo($codigo){
        $lis=  $this->_db->query('select * from alumno where codigo='.$codigo);
        return $lis->fetch(PDO::FETCH_ASSOC);
    }
    
}

?>
