<?php
require_once 'global.php'; 
require_once 'Conexion.php';

try {
    $connection = Conexion::conectar();

    echo "Conexion con base de datos exitosa";
} catch (PDOException $ex) {
    echo "Connection failed: " . $ex->getMessage();
}
?>
