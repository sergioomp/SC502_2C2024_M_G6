<?php
require_once '../../../../Config/Conexion.php';

class Usuario extends Conexion
{
    /*=============================================
    =            Atributos de la Clase            =
    =============================================*/
    protected static $cnx;
    private $id_usuario = null;
    private $id_rol = null;
    private $nombre = null;
    private $correo = null;
    private $password = null;
    private $ruta_imagen = null;
    private $telefono = null;
    private $direccion = null;
    private $estado = null;

    /*=====  End of Atributos de la Clase  ======*/

    /*=============================================
    =            Constructores de la Clase          =
    =============================================*/
    public function __construct() {
        parent::__construct(); // Asegúrate de llamar al constructor de la clase base si es necesario
    }
    /*=====  End of Constructores de la Clase  ======*/

    /*=============================================
    =            Encapsuladores de la Clase       =
    =============================================*/
    public function getIdUsuario() { return $this->id_usuario; }
    public function setIdUsuario($id_usuario) { $this->id_usuario = $id_usuario; }
    public function getIdRol() { return $this->id_rol; }
    public function setIdRol($id_rol) { $this->id_rol = $id_rol; }
    public function getNombre() { return $this->nombre; }
    public function setNombre($nombre) { $this->nombre = $nombre; }
    public function getCorreo() { return $this->correo; }
    public function setCorreo($correo) { $this->correo = $correo; }
    public function getPassword() { return $this->password; }
    public function setPassword($password) { $this->password = $password; }
    public function getRutaImagen() { return $this->ruta_imagen; }
    public function setRutaImagen($ruta_imagen) { $this->ruta_imagen = $ruta_imagen; }
    public function getTelefono() { return $this->telefono; }
    public function setTelefono($telefono) { $this->telefono = $telefono; }
    public function getDireccion() { return $this->direccion; }
    public function setDireccion($direccion) { $this->direccion = $direccion; }
    public function getEstado() { return $this->estado; }
    public function setEstado($estado) { $this->estado = $estado; }
    /*=====  End of Encapsuladores de la Clase  ======*/

    /*=============================================
    =            Métodos de la Clase              =
    =============================================*/
    public static function getConexion() {
        self::$cnx = Conexion::conectar();
    }

    public static function desconectar() {
        self::$cnx = null;
    }

    public function listarTodosDb() {
        $query = "SELECT * FROM Usuario";
        try {
            self::getConexion();
            $resultado = self::$cnx->query($query);
            $usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);
            self::desconectar();
            return json_encode($usuarios);
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error ".$Exception->getCode().": ".$Exception->getMessage();
            return json_encode($error);
        }
    }

    public function verificarExistenciaDb($correo) {
        $query = "SELECT COUNT(*) FROM Usuario WHERE correo = :correo";
        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);
            $resultado->bindParam(":correo", $correo, PDO::PARAM_STR);
            $resultado->execute();
            $existe = $resultado->fetchColumn();
            self::desconectar();
            return $existe > 0 ? json_encode(true) : json_encode(false);
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error ".$Exception->getCode().": ".$Exception->getMessage();
            return json_encode($error);
        }
    }

    public function guardarEnDb() {
        $query = "INSERT INTO Usuario (nombre, correo, telefono, direccion, password, id_rol, ruta_imagen) VALUES (:nombre, :correo, :telefono, :direccion, :password, :id_rol, :ruta_imagen)";
        try {
            self::getConexion();
            $nombre = strtoupper($this->getNombre());
            $correo = $this->getCorreo();
            $telefono = $this->getTelefono();
            $direccion = $this->getDireccion();
            $password = $this->getPassword();
            $id_rol = $this->getIdRol();
            $ruta_imagen = $this->getRutaImagen();

            $resultado = self::$cnx->prepare($query);
            $resultado->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $resultado->bindParam(":correo", $correo, PDO::PARAM_STR);
            $resultado->bindParam(":telefono", $telefono, PDO::PARAM_STR);
            $resultado->bindParam(":direccion", $direccion, PDO::PARAM_STR);
            $resultado->bindParam(":password", $password, PDO::PARAM_STR);
            $resultado->bindParam(":id_rol", $id_rol, PDO::PARAM_INT);
            $resultado->bindParam(":ruta_imagen", $ruta_imagen, PDO::PARAM_STR);
            $resultado->execute();
            self::desconectar();
            return true;
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error ".$Exception->getCode().": ".$Exception->getMessage();
            return json_encode($error);
        }
    }

    public function editar() {
        $query = "UPDATE Usuario SET nombre = :nombre, correo = :correo, telefono = :telefono, direccion = :direccion, ruta_imagen = :ruta_imagen, id_rol = :id_rol WHERE id_usuario = :id";
        try {
            self::getConexion();
            $id = $this->getIdUsuario();
            $nombre = strtoupper($this->getNombre());
            $correo = $this->getCorreo();
            $telefono = $this->getTelefono();
            $direccion = $this->getDireccion();
            $ruta_imagen = $this->getRutaImagen();
            $id_rol = $this->getIdRol();

            $resultado = self::$cnx->prepare($query);
            $resultado->bindParam(":id", $id, PDO::PARAM_INT);
            $resultado->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $resultado->bindParam(":correo", $correo, PDO::PARAM_STR);
            $resultado->bindParam(":telefono", $telefono, PDO::PARAM_STR);
            $resultado->bindParam(":direccion", $direccion, PDO::PARAM_STR);
            $resultado->bindParam(":ruta_imagen", $ruta_imagen, PDO::PARAM_STR);
            $resultado->bindParam(":id_rol", $id_rol, PDO::PARAM_INT);
            $resultado->execute();
            self::desconectar();
            return true;
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error ".$Exception->getCode().": ".$Exception->getMessage();
            return json_encode($error);
        }
    }
}
?>
