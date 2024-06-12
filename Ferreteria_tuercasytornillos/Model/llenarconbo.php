<?php>
$conexion = new Conexion;
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
$conexion->consultarTiposDocumento();
?>