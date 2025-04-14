<?php
    require_once("model/indexmodel.php");

    class logincontroller{
        private $loginmodel;
        public function __construct(){

        }
        public static function login(){
            require_once("view/login/login.php");
        }
    }
?>