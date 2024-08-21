<?php
require_once '../models/LoginModel.php';

// Obtener datos del POST y validar
$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
$usuario = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
$email = isset($_POST["correo"]) ? $_POST["correo"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";
$telefono = isset($_POST["telefono"]) ? $_POST["telefono"] : "";
$direccion = isset($_POST["direccion"]) ? $_POST["direccion"] : "";
$ruta_imagen = isset($_POST["ruta_imagen"]) ? $_POST["ruta_imagen"] : "";
$idRol = isset($_POST["id_rol"]) ? $_POST["id_rol"] : ""; // Obtener el id del rol

// Crear una instancia del modelo
$usuarioModel = new LoginModel();
$usuarioModel->setNombre($nombre);
$usuarioModel->setUsuario($usuario);
$usuarioModel->setCorreo($email);
$usuarioModel->setPassword($password);
$usuarioModel->setTelefono($telefono); // Asumiendo que has añadido este método en LoginModel
$usuarioModel->setDireccion($direccion); // Asumiendo que has añadido este método en LoginModel
$usuarioModel->setRutaImagen($ruta_imagen); // Asumiendo que has añadido este método en LoginModel
$usuarioModel->setIdRol($idRol); // Asumiendo que has añadido este método en LoginModel

try {
    // Intentar guardar el usuario y retornar respuesta
    $resultado = $usuarioModel->guardar();
    echo json_encode($resultado); // Echo directamente el resultado de guardar(), que ya incluye éxito y mensaje
} catch (\Throwable $th) {
    // Manejo de errores con mensaje de excepción
    $resp = array("exito" => false, "msg" => "Se presentó un error: " . $th->getMessage());
    echo json_encode($resp);
}
?>
