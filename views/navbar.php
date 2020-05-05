<!-- menu izquierda -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success rounded-top mt-3">
            <a class="navbar-brand bg-light rounded p-2" href="index.php"><img src="assets/img/logo.png"
                    alt="logo pizzeria belsay" class="img-fluid" high="40" width="40"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link font-weight-bold" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="?pag=carta">Carta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="#">Localización</a>
                    </li>
                </ul>
                <!-- fin menu izquierda -->

                <!-- menu derecha -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Zona Cliente
                        </a>
                        <div class="dropdown-menu">
                            <form class="px-4 py-3">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" placeholder="email@belsay.es">
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Contraseña">
                                </div>

                                <button type="submit" class="btn btn-outline-success">Entrar</button>
                            </form>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-success" href="#">¿Aun no eres Cliente? Registrate YA.</a>
                        </div>
                    </li>
                </ul>
                <!-- fin menu derecha -->

            </div>
        </nav>