<?php
require_once '../models/Usuario.php';

switch ($_GET["op"]) {
    case 'listar_para_tabla':
        $user_login = new Usuario();
        $usuariosJson = $user_login->listarTodosDb();

        // Decodificar el JSON devuelto por el modelo
        $usuarios = json_decode($usuariosJson, true);

        // Verificar si se produjo un error o si no se devolvieron datos válidos
        if (!is_array($usuarios)) {
            echo json_encode(array("sEcho" => 1, "iTotalRecords" => 0, "iTotalDisplayRecords" => 0, "aaData" => array()));
            exit;
        }

        $data = array();
        foreach ($usuarios as $reg) {
            $imagen = './assets/images/profiles/' . (!empty($reg['ruta_imagen']) ? $reg['ruta_imagen'] : 'user-160x160.jpg');
            $estado = isset($reg['estado']) ? ($reg['estado'] == 1 ? '<span class="label bg-success"> Activado </span>' : '<span class="label bg-danger"> Desactivado </span>') : '<span class="label bg-warning"> No Definido </span>';
            $data[] = array(
                "0" => $reg['id_usuario'],
                "1" => $reg['nombre'],
                "2" => $reg['telefono'],
                "3" => $reg['direccion'],
                "4" => $reg['correo'],
                "5" => $reg['id_rol'], // Suponiendo que tienes un campo para el rol
                "6" => '<img src="' . $imagen . '" width="50px" height="50px"/>',
                "7" => $estado,
                "8" => '<button class="btn btn-warning btn-sm" id="modificarUsuario" data-id="' . $reg['id_usuario'] . '">Modificar</button>'
            );
        }

        $resultados = array(
            "sEcho" => 1, // Información para DataTables
            "iTotalRecords" => count($data), // Total de registros en DataTable
            "iTotalDisplayRecords" => count($data), // Total de registros a visualizar
            "aaData" => $data
        );

        echo json_encode($resultados);
        break;

    case 'insertar':
        $email = isset($_REQUEST["correo"]) ? trim($_REQUEST["correo"]) : "";
        $nombre = isset($_REQUEST["nombre"]) ? trim($_REQUEST["nombre"]) : "";
        $imagen = isset($_REQUEST["ruta_imagen"]) ? trim($_REQUEST["ruta_imagen"]) : "";
        $telefono = isset($_REQUEST["telefono"]) ? trim($_REQUEST["telefono"]) : "";
        $password = isset($_REQUEST["password"]) ? trim($_REQUEST["password"]) : "";
        $estado = isset($_REQUEST["estado"]) ? trim($_REQUEST["estado"]) : 1;
        $id_rol = isset($_REQUEST["id_rol"]) ? trim($_REQUEST["id_rol"]) : 1; // Asegúrate de obtener el rol correctamente
        $clavehash = password_hash($password, PASSWORD_BCRYPT); // Encriptar la contraseña

        $usuario = new Usuario();
        $usuario->setCorreo($email);
        $usuarioExistente = json_decode($usuario->verificarExistenciaDb(), true);

        if (!$usuarioExistente) {
            $usuario->setNombre($nombre);
            $usuario->setPassword($clavehash);
            $usuario->setRutaImagen($imagen);
            $usuario->setTelefono($telefono);
            $usuario->setEstado($estado);
            $usuario->setIdRol($id_rol);
            $resultado = $usuario->guardarEnDb();
            echo $resultado ? 1 : 3; // 1: Éxito, 3: Error
        } else {
            echo 2; // Usuario ya existe
        }
        break;

    case 'existeUsuario':
        $usuario = isset($_REQUEST["user"]) ? $_REQUEST["user"] : "";
        $user_login = new Usuario();
        $user_login->setCorreo($usuario);
        $usuarioExistente = json_decode($user_login->verificarExistenciaDb(), true);
        echo $usuarioExistente ? 1 : 0;
        break;

    case 'activar':
        $usuario = new Usuario();
        $usuario->setIdUsuario(trim($_REQUEST['idUser']));
        echo $usuario->activar() ? 1 : 0; // 1: Activado, 0: Error
        break;

    case 'desactivar':
        $usuario = new Usuario();
        $usuario->setIdUsuario(trim($_REQUEST['idUser']));
        echo $usuario->desactivar() ? 1 : 0; // 1: Desactivado, 0: Error
        break;

    case 'mostrar':
        $usuario = isset($_REQUEST["user"]) ? $_REQUEST["user"] : "";
        $user = new Usuario();
        $user->setCorreo($usuario);
        $encontrado = $user->mostrar();
        if ($encontrado) {
            $arr = array(
                "usuario" => $encontrado['correo'],
                "nombre" => $encontrado['nombre'],
                "telefono" => $encontrado['telefono'],
                "direccion" => $encontrado['direccion'],
                "ruta_imagen" => $encontrado['ruta_imagen'],
                "id_rol" => $encontrado['id_rol'] // Suponiendo que tienes un campo para el rol
            );
            echo json_encode($arr);
        } else {
            echo 0; // Usuario no encontrado
        }
        break;

    case 'editar':
        $id = isset($_REQUEST["id_usuario"]) ? trim($_REQUEST["id_usuario"]) : "";
        $email = isset($_REQUEST["correo"]) ? trim($_REQUEST["correo"]) : "";
        $nombre = isset($_REQUEST["nombre"]) ? trim($_REQUEST["nombre"]) : "";
        $imagen = isset($_REQUEST["ruta_imagen"]) ? trim($_REQUEST["ruta_imagen"]) : "";
        $telefono = isset($_REQUEST["telefono"]) ? trim($_REQUEST["telefono"]) : "";
        $direccion = isset($_REQUEST["direccion"]) ? trim($_REQUEST["direccion"]) : ""; // Asegúrate de obtener todos los campos

        $usuario = new Usuario();
        $usuario->setIdUsuario($id);
        $usuario->setCorreo($email);
        $usuario->setNombre($nombre);
        $usuario->setRutaImagen($imagen);
        $usuario->setTelefono($telefono);
        $usuario->setDireccion($direccion); // Campo nuevo
        $modificados = $usuario->editar();
        echo $modificados ? 1 : 0; // 1: Modificado, 0: Error
        break;
}
?>
