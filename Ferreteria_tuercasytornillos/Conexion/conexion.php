<?php

class Conexion {
    private $conexion;

    public function __construct() {
        try {
            $this->conexion = new PDO('mysql:host=localhost;dbname=gestionferreteria', 'root', '');
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
        }
    }
   
    function consultarTiposDocumento(){
        $resultado = $this->conexion->query("SELECT ID, nombre FROM ttiposdoc");

        if ($resultado->rowCount() > 0) {
            while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='{$fila['ID']}'>{$fila['nombre']}</option>";
            }
        } else {
            echo "<option value=''>No hay tipos de documento disponibles</option>";
        }
    

    function __destruct() {
        $this->conexion = null;
    }

}


}

$conexion = new Conexion();

$conexion->consultarTiposDocumento();

?>





