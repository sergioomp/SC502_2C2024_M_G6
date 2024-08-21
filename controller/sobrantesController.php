<?php
require_once '../models/sobrantesModel.php';

class SobrantesController {
    private $sobrante;

    public function __construct() {
        $this->sobrante = new Sobrante();
    }

    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_patrocinador = $_POST['id_patrocinador'];
            $descripcion = $_POST['descripcion'];
            $cantidad = $_POST['cantidad'];
            $fecha_creacion = $_POST['fecha_creacion'];
            $estado = $_POST['estado'];

            $resultado = $this->sobrante->guardarSobrante($id_patrocinador, $descripcion, $cantidad, $fecha_creacion, $estado);

            if ($resultado) {
                echo json_encode(["exito" => true, "msg" => "Se insertó correctamente"]);
            } else {
                echo json_encode(["exito" => false, "msg" => "Se presentó un error al guardar el sobrante"]);
            }
        } else {
            echo "Método de solicitud no permitido.";
        }
    }
}

$controller = new SobrantesController();
$controller->guardar();
?>