<?php
include_once("conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnIniciar'])) {
   
    $Usuario = $_POST['Usuario'];
    $Contrasenia = $_POST['Contrasenia'];

    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE Usuario = :Usuario AND Contrasenia = :Contrasenia");
    $stmt->bindParam(':Usuario', $Usuario, PDO::PARAM_STR); 
    $stmt->bindParam(':Contrasenia', $Contrasenia, PDO::PARAM_STR);
    $stmt->execute();

   
    if ($stmt->rowCount() > 0) {
        
        session_start();
        echo "Hola " . $Usuario;
        header('Location: listarusuarios.php');
        exit;
    } else {
        echo "usario no existe";
    }
} 
?>
