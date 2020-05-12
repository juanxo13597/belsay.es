<?php
require_once("../models/db.php");

class familias extends db{

    public function get_familias(){
        $sql = "select * from familias";
        return $result = $this->conexion->query($sql);
    }
    
}


?>