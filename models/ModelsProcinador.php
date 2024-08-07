<?php
 require_once '../Config/Conexion.php';
 class ModelsPatrocinador extends Conexion{
    
    protected static $cnx;

private $id_patrocinador=null;
private $nombre=null;
private $apellido=null;
private $empresa=null;
private $telefono=null;
private $email=null;
private $contraseña=null;

public function getId_patrocinador(){
    return $this->id_patrocinador;
}
public function getNombre(){
    return $this->nombre;
}
public function getApellido(){
    return $this->apellido;
}
public function getEmpresa(){
    return $this->empresa;
}
public function getTelefono(){
    return $this->telefono;
}
public function getEmail(){
    return $this->email;
}
public function getContraseña(){
    return $this->contraseña;
}
public function setId_patrocinador($id_patrocinador){
    $this->id_patrocinador = $id_patrocinador;
}
public function setNombre($nombre){
    $this->nombre = $nombre;
}
public function setApellido($apellido){
    $this->apellido = $apellido;
}
public function setEmpresa($empresa){
    $this->empresa = $empresa;
}
public function setTelefono($telefono){
    $this->telefono = $telefono;
}
public function setEmail($email){
    $this->email = $email;
}
public function setContraseña($contraseña){
    $this->contraseña = $contraseña;
}


    public function __construct(){}

    public static function getConexion(){
        self::$cnx  = Conexion::conectar();
    }

    public static function desconectar(){
        self::$cnx = null;
    }

    public function guardarconOO(){
    $query = "INSERT INTO `Patrocinadores` (`nombre`, `apellido`,`empresa`,`telefono`,`email`,`contraseña`) VALUES (:nombrePDO,:apellidoPDO,:empresaPDO,:telefonoPDO,:emailPDO,:contraseñaPDO)";
        try {
            self::getConexion();
            $nombreP = $this->getNombre();
            $apellidoP = $this->getApellido();
            $empresaP = $this->getEmpresa();
            $telefonoP = $this->getTelefono();
            $emailP = $this->getEmail();
            $contraseñaP = $this->getContraseña();
            $resultado = self::$cnx->prepare($query);
            $resultado->bindParam(":nombrePDO",$nombreP,PDO::PARAM_STR);
            $resultado->bindParam(":apellidoPDO",$apellidoP,PDO::PARAM_STR);
            $resultado->bindParam(":empresaPDO",$empresaP,PDO::PARAM_STR);
            $resultado->bindParam(":telefonoPDO",$telefonoP,PDO::PARAM_STR);
            $resultado->bindParam(":emailPDO",$emailP,PDO::PARAM_STR);
            $resultado->bindParam(":contraseñaPDO",$contraseñaP,PDO::PARAM_STR);
            $resultado->execute();
            self::desconectar();
        } catch (PDOException $ex) {
            self::desconectar();
            $error = "Error ".$ex->getCode().": ".$ex->getMessage();
            return json_encode($error);
        }
    }
}
?>