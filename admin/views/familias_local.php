<table id="familias" class="table table-light">
    <thead class="thead-light">
        <tr>
        <th>ID</th>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php
                if($result_familias->num_rows>0){
                    while($row = $result_familias->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['nombre']."</td>";
                        echo "<td><img src='../".$row['imagen']."' alt='".$row['nombre']."' width='100' heigt='100'></td>";
                        echo "<td> <a href='?pag=familias_local_editar&&id=".$row['id']."'>Editar</a> </td>";
                        echo "</tr>";
                    }
                }
            ?>
    </tbody>
</table>



<script>
    $(document).ready(function () {
        $('#familias').DataTable({
            "order": [
                [0, "desc"]
            ],
            "lengthMenu": [
                [25, 50, 100, -1],
                [25, 50, 100, "Ver Todo"]
            ],
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }
        });
    });
</script>