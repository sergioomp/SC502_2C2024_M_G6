<?php
require_once '../models/ModelsPatrocinador.php';
$nombre = (isset($_POST["nombre"])) ? $_POST["nombre"] : "";
$apellido = (isset($_POST["apellido"])) ? $_POST["apellido"] : "";
$empresa = (isset($_POST["empresa"])) ? $_POST["empresa"] : "";
$telefono = (isset($_POST["telefono"])) ? $_POST["telefono"] : "";
$correo = (isset($_POST["correo"])) ? $_POST["correo"] : "";
$contraseña=(isset($_POST["contraseña"])) ? $_POST["contraseña"] : "";
$patrocinador = new ModelsPatrocinador();
$patrocinador->setNombre($nombre);
$patrocinador->setApellido($apellido);
$patrocinador->setEmpresa($empresa);
$patrocinador->setTelefono($telefono);
$patrocinador->setCorreo($correo);
$patrocinador->setContraseña($contraseña);
try {
    $patrocinador->guardarconOO();
    $resp = array("exito"=> true,"msg"=>"Se inserto correctamente");
    echo json_encode($resp);
} catch (\Throwable $th) {
    $resp = array("exito"=> false,"msg"=>"Se presento un error");
    echo json_encode($resp);
}

?>
