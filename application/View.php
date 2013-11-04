<?php

/*
 * -------------------------------------

 * View.php
 * -------------------------------------
 */


class View
{
	private $_controlador;
	private $_js;

	public function __construct(Request $peticion) {
		$this->_controlador = $peticion->getControlador();
		$this->_js = array();
	}


	/*
	 *  Esta funci�n vuelve a cargar la pagina
	 *
	 *
	 */
	public function renderizar($vista, $layout=null, $partial = false)
	{
                if(!$layout)
                    $layout = DEFAULT_LAYOUT;
		$js = array();

		if(count($this->_js)){
			$js = $this->_js;
		}

		$_layoutParams = array(
            'ruta_css' => BASE_URL . 'views/layout/' . $layout . '/css/',
            'ruta_img' => BASE_URL . 'views/layout/' . $layout . '/img/',
            'ruta_js' => BASE_URL . 'views/layout/' . $layout . '/js/',
            'js' => $js
		);

		$rutaView = ROOT . 'views' . DS . $this->_controlador . DS . $vista . '.phtml';
		 
		if(is_readable($rutaView)){
			if (!$partial) {
				include_once ROOT . 'views'. DS . 'layout' . DS . $layout . DS . 'header.php';
				include_once $rutaView;
				include_once ROOT . 'views'. DS . 'layout' . DS . $layout . DS . 'footer.php';
			}
			else
			include_once $rutaView;
		}
		else {
			throw new Exception('Error de vista');
		}
	}

	/*
	 *  carga los js  especificos del controlador
	 *
	 */

	public function setJs(array $js)
	{
		if(is_array($js) && count($js)){
			for($i=0; $i < count($js); $i++){
				$this->_js[] = BASE_URL . 'views/' . $this->_controlador . '/js/' . $js[$i] . '.js';
			}
		} else {
			throw new Exception('Error de js');
		}
	}

}

?>
