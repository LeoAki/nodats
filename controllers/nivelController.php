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
        //print_r($secciones);exit;
    	header('Content-type: text/json');
    	echo json_encode($secciones);
    }
}

?>