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

    public function consultarTiposDocumento() {
        $resultado = $this->conexion->query("SELECT ID, nombre FROM ttiposdoc");

        if ($resultado->rowCount() > 0) {
            while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='{$fila['ID']}'>{$fila['nombre']}</option>";
            }
        } else {
            echo "<option value=''>No hay tipos de documento disponibles</option>";
        }
    }

    public function __destruct() {
        $this->conexion = null;
    }
}

// Crear instancia de la clase y conectar
$conexion = new Conexion();

// Consultar tipos de documento
$conexion->consultarTiposDocumento();

?>





