<?php
require_once("models/familias.php");
$familias = new familias();
$id = $_GET['id'];

$data = $familias->get_datos_familia_id($id)->fetch_assoc();

if(isset($_POST['guardar'])){

    $familias->nombre = $_POST['nombre'];
    $img = $_FILES['imagen']['name'];

    echo $result = $familias->modificar_familia($id, $img);


        
        $archivo = $_FILES['imagen']['name'];
        //Si el archivo contiene algo y es diferente de vacio
        if (isset($archivo) && $archivo != "") {
            //Obtenemos algunos datos necesarios sobre el archivo
            $tipo = $_FILES['imagen']['type'];
            $tamano = $_FILES['imagen']['size'];
            $temp = $_FILES['imagen']['tmp_name'];
            //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
            if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
                echo "<script> alert('Error. La extensión o el tamaño de los archivos no es correcta. - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.')</script>";
            }else {
            //Si la imagen es correcta en tamaño y tipo
            //Se intenta subir al servidor
                if (move_uploaded_file($temp, '../assets/img/carta/'.$archivo)) {
                    //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
                    chmod('../assets/img/carta/'.$archivo, 0777);
                }
            }
        }
    }






require_once("views/familias_local_editar.php");
?>