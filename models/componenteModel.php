<?php
/**
 * Description of componenteModel
 *
 * @author aquino
 */
class componenteModel  extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function listbycode($idem) {
        $lis=  $this->_db->query('select codigo,sinature,bimestre,nrocomponente,componente,total_criterio
            from Component where codigo='.$idem);
        return $lis->fetchall();
    }

    public function listbySinature($sinature){
        $lis=  $this->_db->query('select codigo,sinature,bimestre,nrocomponente,componente,total_criterio
            from Component where sinature='.$sinature);
        return $lis->fetchall();
    }
    
    public function grabar($code,$sinat,$bim,$nroc,$criterios) {
        $this->_db->prepare('Call Sp_Componente(:code,:sina,:bim,:nroc,:crit)')
                ->execute(array(
                    ':code'=>$code,
                    ':sina'=>$sinat,
                    ':bim'=>$bim,
                    ':nroc'=>$nroc,
                    ':crit'=>$criterios
                ));
        return $this->_db->errno;
    }
    
    public function deletebycode($idem) {
        $idem=(int) $idem;
        $this->_db->query('delete from Component where codigo='.$idem);
    }
    
}

?>
