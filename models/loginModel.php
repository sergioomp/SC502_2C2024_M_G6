<?php
require_once '../config/Conexion.php';

class LoginModel extends Conexion
{
     /*==Atributos de la Clase===*/
     protected static $cn;
     private $nombre=null;
     private $usuario=null;
     private $correo=null;
     private $password=null;
     private $tipoUser=null;

     /*==Constructores===*/
     public function __construct(){}

      /*=============================================
	=            Encapsuladores de la Clase       =
	=============================================*/

     public function getNombre()
     {
        return $this->nombre;
        
     }
     public function setNombre($nombre)
     {
        $this->nombre=$nombre;
     }
     public function getUsuario()
     {
        return $this->usuario;
     }
    public function setUsuario($usuario)
    {
        $this->usuario=$usuario;
    }
    public function getCorreo()
    {
        return $this->correo;
    }
    public function setCorreo($correo)
    {
        $this->correo=$correo;

    }
    public function getPassword()
    {
        return $this->password;

    }
    public function setPassword($password)
    {
        $this->password=$password;
    }
    public function getTipoUser()
    {
        return $this->tipoUser;

    }
    public function setTipoUser($tipoUser)
    {
        $this->tipoUser=$tipoUser;
    }
    /*=============================================
	=            Metodos de la Clase              =
	=============================================*/

    public static function getConexion(){
        self::$cn = Conexion::conectar();
    }

    public static function desconectar(){
        self::$cn = null;
    }

    public function listaUsers(){
        $query = 'SELECT * FROM usuario';
        $listaUsuarios = array();

        try {
            self::getConexion();
            $res=self::$cn->prepare($query);
            $res->execute();
            self::desconectar();
            foreach ($res->fetchAll() as $lista) {
                $user = new LoginModel();
                $user->setNombre($lista['nombre']);
                $user->setUsuario($lista['usuario']);
                $user->setCorreo($lista['correo']);
                $user->setPassword($lista['password']);
                $user->setTipoUser($lista['tipoUser']);
                $listaUsuarios[]=$user;
            }
            return $listaUsuarios;

        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error ".$Exception->getCode( ).": ".$Exception->getMessage( );;
                return json_encode($error);           
        }
    }
    public function guardar()
    {
        $query = "INSERT INTO `usuarios`(`nombre`, `usuario`, `correo`, `password`, `tipoUser`, `created_at`) 
              VALUES (:nombre, :usuario, :correo, :password, :tipoUser, now())";
              try {

                self::getConexion();
        
                $nombre = strtoupper($this->getNombre());
                $usuario = $this->getUsuario();
                $correo = $this->getCorreo();
                $password = $this->getPassword();
                $tipoUser = $this->getTipoUser();
        
                $resultado = self::$cnx->prepare($query);
                $resultado->bindParam(":nombre", $nombre, PDO::PARAM_STR);
                $resultado->bindParam(":usuario", $usuario, PDO::PARAM_STR);
                $resultado->bindParam(":correo", $correo, PDO::PARAM_STR);
                $resultado->bindParam(":password", $password, PDO::PARAM_STR);
                $resultado->bindParam(":tipoUser", $tipoUser, PDO::PARAM_INT);
        
                $resultado->execute();
                self::desconectar();
                
            } catch (PDOException $Exception) {
                self::desconectar();
                $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
                return json_encode($error);
            }
        }
    }

}


?>