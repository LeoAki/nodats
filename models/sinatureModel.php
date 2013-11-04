<?php
/**
 * Description of sinatureModel
 *
 * @author aquino
 */
class sinatureModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function Listar() {
        $listgrados=  $this->_db->query('select * from Asinatura');
        return $listgrados->fetchall();
    }
    
    public function Grabar($idem,$idemgrado,$idemnivel,$idemcurso,$sinature,$abreviatura,$horas,$nrocapacidades) {
        $this->_db->prepare('Call Sp_Asinatura(:idem,:grado,:nivel,:curso,:sinatura,:abreviatura,:horas,:capacidades)')
        ->execute(
            array(
              ':idem'=>$idem,
              ':grado'=>$idemgrado,
              ':nivel'=>$idemnivel,
              ':curso'=>$idemcurso,
              ':sinatura'=>$sinature,
              ':abreviatura'=>$abreviatura,
              ':horas'=>$horas,
              ':capacidades'=>$nrocapacidades
          ));
    }
    
    public function deletesinature($idem) {
        $idem= (int) $idem;
        $this->_db->query('delete from Asinatura where codigo='.$idem);
    }
    
    public function detallesinature() {
        $lista= $this->_db->query('select * from descripcionsinature');
        return $lista->fetchall();
    }
    
    public function detallesinaturebyidem($idem) {
        $listar= $this->_db->query('select * from descripcionsinature where codigo='.$idem);
        return $listar->fetchall();
    }
    
}

?>