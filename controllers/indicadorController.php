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
        $this->setMensaje(array(
            'tipo' => 'success',
            'texto' => 'Registro Grabado con exito'
        ));
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
        $this->_view->titulo='Asignaturas del '.$grado.' grado/años del nivel '.$nivel;
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
    
    public function criterio($asinaturacode=0,$bimestre=BIM_ACTUAL) {
        $modelcomponente= $this->loadModel('componente');
        $modelindicador = $this->loadModel('indicador');
        $this->_view->serviceindicador = $modelindicador;
        $this->_view->titulo='Criterios De Evaluación del '.$bimestre.' bimestre';
        $this->_view->sinatures=$asinaturacode;
        $this->_view->bimestre=$bimestre;
        $this->_view->componente=$modelcomponente->listbySinaturebybimestre($asinaturacode,$bimestre);
        $this->_view->renderizar('listacriterio','home');
    }
    
    public function listindicador($componente) {
        $modelindicador=  $this->loadModel('indicador');
        $this->_view->indicador=$modelindicador->listbycomponent($componente);
        $this->_view->renderizar('listacriterio','home');
    }
    
    public function add($componente,$bim,$sina) {
        $modelindicador= $this->loadModel('indicador');
        $count=  $modelindicador->CantIndByComp($componente)+1;
        $this->_view->titulo='AGREGAR UN NUEVO INDICADOR:::El numero del indicador es: '.$count;
        $this->_view->bim=$bim;
        $this->_view->sinatures=$sina;
        $this->_view->setJS(array('registrar'));
        $this->setMensaje(array(
            'tipo' => 'success',
            'texto' => 'Registro Grabado con exito'
        ));        
        $this->_view->numero=$count;
        $this->_view->componente=$componente;
        $this->_view->renderizar('registrar','home');
    }
    
    public function editar($codeind,$bimestre,$sinature) {
        $modelindicador= $this->loadModel('indicador');
        $this->_view->datosindicador=$modelindicador->listbycode($codeind);
        $this->_view->titulo='EDITAR EL INDICADOR DE CODIGO: '.$codeind;
        $this->_view->bim=$bimestre;
        $this->_view->sinatures=$sinature;
        $this->_view->setJS(array('editar'));
        $this->setMensaje(array(
            'tipo' => 'success',
            'texto' => 'Registro Grabado con exito'
        ));         
        $this->_view->renderizar('editar','home');
    }
    
    public function procedure() {
        $model=  $this->loadModel('indicador');
        if($model->Grabar($this->getParameters())){
            $this->redireccionar('indicador/criterio/'.$this->getPostParam('txtsina').'/'.$this->getPostParam('txtbimestre'));
        }
    }
    
    public function getParameters($keys = true) {
        $parameters = array();
        if($keys){
           if ($this->getTexto('code')) {
                $parameters['code'] = $this->getPostParam('txtcode');
            } else {
                $parameters['code'] = -1;
            }
            $parameters['idcom']=  $this->getPostParam('txtcomponente');
            $parameters['nro']=  $this->getPostParam('txtfiu');
            $parameters['crite']=  $this->getPostParam('txtcriterio');
            $parameters['peso']=  $this->getPostParam('txtpeso');
            
        }else{
            
            if ($this->getTexto('code')) {
                $parameters[] = $this->getPostParam('txtcode');
            } else {
                $parameters[] = -1;
            }
            $parameters[]=  $this->getPostParam('txtcomponente');
            $parameters[]=  $this->getPostParam('txtfiu');
            $parameters[]=  $this->getPostParam('txtcriterio');
            $parameters[]=  $this->getPostParam('txtpeso');
        }
        return ($parameters);
    }
    
}
?>