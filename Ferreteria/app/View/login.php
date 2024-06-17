<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/logoooo.png">
    <link rel="stylesheet" href="Estilos/estilo.css">
    <title>Ferreteria tuercas&tornillos</title>
</head>

<body>

 <div class="container">
        
       <form action="login" method="POST" >
         <img src="Estilos/imagenes/logoooo.png" style="width: 170px;"></img>
         <h1>Usuario</h1>
         <input type="text" name="Usuario" placeholder="usuario">
         <h2>Contraseña</h2>
         <input type="password" name="Contrasenia" placeholder="contrasenia"  >
         <input type="submit" name="btnIniciar" value="Iniciar sesion">
         
         <a href="app/View/registrarusuario.php" >Registrate aqui</a>
      </form>

      <?php if (isset($error)): ?>
        <p><?= $error ?></p>
    <?php endif; ?>
 </div>
</body>
 