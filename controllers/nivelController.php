<?php

class nivelController extends Controller
{
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {}
    
    public function seccionesAjax(){
    	$nivel = $_GET['nivel'];
    	$grado = $_GET['grado'];
    	$model = $this->loadModel('seccion');
    	$secciones = $model->listsectionByNivelGrado($nivel, $grado);
    	header('content-type', 'application/json');
    	json_encode($secciones);
    }
}

?>