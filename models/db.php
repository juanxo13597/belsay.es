<?php

class db{    
    private $host       = "localhost";
    private $usuario    = "root";
    private $clave      = "";
    private $db         = "belsay";
    public $conexion;

    public function __construct(){
        $this->conexion = new mysqli($this->host, $this->usuario, $this->clave,$this->db) or die(mysql_error());
        $this->conexion->set_charset("utf8");
    }

}

?>