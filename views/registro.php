<form method="POST">
<?=$message?>
    <div class="row">
        
        <div class="col-6">
            <!-- columna izquierda -->


            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email (email@belsay.es)" required 
                value="<?php echo ($_POST['email'] == NULL) ? "" : $_POST['email']; ?>">
            </div>

            <div class="form-group">
                <input type="text" maxlength="10" pattern=".{10,}" class="form-control" name="dni" placeholder="DNI (00000000-A)" required
                value="<?php echo ($_POST['dni'] == NULL) ? "" : $_POST['dni']; ?>">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre " required
                value="<?php echo ($_POST['nombre'] == NULL) ? "" : $_POST['nombre']; ?>">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="apellidos" placeholder="Apellidos"
                value="<?php echo ($_POST['apellidos'] == NULL) ? "" : $_POST['apellidos']; ?>">
            </div>

            <div class="form-group">
                <input type="tel" maxlength="9" class="form-control" name="telefono" placeholder="Telefono (699999999)" required
                value="<?php echo ($_POST['telefono'] == NULL) ? "" : $_POST['telefono']; ?>">
            </div>

            

        </div><!-- fin columna izquierda -->


        <div class="col-6">
            <!-- columna derecha -->

            <div class="form-group">
                <input type="password" class="form-control" name="password1" placeholder="Contraseña" required >
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="password2" placeholder="Confirmar contraseña" required >
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="calle" placeholder="Calle" required
                value="<?php echo ($_POST['calle'] == NULL) ? "" : $_POST['calle']; ?>">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="numero" placeholder="Numero (1º B)" required
                value="<?php echo ($_POST['numero'] == NULL) ? "" : $_POST['numero']; ?>">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="localidad" placeholder="Localidad" required
                value="<?php echo ($_POST['localidad'] == NULL) ? "" : $_POST['localidad']; ?>">
            </div>


            <div class="form-group">
                <button type="submit" name="registrar" class="btn btn-outline-success form-control">Registrar</button>
            </div>

        </div><!-- fin columna derecha -->



    </div>




</form>