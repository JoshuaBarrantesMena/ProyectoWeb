<?php
    require_once("model/historialmodel.php");

    class historialcontroller{
        private $historialnmodel;
        public function __construct(){

        }
        public static function historial(){
            require_once("view/historial/historial.php");
        }
    }
?>