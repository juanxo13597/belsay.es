<?php
require_once("models/cliente.php");
$cliente = new cliente();
$datos = $cliente->datos_cliente($_SESSION['login']['id'])->fetch_assoc();

if(isset($_POST['guardar'])){

    $cliente->email = $_POST['email'];
    $cliente->dni = $_POST['dni'];
    $cliente->nombre = $_POST['nombre'];
    $cliente->apellidos = $_POST['apellidos'];
    $cliente->telefono = $_POST['telefono'];
    $cliente->calle = $_POST['calle'];
    $cliente->numero = $_POST['numero'];
    $cliente->localidad = $_POST['localidad'];

    $result = $cliente->cambiar_datos_perfil($_SESSION['login']['id']);

    if($result == true){
        $message = "<div class='alert alert-success'>Datos guardados correctamente</div>";
        echo "<meta http-equiv='refresh' content='1; url=?pag=perfil'>";
    }elseif($result = false){
        $message = "<div class='alert alert-danger'>ERROR</div>";
    }else{
        $message = null;
    }
}

require_once("views/perfil.php");
?>