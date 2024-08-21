<?php
require_once '../Config/Conexion.php';

class Sobrante {
    private $conn;

    public function __construct() {
        $this->conn = Conexion::conectar();
    }

    public function guardarSobrante($id_patrocinador, $descripcion, $cantidad, $fecha_creacion, $estado) {
        try {
            $query = "INSERT INTO sobrantes (id_patrocinador, descripcion, cantidad, fecha_creacion, estado) 
                      VALUES (:id_patrocinador, :descripcion, :cantidad, :fecha_creacion, :estado)";
            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(':id_patrocinador', $id_patrocinador, PDO::PARAM_INT);
            $stmt->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
            $stmt->bindParam(':cantidad', $cantidad, PDO::PARAM_INT);
            $stmt->bindParam(':fecha_creacion', $fecha_creacion, PDO::PARAM_STR);
            $stmt->bindParam(':estado', $estado, PDO::PARAM_STR);

            return $stmt->execute();
        } catch (PDOException $e) {
            die("Error al guardar sobrante: " . $e->getMessage());
        }
    }
}
?>