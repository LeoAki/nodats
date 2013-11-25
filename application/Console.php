<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
ini_set('display_errors', 1);

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('APP_PATH', ROOT . DS);


require_once APP_PATH . 'Config.php';
require_once APP_PATH . 'Autoload.php';


class Console {

    public function createFormClasses() {
        require_once './Database.php';
        $db = new Database();
        $sql_param = "SELECT PARAMETER_NAME, DATA_TYPE, CHARACTER_MAXIMUM_LENGTH, NUMERIC_PRECISION
FROM information_schema.parameters 
WHERE SPECIFIC_NAME = :sp AND 
SPECIFIC_SCHEMA = :db
ORDER BY ORDINAL_POSITION;
";
//        $sql_param = "SELECT COLUMN_NAME as PARAMETER_NAME, DATA_TYPE, 
//            CHARACTER_MAXIMUM_LENGTH, NUMERIC_PRECISION
//FROM information_schema.COLUMNS 
//WHERE TABLE_NAME = :sp AND 
//TABLE_SCHEMA = :db
//ORDER BY ORDINAL_POSITION;";
        $class = '<?php

class %sForm extends Form {

    public function buildFields(){
        $this->fields = array(%s
        );
        return $this;
    }
}';
        $st = $db->query('select name from mysql.proc');
//        $st = $db->query("SELECT TABLE_NAME as name FROM information_schema.TABLES
//WHERE TABLE_SCHEMA='".DB_NAME."' AND TABLE_TYPE='BASE TABLE' ;");
        $st->execute();
        $procedures = $st->fetchAll();
        $stf = $db->prepare($sql_param);
        $field = "
            '%s' => array(
                'label' => '%s', 'nombre' => '%s',
                'tipo' => '%s', 'tamano' => %s,
                'atributos' => '%s'
            )";
        foreach ($procedures as $proc) {
            $procname = $proc['name'];
            $stf->execute(array('sp'=>$proc['name'],'db'=>DB_NAME));
            $parameters =$stf->fetchAll();
            $fields = array();
            foreach ($parameters as $parameter) {
                $fields[] = sprintf($field, $parameter['PARAMETER_NAME'],
                        $parameter['PARAMETER_NAME'],
                        $parameter['PARAMETER_NAME'],
                        $parameter['DATA_TYPE'], in_array($parameter['DATA_TYPE'], array(
                        'int', 'number', 'float', 'double', 'bigint', 'decimal'
                    ))?$parameter['NUMERIC_PRECISION']:
                    null === $parameter['CHARACTER_MAXIMUM_LENGTH']?
                        10:$parameter['CHARACTER_MAXIMUM_LENGTH'],
                        '');
            }
            $filecontent = sprintf($class, $procname, implode(',', $fields));
            $filename = '../forms/'.$procname . 'Form.php';
            $handle = fopen($filename, 'w');
            fwrite($handle, $filecontent);
            flush();
            fclose($handle);
        }
        
    }
}
$app = new Console();
$app->createFormClasses();