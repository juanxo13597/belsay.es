<?php
require_once("models/carta.php");
$carta = new carta();

$result_carta = $carta->get_carta_local();



require_once("views/carta_local.php");
?>