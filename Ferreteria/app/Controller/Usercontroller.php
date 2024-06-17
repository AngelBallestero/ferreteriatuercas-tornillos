<?php
require_once 'Config/conexion.php';

class Usercontroller
{

/**
 * @var Usuario
 */

private $model;


public function __construct()
{
    $this->model = new Usuario();
}

public function login()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = $_POST['Usuario'];
        $contrasenia = $_POST['Contrasenia'];
        $verificar = $this->model->verificar($usuario, $contrasenia);
        if (count($verificar) > 0) {
            if ($contrasenia == $verificar["contrasenia"]) {
                $_SESSION['usuario'] = $verificar;
                header('Location: hola');
            } else {
                $error ="<script>alert('Datos incorrectos');</script>"; 
                require 'app/View/login.php';
            }
        } elseif (count($verificar) == 0) {
            $error ="<script> 'Usuario no encontrado'</script>";
            require 'app/View/login.php';
        }
    } else {
        require 'app/View/login.php';
    }
}

public function Hola(){
    require 'app/View/hola.php';
}


}

