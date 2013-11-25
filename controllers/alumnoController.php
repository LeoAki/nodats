<?php

/**
 * Description of cursoController
 *
 * @author aquino
 */
class alumnoController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->_view->mensaje = $this->getMensaje();
        $this->_view->titulo = 'Consulta de Alumnos';
        $this->_view->setJS(array('index'));
        $this->_view->renderizar('index', 'home');
    }

    public function nuevo() {
        $nivel = $this->loadModel('nivel');
        $form = $this->_view->getForm('Sp_alumno');
        $this->_view->titulo = 'Registro de Alumnos';
        $this->_view->setJS(array('nuevo'));
        $this->_view->niveles = $nivel->listarniveles();
        $this->_view->grados = $nivel->listargrados();
        $this->_view->form = $form;
        $this->setMensaje(array(
            'tipo' => 'success',
            'texto' => 'Registro Grabado con exito'
        ));
        $this->_view->renderizar('nuevo', 'home');
    }

    public function grabar() {
        $model = $this->loadModel('alumno');
        $form = $this->_view->getForm('Sp_alumno');
        $form->handleRequest();
        $values = $form->getFieldValues();
        if ($model->Grabar($values)) {
            $this->redireccionar('alumno/index');
        }
        $this->nuevo();
    }

    public function editar($codigo = null) {
        $this->_view->titulo = 'Edicion de Alumnos';
        $model = $this->loadModel('alumno');
        $form = $this->_view->getForm('Sp_alumno');
        $obj = $model->findByCodigo($codigo);
        $form->setFieldValues($obj);
        $this->_view->form=$form;
        $this->_view->setJS(array('editar'));
        $this->setMensaje(array(
            'tipo' => 'success',
            'texto' => 'Registro modificado con exito'
        ));
        $this->_view->renderizar('editar', 'home');
    }

}

?>
