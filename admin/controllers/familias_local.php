<?php
require_once("models/familias.php");
$familias = new familias();
$result_familias = $familias->get_familias();



require_once("views/familias_local.php");
?>