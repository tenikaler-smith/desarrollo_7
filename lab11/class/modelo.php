<?php
/**
 * Created by PhpStorm.
 * User: Smith_Jimenez
 * Date: 10/15/2017
 * Time: 04:25
 */
require_once('config.php');

class modeloCredencialesBD{
    protected $_db;

    public function __construct()
    {
        $this->_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if($this->_db ->connect_errno){
            echo "fallo al conectar a la base de datos ".$this->_db->connect_errno;
            return;
        }
    }
}
