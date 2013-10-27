<?php

class indexController extends Controller
{
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {                
        $this->_view->titulo = 'Portada';
        $this->_view->renderizar('login');
    }
    
    public function login()
    {                
        $this->_view->titulo = 'Inicio de sesion';
        //$this->_view->renderizar('login');
        //$this->redireccionar('index/home');
        $this->_view->renderizar('index','home');
    }
    
    public function home()
    {                
        $this->_view->titulo = 'Portada';
        $this->_view->renderizar('index','home');
    }
}

?>