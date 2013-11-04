<?php
/**
 * Description of cursoController
 *
 * @author aquino
 */
class alumnoController extends Controller
{
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->_view->mensaje = $this->getMensaje();
        $this->_view->titulo = 'Consulta de Alumnos';
        $this->_view->setJS(array('index'));
        $this->_view->renderizar('index','home');
    }
    
    public function nuevo() {
        $this->_view->titulo = 'Registro de Alumnos';
        $this->_view->setJS(array('nuevo'));
        $this->setMensaje(array(
            'tipo' => 'success',
            'texto' => 'Registro Grabado con exito'
        ));
        $this->_view->renderizar('nuevo','home');        
    }
    
    public function grabar(){        
        $this->redireccionar('alumno/index');
    }
    
    public function editar($codigo=null){
        $this->_view->titulo = 'Edición de Alumnos';
        $this->_view->setJS(array('editar'));
        $this->setMensaje(array(
            'tipo' => 'success',
            'texto' => 'Registro modificado con exito'
        ));
        $this->_view->renderizar('editar','home');
    }
}

?>
