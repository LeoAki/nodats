<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of registroalumnoController
 *
 * @author lncc01
 */
class registroalumnoController extends Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->_view->mensaje = $this->getMensaje();
        $this->_view->titulo = 'Consulta de Alumnos';
        $this->_view->renderizar('index', 'home');
    }

    public function Iview($sinature,$sec,$reg) {
        $this->_view->titulo = 'Imprime Tu Registro::DAT';
        $modelreal= $this->loadModel('registroalumno');
        $this->_view->modelregistroal=$modelreal;
        $this->_view->NameResponsable=$modelreal->Nom_res_registr($reg);
        $this->_view->renderizar('iview', 'home');
    }

}
?>
