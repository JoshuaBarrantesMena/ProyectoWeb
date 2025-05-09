<?php require('view/layout/header.php');?>
    <section class="Profile">
        <form action="">
        <div class="Profile_content">
            <div class="Profile_data1">
                <?php
                if(isset($_SESSION['tipoUsuario']) == 1){
                    echo "<h3>Perfil de usuario</h3>";
                }else
                    echo "<h3>Perfil de Administrador</h3>";
                ?>
                <img src="view/img/DefaultUser.png" alt="profileIMG">
            </div>
            <div class="Profile_columns">
                <div class="Profile_left">
                    <div id="Profile_info">
                        <h5>Nombre</h4>
                        <div class="form-floating mb-3" id="Profile_input">
                            <input type="text" class="form-control" id="floatingInput" value="<?php echo $_SESSION['nombreUsuario']?>" name="nombre">
                            <label for="floatingInput">Name</label>
                        </div>
                    </div>
                    <div id="Profile_info">
                        <h5>Apellidos</h4>
                        <div class="form-floating mb-3" id="Profile_input">
                            <input type="text" class="form-control" id="floatingInput" value="<?php echo $_SESSION['apellidoUsuario']?>" name="apellidos">
                            <label for="floatingInput">Lastname</label>
                        </div>
                    </div>
                    <div class="Profile_data2">
                        <?php
                            echo '<h6>Correo registrado: '.$_SESSION['correo'].'</h6>';
                            echo '<h6>Se unio desde: '.date('d/m/Y', strtotime($_SESSION['fechaRegistro'])).'</h6>';
                        ?>
                    </div>
                </div>
                <div class="Profile_right">
                    <div id="Profile_info">
                        <h5>Telefono</h4>
                        <div class="form-floating mb-3" id="Profile_input">
                            <input type="text" class="form-control" id="floatingInput" value="<?php echo $_SESSION['telefono']?>" name="telefono">
                            <label for="floatingInput">Phone</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Profile_buttons">
                <div class="Profile_save">
                    <button type="submit" name="l" value="actualizarUsuario">Guardar Cambios</button>
                </div>
                <div class="Profile_unlogin">
                    <button type="submit" name="l" value="cerrarSesion">Cerrar sesión</button>
                </div>
            </div>
        </div>
        </form>
    </section>
<?php require('view/layout/footer.php');?>