<?php
    require_once("model/horariosmodel.php");

    class horarioscontroller{
        private $horariosmodel;
        public function __construct(){

        }
        public static function horarios(){
            require_once("view/horarios/horarios.php");
        }
    }
?>