<?php
require_once("../models/db.php");

class carta extends db{

    public function get_carta_local(){
        $sql = "select * from productos_local";
        return $result = $this->conexion->query($sql);
    }


}


?>