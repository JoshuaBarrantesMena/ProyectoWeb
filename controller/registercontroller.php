<?php
    require_once("model/registermodel.php");

    class registercontroller{
        private $registermodel;
        public function __construct(){

        }
        public static function register(){
            require_once("view/register/register.php");
        }
    }
?>