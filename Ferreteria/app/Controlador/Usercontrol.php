<?php

class Usercontrol
{
    
    private $model;
   
    
    public function __construct()
    {
        $this->model = new Usuario();
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario = $_POST['usuario'];
            $contrasenia = $_POST['contrasenia'];
            $verificaruser = $this->model->verificar($usuario, $contrasenia);
            if (count($verificaruser) > 0) {
                if (password_verify($_POST["contrasenia"], $verificaruser["contrasenia"])) {
                    $_SESSION['usuario'] = $verificaruser;
                
                } else {
                    $error = 'Datos incorrectos';
                    require 'app/view/Login.php';
                }
            } elseif (count($verificaruser) == 0) {
                $error = 'Usuario no encontrado <br> Registrate para poder acceder <a href="app/view/registrarusuario.php">Registrarse</a>';
                require 'app/view/Login.php';     
            }
        }else{ 
            require 'app/view/Login.php';
        }
    }

    public function logout()
    {
        unset($_SESSION['usuario']);
        session_start();
        session_destroy();
        header('Location: login');
    }
}

?>