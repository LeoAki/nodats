<?php
/**
 * Description of registroModel
 *
 * @author aquino
 */
class registroModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function listviewreg() {
        $list= $this->_db->query('
            select codigo, grado, nombreseccion, nomnivel, paterno, materno, nombres, dni,CODEASINA,asinatura,I,II,II,IV,iddocente
            from describeregistro');
        return $list->fetchall(PDO::FETCH_CLASS);
    }

    public function listviewregbydocent($iddocente) {
        $list= $this->_db->query('
            select codigo, grado, nombreseccion, nomnivel, paterno, materno, nombres, dni,CODEASINA,asinatura,I,II,III,IV,iddocente,seccioncode
            from describeregistro where iddocente='.$iddocente);
        return $list->fetchall(PDO::FETCH_CLASS);
    }
    
    public function activar_registro($codigo,$bimestre,$status) {
        #El status puede ser 0:debe nota/ 1:aperturado/ 2:concluido
        $codigo = (int) $codigo;
        $bimestre = (int) $bimestre;
        $status = (int) $status;
        $this->_db->query('update Registro set activo'.$bimestre.'='.$status);
        return $this->_db->errno;
    }
    
    public function changetutor($codetutor) {
        $codetutor= (int) $codetutor;
        $this->_db->query('update Registro set codigodocente='.$codetutor);
        return $this->_db->errno;
    }
    
    public function grabar($cod,$sec,$doc,$sin,$I,$II,$III,$IV){
        $this->_db->prepare('Call Sp_Registro(:uno,:dos,:tres,:cuatro,:cinco,:seis,:siete,:ocho)')
                ->execute(
                        array(
                            ':uno'=>$cod,
                            ':dos'=>$sec,
                            ':tres'=>$doc,
                            ':cuatro'=>$sin,
                            ':cinco'=>$I,
                            ':seis'=>$II,
                            ':siste'=>$III,
                            ':ocho'=>$IV
                        ));
        return $this->_db->errno;
    }
    
}

?>
