<?php
$conexion = new Conexion();

if(isset($_POST["Id_documento"], $_POST["Documento"], $_POST["Nombre"], $_POST["Dirección"], $_POST["Contacto"])) {
  
    $opcion = $_POST["Id_documento"];
    $Documento = $_POST['Documento'];
    $Nombre = $_POST['Nombre'];
    $Direccion = $_POST['Dirección'];
    $Contacto = $_POST['Contacto'];

    try {
       
        $sql = "INSERT INTO clientes (Id_documento, Documento, Nombre, Dirección, Contacto) VALUES (:Id_documento, :Documento, :Nombre, :Direccion, :Contacto)";
        $stmt = $conexion->$conexion->prepare($sql);

    
        $stmt->bindParam(':Id_documento', $opcion, PDO::PARAM_INT);
        $stmt->bindParam(':Documento', $Documento, PDO::PARAM_STR);
        $stmt->bindParam(':Nombre', $Nombre, PDO::PARAM_STR);
        $stmt->bindParam(':Direccion', $Direccion, PDO::PARAM_STR);
        $stmt->bindParam(':Contacto', $Contacto, PDO::PARAM_STR);

     
        $stmt->execute();
        
    
        echo "<script>alert('Usuario agregado exitosamente.')</script>";
        header('Location: index.php');
        exit; 
    } catch (PDOException $e) {
      
        echo "Error al agregar contacto: " . $e->getMessage();
    }
} else {
    echo "Error: Todos los campos del formulario deben estar presentes.";
}
?>


