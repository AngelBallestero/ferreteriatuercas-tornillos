<?php
$conexion = new Conexion();

// Verificar si se ha enviado el formulario
if(isset($_POST["Id_documento"], $_POST["Documento"], $_POST["Nombre"], $_POST["Dirección"], $_POST["Contacto"])) {
    // Recibir datos del formulario
    $opcion = $_POST["Id_documento"];
    $Documento = $_POST['Documento'];
    $Nombre = $_POST['Nombre'];
    $Direccion = $_POST['Dirección'];
    $Contacto = $_POST['Contacto'];

    try {
        // Preparar la consulta
        $sql = "INSERT INTO clientes (Id_documento, Documento, Nombre, Dirección, Contacto) VALUES (:Id_documento, :Documento, :Nombre, :Direccion, :Contacto)";
        $stmt = $conexion->$conexion->prepare($sql);

        // Asignar valores a los parámetros
        $stmt->bindParam(':Id_documento', $opcion, PDO::PARAM_INT);
        $stmt->bindParam(':Documento', $Documento, PDO::PARAM_STR);
        $stmt->bindParam(':Nombre', $Nombre, PDO::PARAM_STR);
        $stmt->bindParam(':Direccion', $Direccion, PDO::PARAM_STR);
        $stmt->bindParam(':Contacto', $Contacto, PDO::PARAM_STR);

        // Ejecutar la consulta
        $stmt->execute();
        
        // Redirigir después de la inserción exitosa
        echo "<script>alert('Usuario agregado exitosamente.')</script>";
        header('Location: index.php');
        exit; 
    } catch (PDOException $e) {
        // Manejar errores
        echo "Error al agregar contacto: " . $e->getMessage();
    }
} else {
    echo "Error: Todos los campos del formulario deben estar presentes.";
}
?>


