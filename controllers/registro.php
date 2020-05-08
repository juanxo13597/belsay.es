<?php
require_once("models/cliente.php");
$registro = new cliente();
$message = null;


if(isset($_POST['registrar'])){

    $registro->email = $_POST['email'];
    $registro->dni = $_POST['dni'];
    $registro->nombre = $_POST['nombre'];
    $registro->apellidos = $_POST['apellidos'];
    $registro->telefono = $_POST['telefono'];
    $registro->password1 = $_POST['password1'];
    $registro->password2 = $_POST['password2'];
    $registro->calle = $_POST['calle'];
    $registro->numero = $_POST['numero'];
    $registro->localidad = $_POST['localidad'];

    $result = $registro->registrar();

    if($result['status'] == 'success'){
        $message = "<div class='alert alert-success'>".$result['message']."</div>";
    }elseif($result['status'] == 'error'){
        $message = "<div class='alert alert-danger'>".$result['message']."</div>";
    }else{
        $message = null;
    }
}


require_once("views/registro.php");
?>