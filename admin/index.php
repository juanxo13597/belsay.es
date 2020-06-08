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
    
    <div class="container">
    <?php require_once("inc/menugeneral.php"); ?>
        <div class="row mt-1">
            <?php require_once("inc/menulocal.php"); ?>

        </div>

        <!-- container -->
        <div class="col-8 bg-light p-2 border border-secondary"><?php require_once("controllers/".navegacion().".php"); ?>
        </div>

        <?php require_once("inc/menudomicilio.php"); ?>
    </div>

    </div>

</body>

</html>