<?php
require_once("models/user.php");
error_reporting(0);
?>


<?php
if(isset($_POST['login'])){

    $login = new user();
    $login->usuario = $_POST['usuario'];
    $login->password = $_POST['password'];
    $result = $login->login();


        $mensaje = "<div class='alert alert-".$result['status']."' role='alert'>
        ".$result['message']."
      </div>";



}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main.css">
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/jquery-3.4.1.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>LOGIN ADMIN - Belsay</title>
</head>

<body class="bg-dark">

    <div class="container text-center">
        <form class="bg-light p-5" method="post">
        <?=$mensaje?>
            <div class="form-group">
                <label for="exampleInputEmail1">Usuario:</label>
                <input type="text" class="form-control" name="usuario"
                    placeholder="Usuario">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña:</label>
                <input type="password" class="form-control" name="password" placeholder="Contraseña">
            </div>

            <button type="submit" class="btn btn-primary" name="login">Entrar</button>
        </form>



    </div>

</body>

</html>