<?php
require_once '../models/Registro.php'; 

class RegistroController {
    private $registro;

    public function __construct() {
        $this->registro = new Registro();
    }

    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];
            $correo = $_POST['correo'];
            $password = $_POST['password'];
            $ruta_imagen = $_POST['ruta_imagen']; // Asegúrate de que este campo esté presente en tu formulario

            if ($this->registro->correoExiste($correo)) {
                echo "<script>alert('El correo electrónico ya está registrado.'); window.history.back();</script>";
            } else {
                $resultado = $this->registro->registrarUsuario($nombre, $telefono, $direccion, $correo, $password, $ruta_imagen);
                if ($resultado) {
                    header("Location: ../views/inicioSesion.php"); 
                    exit();
                } else {
                    echo "Error al registrar el usuario.";
                }
            }
        } else {
            echo "Método de solicitud no permitido.";
        }
    }
}

$controller = new RegistroController();
$controller->registrar();
?>
