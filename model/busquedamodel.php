<?php
    class Busqueda{
        private $listaHorarios;
        public function __construct(){
            $this->listaHorarios = array();
        }

        public function getHorarios($origen, $destino, $fecha, $pasajeros){
            require_once("conexion.php");
            $cnn = new Conexion();
            $consulta = "SELECT 
                            h.IdHorario,
                            h.HoraSalida,
                            r.DuracionEstimada,
                            tt.Nombre AS NombreTransporte,
                            (t.Capacidad - IFNULL(ocupados.AsientosOcupados, 0)) AS AsientosDisponibles,
                            e.Nombre AS NombreEmpresa,
                            r.Precio,
                            es.Nombre AS EstadoViaje
                        FROM horarios h
                        INNER JOIN rutas r ON h.IdRuta = r.IdRuta
                        INNER JOIN empresas e ON r.IdEmpresa = e.IdEmpresa
                        INNER JOIN transportes t ON h.IdTransporte = t.IdTransporte
                        INNER JOIN tipostransporte tt ON t.IdTipoTransporte = tt.IdTipoTransporte
                        INNER JOIN estados es ON h.Estado = es.IdEstado
                        INNER JOIN ciudades c_origen ON r.Origen = c_origen.IdCiudad
                        INNER JOIN ciudades c_destino ON r.Destino = c_destino.IdCiudad
                        LEFT JOIN (
                            SELECT IdTransporte, COUNT(*) AS AsientosOcupados
                            FROM asientos
                            GROUP BY IdTransporte
                        ) AS ocupados ON t.IdTransporte = ocupados.IdTransporte ";
            if($origen != 'No seleccionado'){
                $consulta = $consulta."WHERE c_origen.Nombre = '$origen'";
                if($destino != 'No seleccionado'){
                    $consulta = $consulta." AND c_destino.Nombre = '$destino'";
                }
            }else{
                if($destino != 'No seleccionado'){
                    $consulta = $consulta."WHERE c_destino.Nombre = '$destino'";
                }
            }
            $resultado = $cnn->prepare($consulta);
            $resultado->execute();

            while($row = $resultado->fetchAll(PDO::FETCH_ASSOC)){
                $this->listaHorarios[] = $row;
            }
            return $this->listaHorarios;
        }
    }
?>