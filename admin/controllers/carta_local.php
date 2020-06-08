<?php
require_once("models/familias.php");
$familias = new familias();
$result_carta = $familias->get_carta();



require_once("views/carta_local.php");
?>