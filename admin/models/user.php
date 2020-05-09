<?php
require_once("../models/db.php");
session_start();

class user extends db{

    public $usuario, $password;

    public function login(){
        $sql = "select * from usuarios where usuario = '$this->usuario' && password = '$this->password'";
        $result = $this->conexion->query($sql);
        if($result->num_rows>0){
            $_SESSION['admin']['status'] = 1;
            $_SESSION['admin']['usuario'] = $this->usuario;
            $_SESSION['admin']['password'] = $this->password;

            $data=[
                'status' => 'success',
                'message' => 'usuario correcto'
            ];
            echo "<meta http-equiv='refresh' content='1; url=index.php'>";

        }else{
            session_destroy();
            $data=[
                'status' => 'danger',
                'message' => 'usuario y/o contraseñas incorectas'
            ];
        }
        
        return $data;
    }

}

?>