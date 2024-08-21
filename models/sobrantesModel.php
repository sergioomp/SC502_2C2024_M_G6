<?php
require_once '../Config/Conexion.php';

class ModelsSobrante extends Conexion {

    protected static $cnx;

    private $id_sobrante = null;
    private $id_patrocinador = null;
    private $id_restaurante = null;
    private $descripcion = null;
    private $cantidad = null;
    private $fecha_creacion = null;
    private $estado = null;

    private $ruta_imagen = null;


    public function getId_sobrante() {
        return $this->id_sobrante;
    }
    public function getId_patrocinador()
    {
        return $this->id_patrocinador;
    }

    public function getId_restaurante() {
        return $this->id_restaurante;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function getFecha_creacion() {
        return $this->fecha_creacion;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getRutaImagen() {
        return $this->ruta_imagen;
    }
    

    public function setId_sobrante($id_sobrante) {
        $this->id_sobrante = $id_sobrante;
    }
    public function setId_patrocinador($id_patrocinador)
    {
        $this ->id_patrocinador = $id_patrocinador;
    }

    public function setId_restaurante($id_restaurante) {
        $this->id_restaurante = $id_restaurante;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    public function setFecha_creacion($fecha_creacion) {
        $this->fecha_creacion = $fecha_creacion;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }
    
    public function setRutaImagen($ruta_imagen) {
        $this->ruta_imagen = $ruta_imagen;
    }

    public function __construct() {}

    public static function getConexion() {
        self::$cnx = Conexion::conectar();
    }

    public static function desconectar() {
        self::$cnx = null;
    }

    public function listarSobrantes()
    {
        $query = 'SELECT * FROM Sobrantes';
        $sobrantes = array();
        try {
            self::getConexion();
            $res = self::$cnx->prepare($query);
            $res->execute();
            self::desconectar();

            foreach ($res->fetchAll() as $prod) {
                $listado = new ModelsSobrante();
                $listado->setId_patrocinador($prod['id_patrocinador']);
                $listado->setDescripcion($prod['descripcion']);
                $listado->setCantidad($prod['cantidad']);
                $listado->setFecha_creacion($prod['fecha_creacion']);
                $listado->setEstado($prod['estado']);
                $listado->setRutaImagen($prod['ruta_imagen']);
                $sobrantes[]=$listado;
            }
            return $sobrantes;
        } catch (PDOException $Exception) {
            self::desconectar();
                $error = "Error ".$Exception->getCode( ).": ".$Exception->getMessage( );;
                return json_encode($error);
        }
    }

    public function guardarSobrante() {
        $query = "INSERT INTO `Sobrantes` (`id_patrocinador`, `descripcion`, `cantidad`, `fecha_creacion`, `estado`,`ruta_imagen`) VALUES (:id_restaurantePDO, :descripcionPDO, :cantidadPDO, :fecha_creacionPDO, :estadoPDO, :rutaImagenPDO)";
        try {
            self::getConexion();
            $id_patrocinador = $this->getId_patrocinador();
            $descripcion = $this->getDescripcion();
            $cantidad = $this->getCantidad();
            $fecha_creacion = $this->getFecha_creacion();
            $estado = $this->getEstado();
            $ruta_imagen = $this->getRutaImagen();
            $resultado = self::$cnx->prepare($query);
            $resultado->bindParam(":id_patrocinadorPDO", $id_patrocinador, PDO::PARAM_INT);
            $resultado->bindParam(":descripcionPDO", $descripcion, PDO::PARAM_STR);
            $resultado->bindParam(":cantidadPDO", $cantidad, PDO::PARAM_INT);
            $resultado->bindParam(":fecha_creacionPDO", $fecha_creacion, PDO::PARAM_STR);
            $resultado->bindParam(":estadoPDO", $estado, PDO::PARAM_STR);
            $resultado->bindParam(":ruta_imagenPDO", $ruta_imagen, PDO::PARAM_STR);
            $resultado->execute();
            self::desconectar();
        } catch (PDOException $ex) {
            self::desconectar();
            $error = "Error " . $ex->getCode() . ": " . $ex->getMessage();
            return json_encode($error);
        }
    }
}
?>