<?php
require_once("inc/login.php");
require_once("controllers/navegacion.php");
error_reporting(0);

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
    <script src="../assets/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/js/datatables.min.js"></script>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/datatables.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <title>Admin - Belsay</title>
</head>

<body class="bg-dark">

    <div class="container text-center">
        <h1 class="display-1 text-light">ADMINISTRACIÓN</h1>
        <div class="row">
            <?php require_once("inc/menu.php"); ?>

            </div>

            <!-- container -->
            <div class="col-9 bg-light rounded ml-1 p-3"><?php require_once("controllers/".navegacion().".php"); ?></div>
        </div>

    </div>

</body>

</html>