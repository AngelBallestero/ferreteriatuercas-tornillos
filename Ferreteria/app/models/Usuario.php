<?php
require_once 'configuracion/conexion.php';

class Usuario
{
    
    /**
     * @var PDO La instancia de la conexión a la base de datos.
     */
    private $db;

 
    public function __construct()
    {
        $this->db = Conexion::getInstance()->getConnection();
    }

   
    public function verificar($usuario, $contrasenia)
    {
        $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE usuario = ? AND contrasenia = ?");
        $stmt->execute([$usuario,$contrasenia]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        return $usuario;
    }
}