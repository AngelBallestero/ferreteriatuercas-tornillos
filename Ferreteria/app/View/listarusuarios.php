<?php

include_once("conexion.php");


$sql = "SELECT * FROM clientes";
$stmt = $conexion->query($sql);
$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

# Cerrar conexión
$conexion = null;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>LISTA de Contactos</title>
</head>
<center>
<body>

    <h1>Clientes Registrados</h1>
    <div class="container" >
     <table center>

    
        <tr>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Contacto</th>
        
        </tr>
        
        <?php foreach ($clientes as $cliente): ?>  
        <tr>
            <td><?php echo $cliente['Documento']?></td>
            <td><?php echo $cliente['Nombre']; ?></td>
            <td><?php echo $cliente['Dirección']; ?></td>
            <td><?php echo $cliente['Contacto']; ?></td>
        </tr>
        
        <?php endforeach; ?>
    
     </table>
    </div>
    <center>
    <br/>
</body>
</html>
