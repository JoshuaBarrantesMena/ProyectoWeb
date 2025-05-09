<?php require('view/layout/header.php');?>
    <section class="Login">
        <form action="">
        <div class="Login_content">
            <h1>Bienvenido del vuelta</h1>
            <h4>Inicia Sesión</h4>
            <div class="Login_columns">
                <div class="Login_left">
                    <div id="Login_info">
                        <h5>Correo:</h4>
                        <div class="form-floating mb-3" id="Login_input">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="correo">
                            <label for="floatingInput">Email address</label>
                        </div>
                    </div>
                    <div id="Login_info">
                        <h5>Contraseña:</h4>
                        <div class="form-floating" id="Login_input">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                            <label for="floatingPassword">Password</label>
                        </div>
                    </div>
                </div>
                <div class="Login_right">
                    <input type="submit" value="Confirmar">
                    <input type="hidden" name="l" value="autenticar">
                </div>
            </div>
            <div class="Login_register">
                <h5>¿No tienes cuenta?</h5>
                <a href="index.php?r=register">Registrate</a>
            </div>
        </div>
        </form>
    </section>
<?php require('view/layout/footer.php');?>