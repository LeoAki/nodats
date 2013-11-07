<?php
/**
 * Description of indicadorController
 *
 * @author lncc01
 */
class indicadorController extends Controller
{
    public function  __construct() {
        parent::__construct();
    }

    public function index() {
        $this->_view->titulo='Indicadores-Elige el Nivel';
        $this->_view->renderizar('index','home');
    }

    public function inicial(){
        $this->_view->titulo='Grados del nivel Inicial';
        $this->_view->renderizar('inicial','home');
    }

    public function primaria(){
        $this->_view->titulo='Grados del nivel Primaria';
        $this->_view->renderizar('primaria','home');
    }

    public function secundaria(){
        $this->_view->titulo='Grados del nivel Secundaria';
        $this->_view->renderizar('secundaria','home');
    }

    public function sinaturas($nivel='',$grado='') {
        $model= $this->loadModel('indicador');
        $this->_view->titulo='Asignaturas del'.$grado.' de '.$nivel;
        if($nivel!= '' & $grado!= ''):
            switch ($nivel) {
                case 'inicial': $this->_view->areas=$model->ListaAsignaturasbynivelbygrado('inicial',$grado); break;
                case 'primaria': $this->_view->areas=$model->ListaAsignaturasbynivelbygrado('primaria',$grado); break;
                case 'secundaria':$this->_view->areas=$model->ListaAsignaturasbynivelbygrado('secundaria',$grado); break;
                default:
                    break;
            }
        $this->_view->renderizar('versinaturas','home');
        endif;
    }
}
?>
