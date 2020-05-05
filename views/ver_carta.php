<div class="card-columns">
<?php
    if($productos->num_rows>0){
        while($row = $productos->fetch_assoc()){
            echo "
                <div class='card border-success mb-3' style='max-width: 18rem;'>
                    <div class='card-header text-success'>".$row['nombre']." <p class='text-muted'>P: ".$row['precio1']."€ ~ M: ".$row['precio2']."€ ~ F: ".$row['precio3']."€</p></div>
                    <div class='card-body text-success'>
                    <p class='card-text'>Ingredientes: ".$row['ingredientes']."</p>
                    </div>
                </div>
                
          ";
        }
    }
?>
</div>