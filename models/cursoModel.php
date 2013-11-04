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
        return $cursos->fetchall(PDO::FETCH_CLASS);
    }
    
    public function buscarPorCodigo($codigo) {
        $cursos =  $this->_db->query("select * from Curso WHERE codigo = $codigo");
        //$cursos->bindValue('codigo', $codigo);
        return $cursos->fetchObject();
    }
    
    public function Grabar(array $datos) {
        $stmt = $this->_db->prepare("Call Sp_Curso(:codigo,:curso)");
        if(!$stmt) return false;
        return $stmt->execute($datos);
    }
    
    public function delete($codigo) {
        $codigo= (int) $codigo;
        $this->_db->query('Delete from Curso where codigo ='.$codigo);
    }
}

?>
