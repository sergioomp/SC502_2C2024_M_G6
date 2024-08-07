<?php
 require_once '../Config/Conexion.php';
 class ModelsVoluntario extends Conexion{
    
    protected static $cnx;

    private $id_voluntario=null;
    private $nombre=null;
    private $apellido=null;
    private $email=null;
    private $telefono=null;
    private $transporte=null;
    private $identificador=null;
    private $canton=null;
    private $contraseña=null;

    public function getId_voluntario(){
        return $this->getId_voluntario;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getTransporte(){
        return $this->transporte
    }
    public function getIdentificador(){
        return $this->identificador;
    }
    public function getCanton(){
        return $this->canton;
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
    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setTransporte(){
        $this->transporte = $transporte;
    }
    public function setIdentificador(){
        $this->identificador = $identificador;
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
        $query = "INSERT INTO `Voluntarios` (`nombre`, `apellido`,`telefono`,`email`,`transporte`,`identificador`,`contraseña`) VALUES (:nombrePDO,:apellidoPDO,:telefonoPDO,:emailPDO,:trasportePDO,:identificadorPDO,:contraseñaPDO)";
            try {
                self::getConexion();
                $nombreP = $this->getNombre();
                $apellidoP = $this->getApellido();
                $telefonoP = $this->getTelefono();
                $emailP = $this->getEmail();
                $transporteP = $this->getTransporte();
                $identificadorP = $this->getIdentificador();
                $contraseñaP = $this->getContraseña();
                $resultado = self::$cnx->prepare($query);
                $resultado->bindParam(":nombrePDO",$nombreP,PDO::PARAM_STR);
                $resultado->bindParam(":apellidoPDO",$apellidoP,PDO::PARAM_STR);
                $resultado->bindParam(":telefonoPDO",$telefonoP,PDO::PARAM_STR);
                $resultado->bindParam(":emailPDO",$emailP,PDO::PARAM_STR);
                $resultado->bindParam(":transportePDO",$transporteP,PDO::PARAM_STR);
                $resultado->bindParam(":identificadorPDO",$identificadorP,PDO::PARAM_STR);
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