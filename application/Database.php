<?php

/*
 * -------------------------------------
  * Database.php
 * -------------------------------------
 */


class Database extends mysqli
{
    public function __construct() {
    
    	parent::__construct(DB_HOST,DB_USER,DB_PASS,DB_NAME);
       /* parent::__construct(
                'mysql:host=' . DB_HOST .
                ';dbname=' . DB_NAME,
                DB_USER, 
                DB_PASS, 
                array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' . DB_CHAR
                    ));
         */       
    }
}

?>
