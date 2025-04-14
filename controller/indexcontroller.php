<?php
    require_once("model/indexmodel.php");

    class indexcontroller{
        private $indexmodel;
        public function __construct(){

        }
        public static function index(){
            require_once("view/index.php");
        }
    }
?>