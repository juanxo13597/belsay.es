<?php
require_once("models/carta.php");
$cartamodel = new carta();
$carta = $cartamodel->familias();


require_once("views/carta.php");
?>