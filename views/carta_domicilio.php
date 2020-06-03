<div class="card-columns">


  <?php
    if($carta->num_rows>0){
        while($row = $carta->fetch_assoc()){
            echo "
                <div class='card'>
                    <a href='?pag=ver_carta_domicilio&&familia=".$row['id']."'><img class='card-img-top' src='".$row['imagen']."' alt='".$row['nombre']."'></a>
                    <div class='card-body'>
                    <h5 class='card-title text-center'><a class='text-success' href='?pag=ver_carta&&familia=".$row['id']."'>".$row['nombre']."</a> </h5>
                    </div>
                </div>
            ";
        }
    }
  ?>



</div>