<?php require('view/layout/header.php');?>
    <section class="Contacto">
        <div class="Contacto_content">
            <div class="Contacto_main">
                <img src="view/img/MainLogo2.png" alt="Logo">
                <div class="Contacto_text">
                    <h6>Nuestro correo: <u>viajerosdelsur@gmail.com</u></h6>
                    <h6>Contactanos via telefónica: <u>(+52 56 1234 7890)</u></h6>
                </div>
            </div>
            <div class="Contacto_colaboradores">
                <h3>Contactos de nuestros colaboradores</h3>
                <div class="Contacto_colaboradores_list">
                <?php
                if(is_array($empresas)){
                    foreach($empresas as $key => $value){
                        foreach($value as $empresa){
                            echo '<div class="card" id="Contacto_cards" style="width: 18rem;">';
                                echo '<div class="card-body">';
                                    echo '<h5 class="card-title">'.$empresa['Nombre'].'</h5>';
                                    echo '<h6 class="card-subtitle mb-2 text-body-secondary">Correo: '.$empresa['Correo'].'</h6>';
                                    echo '<h6 class="card-subtitle mb-2 text-body-secondary">Teléfono: '.$empresa['Telefono'].'</h6>';
                                echo '</div>';
                            echo '</div>';
                        }
                    }
                }else{
                    echo '<h5>No hay colaboradores registrados</h5>';
                }
                ?>
                </div>
            </div>
        </div>
    </section>
<?php require('view/layout/footer.php');?>