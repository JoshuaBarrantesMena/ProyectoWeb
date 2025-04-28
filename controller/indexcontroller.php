<?php
    require_once("model/indexmodel.php");

    class indexcontroller{
        private $indexmodel;
        public function __construct(){

        }
        public static function index(){
            $index = new Index();
            $data1 = $index->getOrigenes();
            $data2 = $index->getDestinos();
            require_once("view/index.php");
        }
    }
?>