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

                //insert log
                $sql_id = "select id from clientes where email = '$this->email'";
                $result_id = $this->conexion->query($sql_id)->fetch_assoc();
                $id_cliente = $result_id['id'];
                $sql_log = "insert into log_clientes(cliente_id, accion, ip, email) values($id_cliente, '(REGISTRADO) Correctamente', '$ip', '$this->email')";
                $this->conexion->query($sql_log);

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

                    $sql_log = "insert into log_clientes(cliente_id, accion, ip, email) values(NULL, '(NO REGISTRADO) Error / email o dni existente', '$ip', '$this->email')";
                    $this->conexion->query($sql_log);

                }else{
                    $sql_log = "insert into log_clientes(cliente_id, accion, ip, email) values(NULL, '(NO REGISTRADO) Error', '$ip', '$this->email')";
                    $this->conexion->query($sql_log);
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
        $ip = $_SERVER['REMOTE_ADDR'];

        $sql = "select * from clientes where email = '$this->email' && password = '$pwd'";
        $result = $this->conexion->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $_SESSION['login'] = $row;
                $_SESSION['login']['status'] = 1;
                $_SESSION['login']['pwd'] = $this->password1;
                $id_cliente = $row['id'];

                $data = [
                    'estado' => 'success',
                    'message' => 'Inicio de sesion correcto.'
                ];
            }

            // insertar log
            
            $sql_log = "insert into log_clientes(cliente_id, accion, ip, email) values('$id_cliente', '(INICIO SESION) corecto', '$ip', '$this->email')";
            $this->conexion->query($sql_log);


        }else{
            $_SESSION['login']['status'] = 0;
            $data = [
                'estado' => 'error',
                'message' => 'Email y/o contraseñas inválidas.',
                'email' => $this->email,
                'password' => $pwd
            ];

            //insert log
            $sql_email = "select id from clientes where email = '$this->email'";
            $result_email = $this->conexion->query($sql_email)->fetch_assoc();
            $id_cliente = $result_email['id'];
            $email = $this->email;
            if($result_email == null){
                $sql_log = "insert into log_clientes(cliente_id, accion, ip, email) values(NULL, '(INICIO SESION) Fallido / email no encontrado', '$ip', '$email')";
            }else{
                $sql_log = "insert into log_clientes(cliente_id, accion, ip, email) values($id_cliente, '(INICIO SESION) Fallido', '$ip', '$email')";
            }

            $result_log = $this->conexion->query($sql_log);



        }


        return $data;
    }


    public function datos_cliente($id){
        $sql = "select * from clientes where id = '$id'";
        $result = $this->conexion->query($sql);

        return $result;
    }

    public function cambiar_datos_perfil($id){
        $sql = "UPDATE clientes SET email='$this->email',
        dni='$this->dni',
        nombre='$this->nombre',
        apellidos='$this->apellidos',
        telefono='$this->telefono',
        calle='$this->calle',
        numero='$this->numero',
        localidad='$this->localidad'
        WHERE id=$id";

        $result = $this->conexion->query($sql);

        return $result;
    }





}




?>