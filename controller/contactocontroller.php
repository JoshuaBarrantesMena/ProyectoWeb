<?php
    require_once("model/contactomodel.php");

    class contactocontroller{
        private $contactomodel;
        public function __construct(){

        }
        public static function contacto(){
            require_once("view/contacto/contacto.php");
        }
    }
?>