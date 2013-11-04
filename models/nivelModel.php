<?php
/**
 * Description of nivelModel
 * Este modelo tiene el list de de los niveles:Inicial/Primaria/Secundaria
 * Este modelo tiene el list de los grados: 3 años/ 4 años/ 1ero ...
 * @author aquino
 */
class nivelModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function listarniveles() {
        $niveles= $this->_db->query('select * from Nivel;');
        return $niveles->fetchall();
    }
    
    public function listargrados(){
        $grados=  $this->_db->query('select * from Grado;');
        return $grados->fetchall;
    }
}

?>
