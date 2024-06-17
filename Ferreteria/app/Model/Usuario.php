<?php
require_once 'Config/conexion.php';

class Usuario
{

private $db;

public function __construct()
{
    $this->db = Conexion::getInstance()->getConnection();
}

public function verificar($usuario)
{
    $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE usuario = ?");
    $stmt->execute([$usuario]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    return $usuario;
}
}