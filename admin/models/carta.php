<?php

class carta extends db{

    public function get_carta_local(){
        $sql = "select * from carta_local";
        return $result = $this->conexion->query($sql);
    }


}


?>