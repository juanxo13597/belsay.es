<form method="POST">
    <?=$message?>
    <div class="row">

        <div class="col-6">
            <!-- columna izquierda -->


            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="Email (email@belsay.es)" required
                    value="<?=$datos['email']?>">
            </div>

            <div class="form-group">
                <label for="dni">DNI:</label>
                <input type="text" maxlength="10" pattern=".{10,}" class="form-control" name="dni"
                    placeholder="DNI (00000000-A)" required value="<?=$datos['dni']?>">
            </div>

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre " required
                    value="<?=$datos['nombre']?>">
            </div>

            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" class="form-control" name="apellidos" placeholder="Apellidos"
                    value="<?=$datos['apellidos']?>">
            </div>

            <div class="form-group">
                <label for="telefono">Telefono:</label>
                <input type="tel" maxlength="9" class="form-control" name="telefono" placeholder="Telefono (699999999)"
                    required value="<?=$datos['telefono']?>">
            </div>



        </div><!-- fin columna izquierda -->


        <div class="col-6">
            <!-- columna derecha -->

            <div class="form-group">
                <label for="calle">Calle:</label>
                <input type="text" class="form-control" name="calle" placeholder="Calle" required
                    value="<?=$datos['calle']?>">
            </div>

            <div class="form-group">
                <label for="numero">Numero:</label>
                <input type="text" class="form-control" name="numero" placeholder="Numero (1º B)" required
                    value="<?=$datos['numero']?>">
            </div>

            <div class="form-group">
                <label for="localidad">Localidad:</label>
                <input type="text" class="form-control" name="localidad" placeholder="Localidad" required
                    value="<?=$datos['localidad']?>">
            </div>


            <div class="form-group">
                <button type="submit" name="guardar" class="btn btn-outline-success form-control">Guardar Datos</button>
            </div>

        </div><!-- fin columna derecha -->



    </div>




</form>