<?php
require_once("db.php");

class carta extends db{

    public function familias(){
        $sql = "select * from familias";
        return $result = $this->conexion->query($sql);
    }



}

?>