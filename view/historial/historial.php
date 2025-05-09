<?php require('view/layout/header.php');?>
    <section class="Historial">
        <div class="Historial_content">
            <div class="Historial_left">
                <div class="Historial_user">
                    <h3>Usuario</h3>
                    <img src="view/img/DefaultUser.png">
                    <?php echo '<h5>'.$_SESSION["nombreUsuario"]." ".$_SESSION["apellidoUsuario"].'</h5>';?>
                    <div id="Historial_user_text">work
                        <h6>Destino preferido: </h6>
                        <p>destino</p>
                    </div>
                    <div id="Historial_user_text">
                        <h6>linea Preferida: </h6>
                        <p>linea</p>
                    </div>
                </div>
            </div>
            <div class="Historial_right">
                <div class="Historial_list">
                    <h3>Historial de viajes</h3>
                    <table class="table table-striped">
                        <tr>
                            <td><h5>Fecha</h5></td>
                            <td><h5>Origen</h5></td>
                            <td><h5>Destino</h5></td>
                            <td><h5>Hora</h5></td>
                        </tr>
                        <?php  //Despliegue de historial de ejemplo
                        $num1 = 0;
                        for($num1; $num1 < 5; $num1++){
                            echo "<tr>";
                                echo "<td>01/01/2025</td>";
                                echo "<td>Origen</td>";
                                echo "<td>Destino</td>";
                                echo "<td>00:00</td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
<?php require('view/layout/footer.php');?>