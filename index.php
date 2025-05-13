<?php
    require_once("config.php");
    require_once("controller/indexcontroller.php");
    require_once("controller/busquedacontroller.php");
    require_once("controller/logincontroller.php");
    require_once("controller/horarioscontroller.php");
    require_once("controller/historialcontroller.php");
    require_once("controller/contactocontroller.php");
    require_once("controller/registercontroller.php");
    require_once("controller/reservacontroller.php");

    if(isset($_GET['i'])):
        $metodo=$_GET['i'];
        if(method_exists('indexcontroller', $metodo)){
            indexcontroller::{$metodo}();
        }else{
            indexcontroller::index();
        }
    else:
        if(isset($_GET['l'])){
            $metodo=$_GET['l'];
            if(method_exists('logincontroller', $metodo)){
                logincontroller::{$metodo}();
            }
        }else if(isset($_GET['ho'])){
            $metodo=$_GET['ho'];
            if(method_exists('horarioscontroller', $metodo)){
                horarioscontroller::{$metodo}();
            }
        }else if(isset($_GET['hi'])){
            $metodo=$_GET['hi'];
            if(method_exists('historialcontroller', $metodo)){
                historialcontroller::{$metodo}();
            }
        }else if(isset($_GET['c'])){
            $metodo=$_GET['c'];
            if(method_exists('contactocontroller', $metodo)){
                contactocontroller::{$metodo}();
            }
        }else if(isset($_GET['r'])){
            $metodo=$_GET['r'];
            if(method_exists('registercontroller', $metodo)){
                registercontroller::{$metodo}();
            }
        }else if(isset($_GET['res'])){
            $metodo=$_GET['res'];
            if(method_exists('reservacontroller', $metodo)){
                reservacontroller::{$metodo}();
            }
        }else if(isset($_GET['b'])){
            $metodo=$_GET['b'];
            if(method_exists('busquedacontroller', $metodo)){
                busquedacontroller::{$metodo}();
            }
        }else{
            indexcontroller::index();
        }
    endif;
?>