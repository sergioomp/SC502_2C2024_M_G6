<?php
require_once '../Config/Conexion.php';

class LoginModel extends Conexion
{
    
    private $idUsuario = null;
    private $nombre = null;
    private $telefono = null;
    private $direccion = null;
    private $correo = null;
    private $password = null;
    private $idRol = null;
    private $rutaImagen = null;

    
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getIdRol()
    {
        return $this->idRol;
    }

    public function setIdRol($idRol)
    {
        $this->idRol = $idRol;
    }

    public function getRutaImagen()
    {
        return $this->rutaImagen;
    }

    public function setRutaImagen($rutaImagen)
    {
        $this->rutaImagen = $rutaImagen;
    }

    /*=============================================
    =            Metodos de la Clase              =
    =============================================*/

    private function getConexion()
    {
        return Conexion::conectar();
    }

    private function desconectar($cn)
    {
        $cn = null;
    }

    public function listaUsers()
    {
        $query = 'SELECT * FROM Usuario';
        $listaUsuarios = array();

        try {
            $cn = $this->getConexion();
            $res = $cn->prepare($query);
            $res->execute();

            foreach ($res->fetchAll() as $lista) {
                $user = new LoginModel();
                $user->setIdUsuario($lista['id_usuario']);
                $user->setNombre($lista['nombre']);
                $user->setTelefono($lista['telefono']);
                $user->setDireccion($lista['direccion']);
                $user->setCorreo($lista['correo']);
                $user->setPassword($lista['password']);
                $user->setIdRol($lista['id_rol']);
                $user->setRutaImagen($lista['ruta_imagen']);
                $listaUsuarios[] = $user;
            }
            $this->desconectar($cn);
            return $listaUsuarios;

        } catch (PDOException $Exception) {
            $this->desconectar($cn);
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            return json_encode($error);
        }
    }

    public function guardar()
{
    $query = "INSERT INTO Usuario (nombre, usuario, correo, password, telefono, direccion, ruta_imagen, id_rol, created_at) 
              VALUES (:nombre, :usuario, :correo, :password, :telefono, :direccion, :ruta_imagen, :id_rol, now())";

    try {
        $cn = $this->getConexion();

        $nombre = strtoupper($this->getNombre());
        $usuario = $this->getUsuario();
        $correo = $this->getCorreo();
        $password = password_hash($this->getPassword(), PASSWORD_BCRYPT); // Encriptar la contraseña
        $telefono = $this->getTelefono();
        $direccion = $this->getDireccion();
        $ruta_imagen = $this->getRutaImagen();
        $id_rol = $this->getIdRol();

        $resultado = $cn->prepare($query);
        $resultado->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $resultado->bindParam(":usuario", $usuario, PDO::PARAM_STR);
        $resultado->bindParam(":correo", $correo, PDO::PARAM_STR);
        $resultado->bindParam(":password", $password, PDO::PARAM_STR);
        $resultado->bindParam(":telefono", $telefono, PDO::PARAM_STR);
        $resultado->bindParam(":direccion", $direccion, PDO::PARAM_STR);
        $resultado->bindParam(":ruta_imagen", $ruta_imagen, PDO::PARAM_STR);
        $resultado->bindParam(":id_rol", $id_rol, PDO::PARAM_INT);

        $resultado->execute();
        $this->desconectar($cn);
        return array("exito" => true, "msg" => "Usuario guardado exitosamente.");

    } catch (PDOException $Exception) {
        $this->desconectar($cn);
        $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
        return array("exito" => false, "msg" => $error);
    }
}
}
?>
