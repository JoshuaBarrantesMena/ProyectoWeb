<?php
    class Index{
        private $listaUbicaciones;

        public function __construct(){
            $this->listaUbicaciones = array();
        }

        public function getUbicaciones(){
            include_once("conexion.php");
            $cnn = new Conexion();
            $consulta = "SELECT Nombre FROM Ciudades ORDER BY Nombre ASC";
            $resultado = $cnn->prepare($consulta);
            $resultado->execute();

            while($row = $resultado->fetchAll(PDO::FETCH_ASSOC)){
                $this->listaUbicaciones[] = $row;
            }
            return $this->listaUbicaciones;
        }
    }
?>