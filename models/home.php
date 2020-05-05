<?php
require_once("db.php");

class home extends db{

    public function horario(){
        // horario medio dia
        $sql = "SELECT * FROM horario WHERE tiempo= 'MEDIO DIA'";
        $data['mediodia'] = $this->conexion->query($sql);

        // horario noche
        $sql = "SELECT * FROM horario WHERE tiempo= 'NOCHE'";
        $data['noche'] = $this->conexion->query($sql);

        return $data;
    }

}

?>