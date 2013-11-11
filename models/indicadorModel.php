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
    
    public function listbycode($idem) {
        $lis= $this->_db->query('select codigo,idcomponente,nro_criterio,criterio,peso
            from Indicador where codigo='.$idem);
        return $lis->fetchall(PDO::FETCH_CLASS);
    }
    
    public function listbycomponent($idemcomponent) {
        $lis=  $this->_db->query('select codigo,idcomponente,nro_criterio,criterio,peso
            from Indicador where idcomponente='.$idemcomponent);
        return $lis->fetchall(PDO::FETCH_CLASS);
    }
    
    public function deleteindicadorbycode($idem) {
        $idem = (int) $idem;
        $this->_db->query('delete from Indicador where codigo='.$idem);
    }
    
    public function Grabar(array $datos) {
        $stmt=$this->_db->prepare('Call Sp_Indicador(:code,:idcom,:nro,:crite,:peso)');
        if(!$stmt) return FALSE;    
        return $stmt->execute($datos);
    }

    public function ListaAsignaturasbynivelbygrado($nivel,$grado) {
        $list=$this->_db->query("select codigo,asinatura from 
            descripcionsinature where nomnivel='".$nivel."' and  grado like '%".$grado."%';");
        return $list->fetchall(PDO::FETCH_CLASS);
    }
    
    public function CantIndByComp($componente) {
        $componente = (int) $componente;
        $lis=  $this->_db->query('Select * from Indicador where idcomponente='.$componente);
        return $lis->rowCount();
    }
    
}

?>
