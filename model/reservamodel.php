<?php
    class Reserva{
        private $datosHorario;

        public function __construct(){
            $this->datosHorario = array();
        }

        public function getDatosHorario($idHorario){
            require_once("conexion.php");
            $cnn = new Conexion();
            $consulta = "SELECT 
                            c_origen.Nombre AS CiudadOrigen,
                            c_destino.Nombre AS CiudadDestino,
                            h.HoraSalida,
                            r.DuracionEstimada,
                            tt.Nombre AS NombreTransporte,
                            CONCAT(u.Nombre, ' ', u.Apellidos) AS NombreCompleto,
                            r.Precio
                        FROM horarios h
                        INNER JOIN rutas r ON h.IdRuta = r.IdRuta
                        INNER JOIN ciudades c_origen ON r.Origen = c_origen.IdCiudad
                        INNER JOIN ciudades c_destino ON r.Destino = c_destino.IdCiudad
                        INNER JOIN transportes t ON h.IdTransporte = t.IdTransporte
                        INNER JOIN tipostransporte tt ON t.IdTipoTransporte = tt.IdTipoTransporte
                        INNER JOIN usuarios u ON t.IdConductor = u.IdUsuario
                        WHERE h.IdHorario = $idHorario";
            $resultado = $cnn->prepare($consulta);
            $resultado->execute();

            while($row = $resultado->fetchAll(PDO::FETCH_ASSOC)){
                $this->datosHorario[] = $row;
            }
            return $this->datosHorario;
        }

        public static function confirmarReserva($idHorario, $pasajeros, $idCliente) {
            require_once("conexion.php");
            $cnn = new Conexion();

            $consulta = "SELECT IdTransporte FROM horarios WHERE IdHorario = :idHorario";
            $stmt = $cnn->prepare($consulta);
            $stmt->bindParam(':idHorario', $idHorario, PDO::PARAM_INT);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$row) {
                throw new Exception("No se encontró transporte para el horario dado.");
            }

            $idTransporte = $row['IdTransporte'];

            $consulta = "SELECT Capacidad FROM transportes WHERE IdTransporte = :idTransporte";
            $stmt = $cnn->prepare($consulta);
            $stmt->bindParam(':idTransporte', $idTransporte, PDO::PARAM_INT);
            $stmt->execute();
            $capacidadRow = $stmt->fetch(PDO::FETCH_ASSOC);
            $capacidad = $capacidadRow['Capacidad'];

            $consulta = "SELECT NumeroAsiento FROM asientos WHERE IdTransporte = :idTransporte";
            $stmt = $cnn->prepare($consulta);
            $stmt->bindParam(':idTransporte', $idTransporte, PDO::PARAM_INT);
            $stmt->execute();
            $asientosOcupados = $stmt->fetchAll(PDO::FETCH_COLUMN);


            $asientosAsignados = [];
            for ($i = 1; $i <= $capacidad && count($asientosAsignados) < $pasajeros; $i++) {
                if (!in_array($i, $asientosOcupados)) {
                    $asientosAsignados[] = $i;
                }
            }

            if (count($asientosAsignados) < $pasajeros) {
                throw new Exception("No hay suficientes asientos disponibles.");
            }

            $fechaReserva = date("Y-m-d");
            $estadoInicial = 31;

            $stmt = $cnn->prepare("INSERT INTO reservaciones (IdHorario, IdCliente, Estado, FechaReservacion)
                           VALUES (:dHorario, :idCliente, :estado, :fecha)");
            $stmt->execute([
                ':idHorario' => $idHorario,
                ':idCliente' => $idCliente,
                ':estado' => $estadoInicial,
                ':fecha' => $fechaReserva
            ]);

            $consulta = "INSERT INTO asientos (IdTransporte, NumeroAsiento) VALUES (:idTransporte, :numeroAsiento)";
            $stmt = $cnn->prepare($consulta);
            foreach ($asientosAsignados as $numAsiento) {
                $stmt->execute([
                    ':idTransporte' => $idTransporte,
                    ':numeroAsiento' => $numAsiento
                ]);
            }
            return $asientosAsignados;
        }
    }
?>