<?php
require_once '../Config/Conexion.php';

class Registro {
    private $conn;

    public function __construct() {
        $this->conn = Conexion::conectar();
    }

    public function correoExiste($correo) {
        try {
            $query = "SELECT COUNT(*) FROM usuario WHERE correo = :correo";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':correo', $correo);
            $stmt->execute();
            $count = $stmt->fetchColumn();
            return $count > 0;
        } catch (PDOException $e) {
            die("Error al verificar correo: " . $e->getMessage());
        }
    }

    public function registrarUsuario($nombre, $telefono, $direccion, $correo, $password, $ruta_imagen) {
        try {
            $query = "INSERT INTO usuario (nombre, telefono, direccion, correo, password, ruta_imagen) 
                      VALUES (:nombre, :telefono, :direccion, :correo, :password, :ruta_imagen)";
            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':telefono', $telefono);
            $stmt->bindParam(':direccion', $direccion);
            $stmt->bindParam(':correo', $correo);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':ruta_imagen', $ruta_imagen);

            return $stmt->execute();
        } catch (PDOException $e) {
            die("Error al registrar usuario: " . $e->getMessage());
        }
    }
}
?>