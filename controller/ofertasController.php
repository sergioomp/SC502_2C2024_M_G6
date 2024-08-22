<?php
require_once '../models/ofertasModel.php';

if (isset($_GET['op'])) {
    switch ($_GET['op']) {
        case 'listarSobrantes':
            $user_login = new ofertasModel();
            $sobrantes = $user_login->listarSobrantes();
            $data = array();
            foreach ($sobrantes as $key) {
                $ruta_imagen = ($key->getRutaImagen() != '' && $key->getRutaImagen() != null) ? '../models/ofertasModel.php' . $key->getRutaImagen() : '../Views/Assets/img/user.png';
                
                $data[] = array(
                    "0" => $key->getId_patrocinador(),
                    "1" => $key->getDescripcion(),
                    "2" => $key->getCantidad(),
                    "3" => $key->getFecha_creacion(),
                    "4" => $key->getEstado(),
                    "5" => $ruta_imagen
                );
            }
            echo json_encode($data);
            break;

        case 'insertar':
            $id_patrocinador = isset($_POST["id_patrocinador"]) ? $_POST["id_patrocinador"] : "";
            $descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : "";
            $cantidad = isset($_POST["cantidad"]) ? $_POST["cantidad"] : "";
            $fecha_creacion = isset($_POST["fecha_creacion"]) ? $_POST["fecha_creacion"] : "";
            $estado = isset($_POST["estado"]) ? $_POST["estado"] : "";
            $ruta_imagen = isset($_POST["ruta_imagen"]) ? $_POST["ruta_imagen"] : "";

            $sobrante = new ofertasModel();
            $sobrante->setId_patrocinador($id_patrocinador);
            $sobrante->setDescripcion($descripcion);
            $sobrante->setCantidad($cantidad);
            $sobrante->setFecha_creacion($fecha_creacion);
            $sobrante->setEstado($estado);
            $sobrante->setRutaImagen($ruta_imagen);

            break;

        case 'guardarSobrante':
            $sobrante = new ofertasModel();
            $sobrante->setId_patrocinador(isset($_POST["id_patrocinador"]) ? $_POST["id_patrocinador"] : "");
            $sobrante->setDescripcion(isset($_POST["descripcion"]) ? $_POST["descripcion"] : "");
            $sobrante->setCantidad(isset($_POST["cantidad"]) ? $_POST["cantidad"] : "");
            $sobrante->setFecha_creacion(isset($_POST["fecha_creacion"]) ? $_POST["fecha_creacion"] : "");
            $sobrante->setEstado(isset($_POST["estado"]) ? $_POST["estado"] : "");
            $sobrante->setRutaImagen(isset($_POST["ruta_imagen"]) ? $_POST["ruta_imagen"] : "");

            try {
                $sobrante->guardarSobrante();
                $resp = array("exito" => true, "msg" => "Se insertó correctamente");
                echo json_encode($resp);
            } catch (\Throwable $th) {
                $resp = array("exito" => false, "msg" => "Se presentó un error: " . $th->getMessage());
                echo json_encode($resp);
            }
            break;

        default:
            echo json_encode(array("error" => "Operacion no válida"));
            break;
    }
} else {
    echo json_encode(array("error" => "Parametro 'op' no proporcionado"));
}
?>