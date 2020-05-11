<?php
require_once("models/db.php");

class cerrar_sesion extends db{
    public function cerrarsesion(){
        $id_cliente = $_SESSION['login']['id'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $email = $_SESSION['email'];
        $sql_log = "insert into log_clientes(cliente_id, accion, ip, email) values('$id_cliente', '(cerrar sesion)', '$ip', $email)";
        $this->conexion->query($sql_log);
        session_destroy();
        echo "<meta http-equiv='refresh' content='1; url=index.php'>";
    }
}

$cerrarsesion=new cerrar_sesion();
$cerrarsesion->cerrarsesion();


?>