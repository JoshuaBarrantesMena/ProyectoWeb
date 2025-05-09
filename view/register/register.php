<?php require('view/layout/header.php');?>
    <section class="Register">
        <div class="Register_content">
            <h1>Te damos la bienvenida</h1>
            <h4>Registrate para continuar</h4>
            <div class="Register_columns">
                <div class="Register_left">
                    <div id="Register_info">
                        <h5>Nombre</h5>
                        <div class="form-floating mb-3" id="Register_input">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Name</label>
                        </div>
                    </div>
                    <div id="Register_info">
                        <h5>Apellidos</h5>
                        <div class="form-floating mb-3" id="Register_input">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Last name</label>
                        </div>
                    </div>
                    <div id="Register_info">
                        <h5>Teléfono</h5>
                        <div class="form-floating mb-3" id="Register_input">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Phone number</label>
                        </div>
                    </div>
                </div>
                <div class="Register_right">
                    <div id="Register_info">
                        <h5>Correo electrónico</h5>
                        <div class="form-floating mb-3" id="Register_input">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                    </div>
                    <div id="Register_info">
                        <h5>Contraseña</h5>
                        <div class="form-floating" id="Register_input">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                    </div>
                    <div id="Register_info" class="Register_confirm">
                        <h5>Confirmar contraseña</h5>
                        <div class="form-floating" id="Register_input">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Confirm password</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Register_register">
                <a href="#">Confirmar</a>
            </div>
        </div>
    </section>
<?php require('view/layout/footer.php');?>