<?php


session_start();

require_once 'app/Model/Usuario.php';
require_once 'app/Controller/Usercontroller.php';

$usercontrol = new Usercontroller();

$request = $_SERVER['REQUEST_URI'];


switch ($request) {
    case '/Ferreteria/':
        if (!isset($_SESSION["usuario"])) { 
            $usercontrol->login();
            return;
        }
       
   
    case '/Ferreteria/login':
         $usercontrol->login();
         break;

    case '/Ferreteria/hola':
        $usercontrol->Hola();
        break;
   
    default:
        http_response_code(404);
        echo '<h1>404</h1> Página no encontrada';
       
        break;
}
