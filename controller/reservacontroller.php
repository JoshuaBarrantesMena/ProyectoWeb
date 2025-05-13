<?php
    require_once("model/reservamodel.php");

    class reservacontroller{
        private $reservamodel;

        private $idHorario;
        private $fecha;
        private $pasajeros;

        private $datos;

        public function __construct(){

        }
        public static function reserva(){
            $idHorario = $_REQUEST['idHorario'];
            $fecha = $_REQUEST['fecha'];
            $pasajeros = $_REQUEST['pasajeros'];

            $reservamodel = new Reserva();
            $datos = $reservamodel->getDatosHorario($idHorario);

            require_once("view/reserva/reserva.php");
        }

        public static function confirmarReserva(){
            $idHorario = $_REQUEST['idHorario'];
            $pasajeros = $_REQUEST['pasajeros'];

            session_start();
            $reservamodel = new Reserva();
            //$reservamodel->confirmarReserva($idHorario, $pasajeros, $_SESSION['idUsuario']);
            header("location:".urlsite."index.php?hi=historial");
        }
    }
?>