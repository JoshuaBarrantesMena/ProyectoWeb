<?php require('layout/header.php');?>
    <section class="Login">
        <div class="Login_content">
            <h1>Bienvenido del vuelta</h1>
            <h4>Inicia Seción</h4>
            <div class="Login_columns">
                <div class="Login_left">
                    <div id="Login_info">
                        <h5>Correo:</h4>
                        <div class="form-floating mb-3" id="Login_input">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                    </div>
                    <div id="Login_info">
                        <h5>Contraseña:</h4>
                        <div class="form-floating" id="Login_input">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                    </div>
                </div>
                <div class="Login_right">
                    <a href="#">Confirmar</a>
                </div>
            </div>
        </div>
    </section>
<?php require('layout/footer.php');?>