<?php
require_once '../Config/Conexion.php';

class LoginModel extends Conexion
{
    /*==Atributos de la Clase===*/
    private $nombre = null;
    private $usuario = null;
    private $correo = null;
    private $password = null;
    private $tipoUser = null;

    /*==Encapsuladores de la Clase===*/
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
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

    public function getTipoUser()
    {
        return $this->tipoUser;
    }

    public function setTipoUser($tipoUser)
    {
        $this->tipoUser = $tipoUser;
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
                $user->setNombre($lista['nombre']);
                $user->setUsuario($lista['usuario']);
                $user->setCorreo($lista['correo']);
                $user->setPassword($lista['password']);
                $user->setTipoUser($lista['tipoUsuario']);
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
        $query = "INSERT INTO Usuario (nombre, usuario, correo, password, tipoUsuario, created_at) 
              VALUES (:nombre, :usuario, :correo, :password, :tipoUsuario, now())";

        try {
            $cn = $this->getConexion();

            $nombre = strtoupper($this->getNombre());
            $usuario = $this->getUsuario();
            $correo = $this->getCorreo();
            $password = password_hash($this->getPassword(), PASSWORD_BCRYPT); // Encriptar la contraseña
            $tipoUser = $this->getTipoUser();

            $resultado = $cn->prepare($query);
            $resultado->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $resultado->bindParam(":usuario", $usuario, PDO::PARAM_STR);
            $resultado->bindParam(":correo", $correo, PDO::PARAM_STR);
            $resultado->bindParam(":password", $password, PDO::PARAM_STR);
            $resultado->bindParam(":tipoUsuario", $tipoUser, PDO::PARAM_INT);

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
