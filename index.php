<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/main.js"></script>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Pizzeria Belsay</title>
</head>

<body class="bg-light">


    <!-- container general -->
    <div class="container">

        <!-- navbar -->

        <!-- menu izquierda -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success rounded-top mt-3">
            <a class="navbar-brand bg-light rounded p-2" href="#"><img src="assets/img/logo.png"
                    alt="logo pizzeria belsay" high="100" width="100"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Carta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Localización</a>
                    </li>
                </ul>
                <!-- fin menu izquierda -->

                <!-- menu derecha -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
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
                                    <input type="password" class="form-control" name="password" placeholder="Contraseña">
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
        <!-- fin navbar -->


        <div class="row border border-success m-0 p-0 bg-white">
            <div class="col-3 border-right border-success">2</div>
            <div class="col-9">3</div>
        </div>




    </div>
    <!-- fin container general -->








</body>

</html>