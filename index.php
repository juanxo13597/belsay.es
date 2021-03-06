<?php
require_once("controllers/includes.php");
error_reporting(0);
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
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css">
    <script type="text/javascript" src="assets/js/datatables.min.js"></script>
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
            <div class="col-9 border-left border-success p-3 pb-5">
                <?php require_once("controllers/".navegacion().".php"); ?>
            </div>
            <!-- fin box main -->
        </div>

        <!-- fin conectnido ofertas y main -->


        <!-- copyright -->
        <footer id="sticky-footer"
            class="py-3 bg-light text-success-50 mb-5 rounded-bottom border-left border-right border-bottom border-success">
            <div class="container text-center">
                <small><a class="text-success" href="index.php">pizzeriabelsay.es</a> | <a class="text-success"
                        href="http://gesimar.es/">By Gesimar Informática</a></small>
            </div>
        </footer>
        <!-- fin copyright -->

    </div>
    <!-- fin container general -->








</body>

</html>