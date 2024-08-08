<?php
require_once '../models/ModelsVoluntario.php';

$nombre = (isset($_POST["nombre"])) ? $_POST["nombre"] : "";
$apellido = (isset($_POST["apellido"])) ? $_POST["apellido"] : "";
$telefono = (isset($_POST["telefono"])) ? $_POST["telefono"] : "";
$email =  (isset($_POST["email"])) ? $_POST["email"] : "";
$transporte =  (isset($_POST["transporte"])) ? $_POST["transporte"] : "";
$identificador = (isset($_POST["identificador"])) ? $_POST["identificador"] : "";
$canton =  (isset($_POST["canton"])) ? $_POST["canton"] : "";
$contraseña = (isset($_POST["contraseña"])) ? $_POST["contraseña"] :

$voluntario = new ModelsVoluntario();
$voluntario->setNombre($nombre);
$voluntario->setApellido($apellido);
$voluntario->setTelefono($telefono);
$voluntario->setEmail($email);
$voluntario->setTransporte($transporte);
$voluntario->setIdentificador($identificador);
$voluntario->setCanton($canton);
$voluntario->setContraseña($contraseña);

try {
    $voluntario->guardarconOO();
    $resp = array("exito"=> true,"msg"=>"Se inserto correctamente");
    echo json_encode($resp);
} catch (\Throwable $th) {
    $resp = array("exito"=> false,"msg"=>"Se presento un error");
    echo json_encode($resp);
}

?>

