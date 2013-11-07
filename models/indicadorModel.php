<?php
/**
 * Description of indicadorModel
 *
 * @author aquino
 */
class indicadorModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function listbycomponent($idemcomponent) {
        $lis=  $this->_db->query('select codigo,idcomponente,nro_criterio,criterio,peso
            from Indicador where codigo='.$idem);
        return $lis->fetchall(PDO::FETCH_CLASS);
    }
    
    public function deleteindicadorbycode($idem) {
        $idem = (int) $idem;
        $this->_db->query('delete from Indicador where codigo='.$idem);
    }
    
    public function Grabar($code,$idcom,$nro,$crite,$peso) {
        $this->_db->prepare('Call Sp_Indicador(:code,:idcom,:nro,:crite,:peso)')
               ->execute(array(
                   ':code'=>$code,
                   ':idcom'=>$idcom,
                   ':nro'=>$nro,
                   ':crite'=>$crite,
                   ':peso'=>$peso
               ));
       return $this->_db->errno;
    }

    public function ListaAsignaturasbynivelbygrado($nivel,$grado) {
        echo "select codigo,asinatura from 
            descripcionsinature where nomnivel=".$nivel." and  grado like '%".$grado."%';";
        $list=$this->_db->query("select codigo,asinatura from 
            descripcionsinature where nomnivel=".$nivel." and  grado like '%".$grado."%';");
        return $list->fetchall(PDO::FETCH_CLASS);
    }
    
}

?>
