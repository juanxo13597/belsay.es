<center> 
<input onClick='javascript:window.history.back();'' type='button' name='Submit' value='Volver' class='btn btn-outline-success mb-3' />
<h1 class="display-4"><?=$nombre_familia['nombre']?></h1>

<div class="card-columns">

<?php
    if($productos->num_rows>0){
        while($row = $productos->fetch_assoc()){

            if(!is_null($row['precio1'])){
                $pequeña = "-Pequeña: ".$row['precio1']." €";
            }else{
                $pequeña = null;
            }

            if(!is_null($row['precio2'])){
                $mediana = "-Mediana: ".$row['precio2']." €";
            }else{
                $mediana = null;
            }

            if(!is_null($row['precio3'])){
                $familiar = "-Familiar: ".$row['precio3']." €";
            }else{
                $familiar = null;
            }

            if(!is_null($row['ingredientes'])){
                $ingredientes = "<u>Ingredientes:</u><br>". $row['ingredientes'];
            }else{
                $ingredientes = null;
            }
            
            echo "
                <div class='card border-success mb-3 text-center' style='max-width: 18rem;'>
                    <div class='card-header text-success'>".$row['nombre']."</div>
                    <div class='card-body text-success'>
                        <p class='card-text'>".$ingredientes."</p>
                        <small> 
                            <p class='text-muted'>".$pequeña."</p>
                            <p class='text-muted'>".$mediana."</p>
                            <p class='text-muted'>".$familiar."</p>
                        </small>
                    </div>
                </div>
                
          ";
        }
    }
?>
</div></center>