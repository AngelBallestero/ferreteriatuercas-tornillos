
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/logoooo.png">
    <link rel="stylesheet" href="usuario.css">
    <title>Registrar Clientes</title>
</head>
<body>
<div class="container">
    <form action="registrarcliente.php" method="POST">
        <img src="imagenes/tornillos.png" style="width:60px; float:right; margin-right: 50px; margin-top:1px;">
        <img src="imagenes/tornillos.png" style="width:60px; float:left; margin-left: 5px; margin-top:-1px;">
        <h1 style="margin-top:60px;">Tipo De Documento</h1>
        <select name="Id_documento" id="Id_documento" style="width: 300px">
            <?php include 'conexion'; ?>
        </select>
        <br>
        <h1>N°Documento</h1>
        <input type="text" name="Documento">
        <h1>Nombre</h1>
        <input type="text" name="Nombre">
        <h1>Direccion</h1>
        <input type="text" name="Dirección">
        <h1>Contacto</h1>
        <input type="tel" name="Contacto">
        <br>
        <input type="submit" value="Guardar">
        <img src="imagenes/tornillos.png" style="width:60px; float:right; margin-right: 50px; margin-top:-60px;">
        <img src="imagenes/tornillos.png" style="width:60px; float:left; margin-left: 5px; margin-top:-60px;">
    </form>
</div>

</body>
</html>   