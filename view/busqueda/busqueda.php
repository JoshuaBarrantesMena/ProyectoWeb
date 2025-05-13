<?php require('view/layout/header.php');?>
    <section class="Busqueda">
        <form action="" class="Busqueda_params">
            <div class="Busqueda_params_origen">
                <h5>Origen</h5>
                <select class="form-select" aria-label="Default select example" name="origen">
                <?php
                foreach($ubicaciones as $key => $value){
                    foreach($value as $location){
                        $nombre = htmlspecialchars($location["Nombre"]);
                        $selected = ($nombre === $origen) ? "selected" : "";
                        echo "<option value='$nombre' $selected>$nombre</option>";
                    }
                }
                ?>
                </select>
            </div>
            <div class="Busqueda_params_destino">
                <h5>Destino</h5>
                <select class="form-select" aria-label="Default select example" name="destino">
                <?php
                echo '<option selected>'.$destino.'</option>';
                foreach($ubicaciones as $key => $value){
                    foreach($value as $location){
                        $nombre = htmlspecialchars($location["Nombre"]);
                        $selected = ($nombre === $destino) ? "selected" : "";
                        echo "<option value='$nombre' $selected>$nombre</option>";
                    }
                }
                ?>
                </select>
            </div>
            <div class="Busqueda_params_fecha">
                <h5>Fecha</h5>
                <input type="date" class="Busqueda_input_date" value="<?php echo $fecha; ?>" name="fecha">
            </div>
            <div class="Busqueda_params_pasajeros">
                <h5>Pasajeros</h5>
                <input type="number" value="<?php echo $pasajeros; ?>" min="0" class="Busqueda_input_number" name="pasajeros">
            </div>
            <div class="Busqueda_params_button">
                <input type="submit" value="buscar">
                <input type="hidden" name="b" value="busqueda">
            </div>
        </form>
        <div class="Busqueda_results">
            <h2>Resultados de la búsqueda</h2>
            <table class="table table-striped">
                <thread>
                    <tr>
                        <th scope="col">Hora de Salida</th>
                        <th scope="col">Duracion estimada</th>
                        <th scope="col">Transporte</th>
                        <th scope="col">Asientos disponibles</th>
                        <th scope="col">Empresa de transporte</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Estado</th>
                        <th scope="col"></th>
                    </tr>
                </thread>
                <tbody>
                    <?php
                    foreach($horarios as $key => $value){
                        foreach($value as $row){
                            echo "<tr>";
                                echo "<td>".$row["HoraSalida"]."</td>";
                                echo "<td>".$row["DuracionEstimada"]."</td>";
                                echo "<td>".$row["NombreTransporte"]."</td>";
                                echo "<td>".$row["AsientosDisponibles"]."</td>";
                                echo "<td>".$row["NombreEmpresa"]."</td>";
                                echo "<td>".$row["Precio"]."</td>";
                                echo "<td>".$row["EstadoViaje"]."</td>";
                                echo '<td>
                                        <form action="index.php?res=reserva" method="POST">
                                            <input type="hidden" name="idHorario" value="'.$row["IdHorario"].'">
                                            <input type="hidden" name="fecha" value="'.$fecha.'">
                                            <input type="hidden" name="pasajeros" value="'.$pasajeros.'">
                                            <input type="submit" name="res" value="reservar">
                                        </form>
                                    </td>';
                            echo "</tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
<?php require('view/layout/footer.php');?>