<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of docenteModel
 *
 * @author lncc01
 */
class docenteModel extends Model{

    public function __construct() {
        parent::__construct();
    }

    public function searchbycode($code) {
        echo 'select * from Docente where codigo='.$code;
        $list=$this->_db->query('select * from Docente where codigo='.$code);
        return $list->fetchall(PDO::FETCH_CLASS);
    }

    public function listdocent() {
        $list=$this->_db->query('Select d.codigo,d.paterno,d.materno,d.nombres,d.dni,tp.tipo,pd.direccion,pd.cargo,pd.telefono,pd.celular,per.email
                                from Docente d
                                inner join TipoProfe tp on d.tipoprofe=tp.codigo
                                inner join personal_detallado pd on d.dni=pd.dni
                                inner join Persona per on d.codigopersona=per.codigo');
        return $list->fetchall(PDO::FETCH_CLASS);
    }
}
?>
