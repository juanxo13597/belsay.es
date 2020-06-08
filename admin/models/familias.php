<?php
require_once("../models/db.php");

class familias extends db{
    public $nombre, $imagen;

    public function get_familias(){
        $sql = "select * from familias_local";
        return $result = $this->conexion->query($sql);
    }

    public function get_datos_familia_id($id){
        $sql = "select * from familias_local where id=$id";
        return $result = $this->conexion->query($sql);
    }

    public function modificar_familia($id, $img){

        if($img == ""){

            $sql = "UPDATE familias_local SET nombre='$this->nombre' WHERE id=$id";
        }else{

            $sql = "UPDATE familias_local SET nombre='$this->nombre', imagen='assets/img/carta/$img' WHERE id=$id";
        }

        
        if($this->conexion->query($sql) === TRUE){
            return "<div class='alert alert-primary' role='alert'>
            Familia guardada correctamente.
          </div> 
          <meta http-equiv='refresh' content='2; url=?pag=familias_local'>";
        }else{
            return $this->conexion->query->error;
        }
    }

    public function eliminar_familia($tipo, $id){
        var_dump($tipo); var_dump($id);
        if($tipo == 'local'){
            $sql = "DELETE FROM familias_local WHERE id=$id";
        }
        
        if($this->conexion->query($sql) === TRUE){
            return "<div class='alert alert-primary' role='alert'>
            Familia Eliminada correctamente.
          </div> 
          <meta http-equiv='refresh' content='2; url=index.php'>";
        }else{
            return $this->conexion->query->error;
        }

    }
    

    
}


?>