<?php
require_once '../../../../config/Conexion.php';

class Usuario extends Conexion
{
    /*=============================================
    =            Atributos de la Clase            =
    =============================================*/
    protected static $cnx;
    private $id = null;
    private $email = null;
    private $nombre = null;
    private $clave = null;
    private $imagen = null;
    private $telefono = null;
    private $estado = null;
    private $cambioContrasena = null;
    /*=====  End of Atributos de la Clase  ======*/

    /*=============================================
    =            Contructores de la Clase         =
    =============================================*/
    public function __construct() {}
    /*=====  End of Contructores de la Clase  ======*/

    /*=============================================
    =            Encapsuladores de la Clase       =
    =============================================*/
    public function getId() { 
        return $this->id;
     }
    public function setId($id) {
         $this->id = $id; 
        }
    public function getEmail() {
         return $this->email;
         }
    public function setEmail($email) {
         $this->email = $email;
         }
    public function getNombre() { 
        return $this->nombre; 
    }
    public function setNombre($nombre) { 
        $this->nombre = strtoupper($nombre);
    }
    public function getClave() { 
        return $this->clave; 
    }
    public function setClave($clave) {
        $this->clave = $clave;
    }
    public function getImagen() {
         return $this->imagen;
    }
    public function setImagen($imagen) { 
        $this->imagen = $imagen; 
    }
    public function getTelefono() { 
        return $this->telefono; 
    }
    public function setTelefono($telefono) { 
        $this->telefono = $telefono; 
    }
    public function getEstado() { 
        return $this->estado; 
    }
    public function setEstado($estado) { 
        $this->estado = $estado; 
    }
    public function getCambioContrasena() { 
        return $this->cambioContrasena; 
    }
    public function setCambioContrasena($cambioContrasena) { 
        $this->cambioContrasena = $cambioContrasena; 
    }
    /*=====  End of Encapsuladores de la Clase  ======*/

    /*=============================================
    =            Metodos de la Clase              =
    =============================================*/
    public static function getConexion() {
        self::$cnx = Conexion::conectar();
    }

    public static function desconectar() {
        self::$cnx = null;
    }

    public function listarTodosDb() {
        $query = "SELECT * FROM usuario";
        $usuarios = [];

        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);
            $resultado->execute();

