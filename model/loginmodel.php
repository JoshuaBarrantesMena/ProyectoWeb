<?php
    class Login{
        private $usuarios;

        public function __construct() {
            $this->usuarios = array();
        }
    
        public function autentificacion($correo, $password){
            include_once("conexion.php");
            $cnn = new Conexion();
            $consulta = "SELECT * FROM usuarios WHERE Correo = '$correo' AND Contraseña = '$password'";
            $resultado = $cnn->prepare($consulta);
            $resultado->execute();

            while($row = $resultado->fetchAll(PDO::FETCH_ASSOC)){
                $this->usuarios[] = $row;
            }
            return $this->usuarios;
        }

        public function actualizarUsuario($idUsuario, $nombre, $apellidos, $telefono){
            include_once("conexion.php");
            $cnn = new Conexion();
            $consulta = "UPDATE usuarios SET Nombre = '$nombre', Apellidos = '$apellidos', Telefono = '$telefono' WHERE IdUsuario = $idUsuario";
            $resultado = $cnn->prepare($consulta);
            return $resultado->execute();
        }
    }
?>