<?php require('layout/header.php');?>
    <section class="Inicio">
        <div class="Inicio_left" id="Inicio_columnas">
            <div class="Inicio_left_content">
                <div class="Inicio_search_panel">
                <form action="index.php?b=busqueda" method="POST">
                    <h2>Buscar tu viaje</h2>
                    <table>
                        <tr>
                            <td>
                                <div class="Inicio_search_panel_params">
                                    <h6>Origen</h6>
                                    <select class="form-select" aria-label="Default select example" name="origen">
                                        <option selected value="No seleccionado">No seleccionado</option>
                                        <?php
                                            foreach($data as $key => $value){
                                                foreach($value as $location){
                                                    echo '<option value="' . htmlspecialchars($location["Nombre"]) . '">' . htmlspecialchars($location["Nombre"]) . '</option>';
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="Inicio_search_panel_params">
                                    <h6>Destino</h6>
                                    <select class="form-select" aria-label="Default select example" name="destino">
                                        <option selected value="No seleccionado">No seleccionado</option>
                                        <?php
                                            foreach($data as $key => $value){
                                                foreach($value as $location){
                                                    echo '<option value="' . htmlspecialchars($location["Nombre"]) . '">' . htmlspecialchars($location["Nombre"]) . '</option>';
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="Inicio_search_panel_params">
                                    <h6>Fecha</h6>
                                    <input type="date" class="Inicio_input_date" name="fecha">
                                </div>
                            </td>
                            <td>
                                <div class="Inicio_search_panel_params">
                                    <h6>Pasajeros</h6>
                                    <input type="number" value="1" min="0" class="Inicio_input_number" name="pasajeros">
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="Inicio_search_panel_buttons">
                        <input type="submit" value="buscar">
                    </div>
                </form>
                </div>
                <div class="Inicio_left_label">
                    <p>Somos la mejor opción en venta de boletos de autobús por Internet.
                    Trabajamos diariamente para ayudar a los viajeros a encontrar sus boletos de autobús con el máximo confort.
                    Nuestra plataforma en línea permite a los viajeros Buscar, Comparar y Comprar boletos de autobús de
                    más de 20 compañías de autobús a más de 500 destinos en todo Chiapas y México. Compra en Viajeros del Sur
                    desde la comodidad de tu casa, evita filas y ¡compara precios!</p>
                </div>
            </div>
        </div>
        <div class="Inicio_right" id="Inicio_columnas">
            <div class="Inicio_right_label">
                <h2>¡La mejor opcion para viajar por Chiapas!</h2>
                <p>Todas las lineas y todos los viajes de la “Central Camionera de los Ancianos”</p>
                <p>Busca tu viaje y reservalo a toda hora y desde donde estes.</p>
            </div>
        </div>
    </section>    
<?php require('layout/footer.php');?>