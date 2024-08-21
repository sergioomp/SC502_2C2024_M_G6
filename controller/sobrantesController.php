<?php
require_once '../models/sobrantesModel.php';

switch ($_GET["op"]) {
    case 'listar_productos':
        $user_login = new ModelsSobrante();
        $sobrantes = $user_login->listarSobrantes();
        $data = array();
        foreach ($sobrantes as $key) {

                $data[] = array(
                    "0" => $key->getId_patrocinador(),
                    "1" =>$key->getDescripcion(),
                    "2" =>$key->getCantidad(),
                    "3" =>$key->getFecha_creacion(),
                    "4" =>$key->getEstado(),
                    "5" =>$key->getRutaImagen(),
                );

        }
        echo json_encode($data);

    break;
    
        case 'insertar':
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

        break;
        
}

?>