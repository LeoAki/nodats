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
        $lis=  $this->_db->query('select codigo,sinature,bimestre,nrocomponent,componente,total_criterio
            from Component where codigo='.$idem);
        return $lis->fetchall(PDO::FETCH_CLASS);
    }

    public function listbySinature($sinature){
        $lis=  $this->_db->query('select codigo,sinature,bimestre,nrocomponent,componente,total_criterio
            from Component where sinature='.$sinature);
        return $lis->fetchall(PDO::FETCH_CLASS);
    }
    
    public function listbySinaturebybimestre($sinature,$bimestre){
//        echo 'select codigo,sinature,bimestre,nrocomponent,componente,total_criterio
//            from Component where sinature='.$sinature.' and bimestre='.$bimestre;
        
        $lis=  $this->_db->query('select codigo,sinature,bimestre,nrocomponent,componente,total_criterio
            from Component where sinature='.$sinature.' and bimestre='.$bimestre);
        return $lis->fetchall(PDO::FETCH_CLASS);
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
