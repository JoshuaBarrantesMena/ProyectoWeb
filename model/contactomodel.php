<?php
    class Contacto{
        private $empresas;

        public function __construct(){
            $empresas = array();
        }

        public function getEmpresas(){
            include_once("conexion.php");
            $cnn = new Conexion();
            $consulta = "SELECT * FROM empresas ORDER BY Nombre ASC";
            $resultado = $cnn->prepare($consulta);
            $resultado->execute();

            while($row = $resultado->fetchAll(PDO::FETCH_ASSOC)){
                $this->empresas[] = $row;
            }
            return $this->empresas;
        }
    }
?>