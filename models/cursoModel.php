<?php
/**
 * Description of cursoModel
 *
 * @author aquino
 */
class cursoModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function Listarcursos() {
        $cursos=  $this->_db->query('select * from Curso');
        return $cursos->fetchall();
    }
    
    public function Grabar($codigo,$curso) {
        $this->_db->prepare("Call Sp_Curso(:codigo,:curso)")
                ->execute(
                        array(
                            ':codigo'=>$codigo,
                            ':curso'=>$curso
                        ));
    }
    
    public function delete($codigo) {
        $codigo= (int) $codigo;
        $this->_db->query('Delete from Curso where codigo ='.$codigo);
    }
}

?>
