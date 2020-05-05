<?php
require_once("models/home.php");
$home = new home();

$horario = $home->horario();


require_once("views/home.php");
?>