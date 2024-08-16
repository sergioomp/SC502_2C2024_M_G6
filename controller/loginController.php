<?php
require_once '../models/loginModel.php';

$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
$usuario = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
$email = isset($_POST["correo"]) ? $_POST["correo"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";
$tipoUser = isset($_POST["tipo_usuario"]) ? $_POST['tipo_usuario'] : "";

$usuarioModel = new LoginModel();
$usuarioModel->setNombre($nombre);
$usuarioModel->setUsuario($usuario);
$usuarioModel->setCorreo($email);
$usuarioModel->setPassword($password);
$usuarioModel->setTipoUser($tipoUser);

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
