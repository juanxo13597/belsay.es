<?php
require_once("models/carta.php");
$cartamodel = new carta();
$carta = $cartamodel->familias_domicilio();


require_once("views/carta_domicilio.php");
?>