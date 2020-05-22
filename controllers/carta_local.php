<?php
require_once("models/carta.php");
$cartamodel = new carta();
$carta = $cartamodel->familias_local();


require_once("views/carta_local.php");
?>