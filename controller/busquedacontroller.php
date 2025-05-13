<?php
    require_once("model/busquedamodel.php");

    class busquedacontroller{
        private $busquedamodel;

        private $origen;
        private $destino;
        private $fecha;
        private $pasajeros;

        private $ubicaciones;
        private $horarios;
        public function __construct(){
            $this->busquedamodel=new Busqueda();
        }
        public static function busqueda(){
            $origen = $_REQUEST['origen'] ?? '';
            $destino = $_REQUEST['destino'] ?? '';
            $fecha = $_REQUEST['fecha'] ?? '';
            $pasajeros = $_REQUEST['pasajeros'] ?? '';

            $index = new Index();
            $ubicaciones = $index->getUbicaciones();

            $busquedamodel = new Busqueda(); 
            $horarios = $busquedamodel->getHorarios($origen, $destino, $fecha, $pasajeros);

            require_once("view/busqueda/busqueda.php");
        }
    }
?>