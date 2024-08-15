<?php
    require_once'../models/loginModel.php';

   
$nombre = (isset($_POST["nombre"])) ? $_POST["nombre"] : "";
$user = (isset($_POST["user$user"])) ? $_POST["user$user"] : "";
$email =  (isset($_POST["email"])) ? $_POST["email"] : "";
$password = (isset($_POST["password"])) ? $_POST["password"] : "";
$tipoUser = (isset($_POST["tipoUser"])) ? $_POST['tipoUser'] : "";

$usuario = new LoginModel();
$usuario->setNombre($nombre);
$usuario->setUsuario($usuario);  
$usuario->setCorreo($correo);   
$usuario->setPassword($password); 
$usuario->setTipoUser($tipoUser);  

try {
    $usuario ->guardar();
    $resp = array("exito"=> true,"msg"=>"Se inserto correctamente");
    echo json_encode($resp);
} catch (\Throwable $th) {
    $resp = array("exito"=> false,"msg"=>"Se presento un error");
    echo json_encode($resp);
}





?>