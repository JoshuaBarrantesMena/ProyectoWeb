<?php
    require_once("config.php");
    require_once("controller/indexcontroller.php");
    require_once("controller/logincontroller.php");
    require_once("controller/horarioscontroller.php");
    require_once("controller/historialcontroller.php");
    require_once("controller/contactocontroller.php");

    if(isset($_GET['i'])):
        $metodo=$_GET['i'];
        if(method_exists('indexcontroller', $metodo)):
            indexcontroller::{$metodo}();
        endif;
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
        }else{
            indexcontroller::index();
        }
    endif;
?>