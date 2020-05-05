<?php
require_once("db.php");

class carta extends db{

    public function familias(){
        $sql = "select * from familias";
        return $result = $this->conexion->query($sql);
    }

    public function productos($familia){
        $sql = "select * from productos where familia_id='$familia'";
        return $result = $this->conexion->query($sql);
    }



}

?>