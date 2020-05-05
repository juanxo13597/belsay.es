<?php
require_once("controllers/includes.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/main.js"></script>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Pizzeria Belsay</title>
</head>

<body class="bg-dark">


    <!-- container general -->
    <div class="container">

        <!-- navbar -->
        <?php require_once("views/navbar.php"); ?>
        <!-- fin navbar -->

        <!-- contenido ofertas y main -->
        <div class="row border border-success m-0 p-0 bg-white">
             <!-- box oferta -->
           <?php require_once("views/ofertas.php"); ?>
           <!-- fin box oferta -->

            <!-- box main -->
            <div class="col-9 border-left border-success p-2">
            <?php require_once("controllers/".navegacion().".php"); ?>
            </div>
            <!-- fin box main -->
        </div>

        <!-- fin conectnido ofertas y main -->




    </div>
    <!-- fin container general -->

    <!-- copyright -->
    <div class="align-bottom mt-2">
        <small class="text-center">
            <p><a class="text-success" href="index.php">pizzeriabelsay.es</a> | <a class="text-success"
                    href="www.gesimar.es">By Gesimar Informática</a></p>
        </small>
    </div>
    <!-- fin copyright -->






</body>

</html>