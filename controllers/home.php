<?php
require_once("models/home.php");
require_once("models/cliente.php");
$home = new home();
$cliente = new cliente();

$horario = $home->horario();

if(isset($_POST['inicio_sesion'])){
    $cliente->email = $_POST['email'];
    $cliente->password1 = $_POST['password'];

    $inicio_sesion = $cliente->iniciar_sesion();
    if($inicio_sesion['status'] = 1){
        echo "<meta http-equiv='refresh' content='1; url=index.php'>";
    }


    if($inicio_sesion['estado'] == 'success'){
        $message = "<div class='alert alert-success'>".$inicio_sesion['message']."</div>";
    }elseif($inicio_sesion['estado'] == 'error'){
        $message = "<div class='alert alert-danger'>".$inicio_sesion['message']."</div>";
    }

}

if($inicio_sesion['estado'] == 'success'){
    $message = "<div class='alert alert-success'>".$inicio_sesion['message']."</div>";
}elseif($inicio_sesion['estado'] == 'error'){
    $message = "<div class='alert alert-danger'>".$inicio_sesion['message']."</div>";
}else{
    $message = null;
}



require_once("views/home.php");
?>