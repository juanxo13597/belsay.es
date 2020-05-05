<?php
require_once("models/carta.php");
$cartamodel = new carta();
$familia = $_GET['familia'];
$productos = $cartamodel->productos($familia);



require_once("views/ver_carta.php");
?>