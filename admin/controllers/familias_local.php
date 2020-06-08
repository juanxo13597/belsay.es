<?php
require_once("models/familias.php");
$familias = new familias();
$result_familias = $familias->get_familias_local();



require_once("views/familias_local.php");
?>