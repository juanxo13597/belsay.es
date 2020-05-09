<?php
function navegacion(){
    if(!isset($_GET['pag'])){
        return "home";
    }else{
        if(file_exists("controllers/".$_GET['pag'].".php")){
            return $_GET['pag'];
        }else{
            return "error404";
        }
    }


}
?>