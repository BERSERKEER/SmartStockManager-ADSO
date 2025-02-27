<?php
require_once __DIR__ . '/../config/database.php';

class UserModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function autenticación($correo, $password)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM user WHERE correo = ? LIMIT 1");
        $stmt->execute([$correo]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function buscarPorCorreo($correo)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM user WHERE correo = ?");
        $stmt->execute([$correo]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function guardarToken($correo, $token)
    {
        $stmt = $this->pdo->prepare("UPDATE user SET token = ?, token_expira = DATE_ADD(NOW(), INTERVAL 15 MINUTE) WHERE correo = ?");
        return $stmt->execute([$token, $correo]);
    }

    public function verificarToken($correo, $codigo)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM user WHERE correo = ? AND token = ? AND token_expira > NOW()");
        $stmt->execute([$correo, $codigo]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizarContrasena($correo, $contrasena)
    {
        $stmt = $this->pdo->prepare("UPDATE user SET password = ?, token = NULL WHERE correo = ?");
        return $stmt->execute([$contrasena, $correo]);
    }
}
