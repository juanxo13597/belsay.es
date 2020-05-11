<?php
session_start();
if($_SESSION['admin']['status'] == 0 || $_SESSION['admin']['status'] == null){
    header("location:login.php");
}
?>