            foreach ($resultado->fetchAll() as $encontrado) {
                $user = new Usuario();
                $user->setId($encontrado['id']);
                $user->setEmail($encontrado['email']);
                $user->setNombre($encontrado['nombre']);
                $user->setImagen($encontrado['imagen']);
                $user->setTelefono($encontrado['telefono']);
                $user->setEstado($encontrado['estado']);
                $usuarios[] = $user;
            }
        } catch (PDOException $e) {
            return json_encode("Error {$e->getCode()}: {$e->getMessage()}");
        } finally {
            self::desconectar();
        }

        return $usuarios;
    }

    public function verificarExistenciaDb() {
        $query = "SELECT * FROM usuario WHERE email = :email";
        $encontrado = false;

        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);
            $resultado->bindParam(":email", $this->getEmail(), PDO::PARAM_STR);
            $resultado->execute();

            $encontrado = $resultado->rowCount() > 0;
        } catch (PDOException $e) {
            return "Error {$e->getCode()}: {$e->getMessage()}";
        } finally {
            self::desconectar();
        }

        return $encontrado;
    }

    public function guardarEnDb() {
        $query = "INSERT INTO usuario (email, nombre, clave, imagen, telefono, estado, cambioContrasena, created_at) 
                  VALUES (:email, :nombre, :clave, :imagen, :telefono, :estado, :cambioContrasena, NOW())";

        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);

            $resultado->bindParam(":email", $this->getEmail(), PDO::PARAM_STR);
            $resultado->bindParam(":nombre", $this->getNombre(), PDO::PARAM_STR);
            $resultado->bindParam(":clave", $this->getClave(), PDO::PARAM_STR);
            $resultado->bindParam(":imagen", $this->getImagen(), PDO::PARAM_STR);
            $resultado->bindParam(":telefono", $this->getTelefono(), PDO::PARAM_STR);
            $resultado->bindParam(":estado", $this->getEstado(), PDO::PARAM_INT);
            $resultado->bindParam(":cambioContrasena", $this->getCambioContrasena(), PDO::PARAM_INT);

            $resultado->execute();
        } catch (PDOException $e) {
            return json_encode("Error {$e->getCode()}: {$e->getMessage()}");
        } finally {
            self::desconectar();
        }
    }

    public function activar() {
        $query = "UPDATE usuario SET estado = 1 WHERE id = :id";

        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);
            $resultado->bindParam(":id", $this->getId(), PDO::PARAM_INT);
            self::$cnx->beginTransaction();
            $resultado->execute();
            self::$cnx->commit();

            return $resultado->rowCount();
        } catch (PDOException $e) {
            self::$cnx->rollBack();
            return "Error {$e->getCode()}: {$e->getMessage()}";
        } finally {
            self::desconectar();
        }
    }

    public function desactivar() {
        $query = "UPDATE usuario SET estado = 0 WHERE id = :id";

        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);
            $resultado->bindParam(":id", $this->getId(), PDO::PARAM_INT);
            self::$cnx->beginTransaction();
            $resultado->execute();
            self::$cnx->commit();

            return $resultado->rowCount();
        } catch (PDOException $e) {
            self::$cnx->rollBack();
            return "Error {$e->getCode()}: {$e->getMessage()}";
        } finally {
            self::desconectar();
        }
    }

    public static function mostrar($correo) {
        $query = "SELECT * FROM usuario WHERE email = :email";

        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);
            $resultado->bindParam(":email", $correo, PDO::PARAM_STR);
            $resultado->execute();

            return $resultado->fetch();
        } catch (PDOException $e) {
            return "Error {$e->getCode()}: {$e->getMessage()}";
        } finally {
            self::desconectar();
        }
    }

    public function llenarCampos($id) {
        $query = "SELECT * FROM usuario WHERE id = :id";

        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);
            $resultado->bindParam(":id", $id, PDO::PARAM_INT);
            $resultado->execute();

            $encontrado = $resultado->fetch();
            if ($encontrado) {
                $this->setId($encontrado['id']);
                $this->setNombre($encontrado['nombre']);
                $this->setEstado($encontrado['estado']);
            }
        } catch (PDOException $e) {
            return json_encode("Error {$e->getCode()}: {$e->getMessage()}");
        } finally {
            self::desconectar();
        }
    }

    public function actualizarUsuario() {
        $query = "UPDATE usuario SET nombre = :nombre, telefono = :telefono 
                  WHERE id = :id AND email = :email";

        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);

            $resultado->bindParam(":id", $this->getId(), PDO::PARAM_INT);
            $resultado->bindParam(":email", $this->getEmail(), PDO::PARAM_STR);
            $resultado->bindParam(":nombre", $this->getNombre(), PDO::PARAM_STR);
            $resultado->bindParam(":telefono", $this->getTelefono(), PDO::PARAM_STR);

            self::$cnx->beginTransaction();
            $resultado->execute();
            self::$cnx->commit();

            return $resultado->rowCount();
        } catch (PDOException $e) {
            self::$cnx->rollBack();
            return "Error {$e->getCode()}: {$e->getMessage()}";
        } finally {
            self::desconectar();
        }
    }

    public function verificarExistenciaEmail() {
        $query = "SELECT * FROM usuario WHERE email = :email";

        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);
            $resultado->bindParam(":email", $this->getEmail(), PDO::PARAM_STR);
            $resultado->execute();

            return $resultado->fetch();
        } catch (PDOException $e) {
            return "Error {$e->getCode()}: {$e->getMessage()}";
        } finally {
            self::desconectar();
        }
    }
    /*=====  End of Metodos de la Clase  ======*/
}
?>
