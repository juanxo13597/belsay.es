<?php
require_once("db.php");

class carta extends db{

    public function familias_local(){
        $sql = "select * from familias_local";
        return $result = $this->conexion->query($sql);
    }

    public function productos_local($familia){
        $sql = "select * from productos_local where familia_id='$familia'";
        return $result = $this->conexion->query($sql);
    }

    public function nombre_de_familia_local($id){
        $sql = "select nombre from familias_local where id = '$id'";
        return $result = $this->conexion->query($sql);
    }



}

?>