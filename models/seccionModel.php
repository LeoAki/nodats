<?php

/**
 * Description of registroModel
 *
 * @author aquino
 */
class seccionModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function listsectionbynivel($level) {
        #INICIAL 1::inicial
        #PRIMARIA 2::primaria
        #SECUNDARIA 3::secundaria
        $filter = "";
        (is_numeric($level)) ? $filter = 's.cod_nivel' : $filter = 'n.nomnivel';
        $list = $this->_db->query('
                select code_seccion, code_nivel,nomnivel,grado,nombreseccion,TUTOR,AUXILIAR
                from describesection where ' . $filter . ' = ' . $level);
        return $list->fetchall();
    }

    public function listsectionbytutor($dnituto) {
        $list = $this->_db->query('
                select code_seccion, code_nivel,nomnivel,grado,nombreseccion,TUTOR,AUXILIAR
                from describesection where p.dni=' . $dnituto);
        return $list->fetchall();
    }

    public function listsectionByNivelGrado($level, $grado) {
        #INICIAL 1::inicial
        #PRIMARIA 2::primaria
        #SECUNDARIA 3::secundaria
        $list = $this->_db->prepare('
                select codigo, nombreseccion
                from Seccion where cod_nivel = :nivel and cod_grado= :grado');
        $list->bindParam(':nivel', $level);
        $list->bindParam(':grado', $grado);
        $list->execute();
        return $list->fetchall(PDO::FETCH_CLASS);
    }

    public function Grabar($param) {
        $this->_db->prepare('')->execute('');
        return $this->_db->errno;
    }

}

?>