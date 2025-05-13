<?php require('view/layout/header.php');?>
<section class="Reserva">
    <div class="Reserva_content">
        <?php
        foreach($datos as $key => $value){
        foreach($value as $horario){
        echo "<h2>Reserva de boletos</h2>";
        echo "<div class='Reserva_content_left'>";
            echo "<div class='Reserva_text'>";
                echo "<h5>Origen</h5>";
                echo "<p>".$horario['CiudadOrigen']."</p>";
            echo "</div>";
            echo "<div class='Reserva_text'>";
                echo "<h5>Destino</h5>";
                echo "<p>".$horario['CiudadDestino']."</p>";
            echo "</div>";
            echo "<div class='Reserva_text'>";
                echo "<h5>Fecha</h5>";
                echo "<p>$fecha</p>";
            echo "</div>";
        echo "</div>";
        echo "<div class='Reserva_content_center'>";
            echo "<div class='Reserva_text'>";
                echo "<h5>Pasajeros</h5>";
                echo "<p>$pasajeros</p>";
            echo "</div>";
            echo "<div class='Reserva_text'>";
                echo "<h5>Hora de Salida</h5>";
                echo "<p>".$horario['HoraSalida']."</p>";
            echo "</div>";
            echo "<div class='Reserva_text'>";
                echo "<h5>Precio por pasajero</h5>";
                echo "<p>".$horario['Precio']."</p>";
            echo "</div>";
        echo "</div>";
        echo "<div class='Reserva_content_right'>";
            echo "<div class='Reserva_text'>";
                echo "<h5>Transporte</h5>";
                echo "<p>".$horario['NombreTransporte']."</p>";
            echo "</div>";
            echo "<div class='Reserva_text'>";
                echo "<h5>Duracion en minutos</h5>";
                echo "<p>".$horario['DuracionEstimada']."</p>";
            echo "</div>";
            echo "<div class='Reserva_text'>";
                echo "<h5>Conductor</h5>";
                echo "<p>".$horario['NombreCompleto']."</p>";
            echo "</div>";
        echo "</div>";
            }
        }
        ?>
    </div>
    <form action="index.php?res=confirmarReserva" method="POST">
    <div class="Reserva_confirm">
        <h4>Se hara reserva para <?php echo $pasajeros?> pasajeros</h4>
        <h5>[El total a pagar es de $<?php echo $horario['Precio'] * $pasajeros?> pesos]</h5>
        <input type="submit" value="Confirmar">
        <input type="hidden" name="idHorario" value="<?php echo $idHorario?>">
        <input type="hidden" name="pasajeros" value="<?php echo $pasajeros?>">
    </div>
    </form>
</section>
<?php require('view/layout/footer.php');?>