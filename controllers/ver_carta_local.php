<?php
require_once("models/carta.php");
$cartamodel = new carta();
$familia = $_GET['familia'];
$productos = $cartamodel->productos_local($familia);

$nombre_familia = $cartamodel->nombre_de_familia_local($familia)->fetch_assoc();



require_once("views/ver_carta_local.php");
?>