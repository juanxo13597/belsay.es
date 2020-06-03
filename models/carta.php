<?php
require_once("db.php");

class carta extends db{

    //LOCAL
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


    //DOMICILIO
    public function familias_domicilio(){
        $sql = "select * from familias_domicilio";
        return $result = $this->conexion->query($sql);
    }

    public function productos_domicilio($familia){
        $sql = "select * from productos_domicilio where familia_id='$familia'";
        return $result = $this->conexion->query($sql);
    }

    public function nombre_de_familia_domicilio($id){
        $sql = "select nombre from familias_domicilio where id = '$id'";
        return $result = $this->conexion->query($sql);
    }



}

?>