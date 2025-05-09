<?php
    require_once("model/loginmodel.php");

    class logincontroller{
        private $loginmodel;
        public function __construct(){

        }
        public static function login(){
            require_once("view/login/login.php");
        }
        public static function profile(){
            require_once("view/login/profile.php");
        }

        public static function autenticar(){
            $correo=$_REQUEST['correo'];
            $password=$_REQUEST['password'];
            $loginmodel=new Login();
            $resultado=$loginmodel->autentificacion($correo,$password);
            var_dump($resultado);
            session_start();
            if(isset($resultado)):
                foreach ($resultado as $key => $value){
                    foreach ($value as $item ){              
                        $correo=$item['Correo']; 
                        $_SESSION["idUsuario"] = $item['IdUsuario']; 
                        $_SESSION["nombreUsuario"] = $item['Nombre'];
                        $_SESSION["apellidoUsuario"] = $item['Apellidos'];
                        $_SESSION["correo"] =  $item['Correo'];  
                        $_SESSION["telefono"] = $item['Telefono'];
                        $_SESSION["tipoUsuario"] = $item['TipoUsuario'];
                        $_SESSION["fechaRegistro"] = $item['FechaRegistro'];
                    }
                }
            endif;   
            header("location:".urlsite."index.php?i=index");
        }
        public static function actualizarUsuario(){
            session_start();
            $idUsuario=$_SESSION['idUsuario'];
            $nombre=$_REQUEST['nombre'];
            $apellidos=$_REQUEST['apellidos'];
            $telefono=$_REQUEST['telefono'];
            $loginmodel=new Login();
            $resultado=$loginmodel->actualizarUsuario($idUsuario,$nombre,$apellidos,$telefono);
            if($resultado){
                $_SESSION['nombreUsuario'] = $nombre;
                $_SESSION['apellidoUsuario'] = $apellidos;
                $_SESSION['telefono'] = $telefono;
                header("location:".urlsite."index.php?l=profile");
            }else{
                echo "Error al actualizar el usuario";
            }
        }
        public static function cerrarSesion(){	
            session_start();
            if(session_destroy()){
                header("location:".urlsite."index.php?i=index");
            }	       
        }
    }
?>