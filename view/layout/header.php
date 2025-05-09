<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="view/css/style.css">
    <title>Viajeros del Sur</title>
</head>
<body>
    <header>
        <div class="header_content">
            <div class="header_left">
                <a href="index.php?i=index"><img src="view/img/MainLogo.png" alt="MainLogo"></a>
            </div>
            <div class="header_right">
                <ul>
                    <li><a href="index.php?i=index">Inicio</a></li>
                    <li><a href="index.php?ho=horarios">Horarios</a></li>
                    <li><a href="index.php?hi=historial">Historial</a></li>
                    <li><a href="index.php?c=contacto">Contacto</a></li>
                    <?php
                    session_start();
                    if(isset($_SESSION["idUsuario"])){
                        if($_SESSION["idUsuario"] == 0){
                            echo '<li class="header_login">';
                            echo '<a href="index.php?l=login">Iniciar Sesión</a>';
                            echo '</li>';
                        }else{
                            echo '<li class="header_loged">';
                            echo '<a href="index.php?l=profile"><img src="view/img/DefaultUser.png">'.$_SESSION['nombreUsuario'].'</a>';
                            echo '</li>';
                        }
                    }else{
                        echo '<li class="header_login">';
                        echo '<a href="index.php?l=login">Iniciar Sesión</a>';
                        echo '</li>';
                    }    
                    ?>
                </ul>
            </div>
        </div>
    </header>
    