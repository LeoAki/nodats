<?php
/**
 * Description of docenteController
 *
 * @author lncc01
 */
class docenteController extends Controller {

    public function  __construct() {
        parent::__construct();
    }

    public function index() {
        $this->_view->titulo='Datos de los docentes';
        $this->_view->setJS(array('index'));
        $model=  $this->loadModel('docente');
        $this->_view->docente=$model->listdocent();
        $this->_view->renderizar('index','home');
    }
    

}
?>
