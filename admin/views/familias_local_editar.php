<form action="" method="POST" enctype="multipart/form-data">
    <div class="row">

        <div class="col-6">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="<?=$data['nombre']?>">
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <label for="imagen">Imagen:</label><br>
                <img class="mb-2" width="200" src="../<?=$data['imagen']?>" alt="<?=$data['nombre']?>">
                <input type="file" name="imagen" class="form-control-file">
            </div>
        </div>



    </div>


    <button type="submit" name="guardar" class="btn btn-primary">Guardar</button>


</form>