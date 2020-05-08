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

            $pwd = hash('sha256', $this->password1);
            

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


    public function iniciar_sesion(){
        $pwd = hash('sha256', $this->password1);

        $sql = "select * from clientes where email = '$this->email' && password = '$pwd'";
        $result = $this->conexion->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $_SESSION['login'] = $row;
                $_SESSION['login']['status'] = 1;
                $_SESSION['login']['pwd'] = $this->password1;

                $data = [
                    'estado' => 'success',
                    'message' => 'Inicio de sesion correcto.'
                ];
            }
        }else{
            $_SESSION['login']['status'] = 0;
            $data = [
                'estado' => 'error',
                'message' => 'Email y/o contraseñas inválidas.',
                'email' => $this->email,
                'password' => $pwd
            ];
        }
        
        return $data;
    }





}




?>