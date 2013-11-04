<?php

/**
 * Description of cursoController
 *
 * @author aquino
 */
class cursoController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $model = $this->loadModel('curso');
        $this->_view->mensaje = $this->getMensaje();
        $this->_view->titulo = 'Consulta de Cursos';
        $this->_view->setJS(array('index'));        
        $this->_view->cursos = $model->Listarcursos();
        $this->_view->renderizar('index', 'home');
    }

    public function nuevo() {
        $this->_view->titulo = 'Registro de Cursos';
        $this->_view->setJS(array('nuevo'));
        $this->setMensaje(array(
            'tipo' => 'success',
            'texto' => 'Registro Grabado con exito'
        ));
        $this->_view->renderizar('nuevo', 'home');
    }

    public function grabar() {
        $model = $this->loadModel('curso');
        if ($model->Grabar($this->getParameters())) {
            $this->redireccionar('curso/index');
        }
    }

    public function editar($codigo = null) {
        $model = $this->loadModel('curso');
        $curso = $model->buscarPorCodigo($codigo);
        $this->_view->curso = $curso;
        $this->_view->titulo = 'Edición de Cursos';
        $this->_view->setJS(array('editar'));
        $this->setMensaje(array(
            'tipo' => 'success',
            'texto' => 'Registro modificado con exito'
        ));
        $this->_view->renderizar('editar', 'home');
    }

    public function getParameters($keys = true) {
        $parameters = array();
        if ($keys) {
            if ($this->getTexto('codigo')) {
                $parameters['codigo'] = $this->getPostParam('codigo');
            } else {
                $parameters['codigo'] = -1;
            }
            $parameters['curso'] = $this->getPostParam('curso');
        }else{
            if ($this->getTexto('codigo')) {
                $parameters[] = $this->getPostParam('codigo');
            } else {
                $parameters[] = -1;
            }
            $parameters[] = $this->getPostParam('curso');
        }
        return $parameters;
    }

}

?>
