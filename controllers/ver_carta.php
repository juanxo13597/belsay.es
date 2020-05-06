<?php
require_once("models/carta.php");
$cartamodel = new carta();
$familia = $_GET['familia'];
$productos = $cartamodel->productos($familia);

$nombre_familia = $cartamodel->nombre_de_familia($familia)->fetch_assoc();



require_once("views/ver_carta.php");
?>