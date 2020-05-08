<?=$message?>

                <center>
                    <img src="assets/img/logo.png" class="img-fluid" alt="logo">
                    <h1>BELSAY (Fuentes de andalucía)</h1>
                    <h3>YA TIENE SU SITIO EN INTERNET. DESDE AHORA PODRÁS HACER TUS PEDIDOS ONLINE</h3>

                    <table class="table table-hover text-center table-responsive table-success">
                        <thead>
                            <tr>
                                <th scope="col">HORARIO</th>
                                <th scope="col">LUNES</th>
                                <th scope="col">MARTES</th>
                                <th scope="col">MIERCOLES</th>
                                <th scope="col">JUEVES</th>
                                <th scope="col">VIERNES</th>
                                <th scope="col">SABADO</th>
                                <th scope="col">DOMINGO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>MEDIODIA</th>
                                <?php
                                    while($row = $horario['mediodia']->fetch_assoc()) {
                                        echo "<td>".$row['horario']."</td>";
                                    }

                                ?>
                            </tr>
                            <tr>
                                <th>NOCHE</th>
                                <?php
                                    while($row = $horario['noche']->fetch_assoc()) {
                                        echo "<td>".$row['horario']."</td>";
                                    }

                                ?>
                            </tr>
                        </tbody>
                    </table>
                    <div class="dropdown-divider"></div>

                    <h2>REPARTO TODOS LOS DIAS</h2>


                </center>

            