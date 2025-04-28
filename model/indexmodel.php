<?php
    class Index{
        private $listaOrigenes;
        private $listaDestinos;

        public function __construct(){
            $this->listaOrigenes = array();
            $this->listaDestinos = array();
        }

        public function getOrigenes(){ //Cambiar desde base de datos (catalogo)
            include_once("conexion.php");
            $cnn = new Conexion();
            $consulta = "SELECT DISTINCT Origen FROM rutas ORDER BY Origen ASC";
            $resultado = $cnn->prepare($consulta);
            $resultado->execute();

            while($row = $resultado->fetchAll(PDO::FETCH_ASSOC)){
                $this->listaOrigenes[] = $row;
            }
            return $this->listaOrigenes;
        }

        public function getDestinos(){ //Cambiar desde base de datos (catalogo)
            include_once("conexion.php");
            $cnn = new Conexion();
            $consulta = "SELECT DISTINCT Destino FROM rutas ORDER BY Destino ASC";
            $resultado = $cnn->prepare($consulta);
            $resultado->execute();

            while($row = $resultado->fetchAll(PDO::FETCH_ASSOC)){
                $this->listaDestinos[] = $row;
            }
            return $this->listaDestinos;
        }
    }
?>