<?php
require_once("models/carta.php");
$cartamodel = new carta();
$familia = $_GET['familia'];
$productos = $cartamodel->productos_domicilio($familia);

$nombre_familia = $cartamodel->nombre_de_familia_domicilio($familia)->fetch_assoc();



require_once("views/ver_carta_domicilio.php");
?>