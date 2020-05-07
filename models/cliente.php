<?php
require_once("models/db.php");

class cliente extends db{

    public $email;
    public $dni;
    public $nombre;
    public $apellidos = null;
    public $direccion;
    public $password1;
    public $password2;
    public $telefono;
    public $calle;
    public $numero;
    public $localidad;


    public function registrar(){

        if($this->password1 == $this->password2){
            // la password 1 y la 2 son iguales

            $pwd = hash('sha256', 'sha256');
            

            $sql = "INSERT INTO clientes(email, dni, password, nombre, apellidos, telefono, calle, numero, localidad) VALUES('$this->email', '$this->dni', '$pwd', '$this->nombre', '$this->apellidos', '$this->telefono', '$this->calle', '$this->numero', '$this->localidad')";

            if($this->conexion->query($sql)){
                $data = [
                    'status' => 'success',
                    'message' => 'Registrado correctamente.'
                ];
            }else{

                // por defecto
                $data = [
                    'status' => 'error',
                    'message' => $this->conexion->error
                ];



                if($this->conexion->errno == 1062){
                    $data = [
                        'status' => 'error',
                        'message' => 'Email o dni ya registrado.'
                    ];
                }

                
            }

            

        }else{
            // las contraseñas no coinciden
            $data = [
                'status' => 'error',
                'message' => 'Las contraseñas no coinciden.'
            ];
        }

        return $data;

        
    }


}




?>