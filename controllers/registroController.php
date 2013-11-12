<?php
/**
 * Description of registroController
 *
 * @author aquino
 */
class registroController extends Controller{
    
    public function  __construct() {
        parent::__construct();
    }
    
    public function  index() {
     
    }
    
    public function buscar($codedocente) {
        $this->_view->titulo='Mis registros';
        $modelo=  $this->loadModel('registro');
        $this->_view->busregbydoc=$modelo->listviewregbydocent($codedocente);
        $this->setMensaje(array(
            'tipo' => 'success',
            'texto' => 'Registro Grabado con exito'
        ));
        $this->_view->renderizar('registro','home');
    }

}
