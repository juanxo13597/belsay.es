<form method="POST">
<?=$message?>
    <div class="row">
        
        <div class="col-6">
            <!-- columna izquierda -->


            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email (email@belsay.es)" required >
            </div>

            <div class="form-group">
                <input type="text" maxlength="10" pattern=".{10,}" class="form-control" name="dni" placeholder="DNI (00000000-A)" required >
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre " required >
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" >
            </div>

            <div class="form-group">
                <input type="tel" maxlength="9" class="form-control" name="telefono" placeholder="Telefono (699999999)" required >
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
                <input type="text" class="form-control" name="calle" placeholder="Calle" required >
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="numero" placeholder="Numero (1º B)" required >
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="localidad" placeholder="Localidad" required >
            </div>


            <div class="form-group">
                <button type="submit" name="registrar" class="btn btn-outline-success form-control">Registrar</button>
            </div>

        </div><!-- fin columna derecha -->



    </div>




</form>