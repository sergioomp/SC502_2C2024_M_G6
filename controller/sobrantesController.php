<?php
require_once '../models/sobrantesModel.php';

$id_restaurante = (isset($_POST["id_restaurante"])) ? $_POST["id_restaurante"] : "";
$descripcion = (isset($_POST["descripcion"])) ? $_POST["descripcion"] : "";
$cantidad = (isset($_POST["cantidad"])) ? $_POST["cantidad"] : "";
$fecha_creacion = (isset($_POST["fecha_creacion"])) ? $_POST["fecha_creacion"] : "";
$estado = (isset($_POST["estado"])) ? $_POST["estado"] : "";




$sobrante = new ModelsSobrante();

$sobrante->setId_restaurante($id_restaurante);
$sobrante->setDescripcion($descripcion);
$sobrante->setCantidad($cantidad);
$sobrante->setFecha_creacion($fecha_creacion);
$sobrante->setEstado($estado);

try {
    $sobrante->guardarSobrante();
    $resp = array("exito" => true, "msg" => "Se insertó correctamente");
    echo json_encode($resp);
} catch (\Throwable $th) {
    $resp = array("exito" => false, "msg" => "Se presentó un error");
    echo json_encode($resp);
}
?>