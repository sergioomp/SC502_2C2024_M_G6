<?php
require_once '../Config/Conexion.php';

class ModelsSobrante extends Conexion {

    protected static $cnx;

    private $id_sobrante = null;
    private $id_restaurante = null;
    private $descripcion = null;
    private $cantidad = null;
    private $fecha_creacion = null;
    private $estado = null;

    public function getId_sobrante() {
        return $this->id_sobrante;
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

    public function setId_sobrante($id_sobrante) {
        $this->id_sobrante = $id_sobrante;
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

    public function __construct() {}

    public static function getConexion() {
        self::$cnx = Conexion::conectar();
    }

    public static function desconectar() {
        self::$cnx = null;
    }

    public function guardarSobrante() {
        $query = "INSERT INTO `sobrantes` (`id_restaurante`, `descripcion`, `cantidad`, `fecha_creacion`, `estado`) VALUES (:id_restaurantePDO, :descripcionPDO, :cantidadPDO, :fecha_creacionPDO, :estadoPDO)";
        try {
            self::getConexion();
            $id_restauranteP = $this->getId_restaurante();
            $descripcionP = $this->getDescripcion();
            $cantidadP = $this->getCantidad();
            $fecha_creacionP = $this->getFecha_creacion();
            $estadoP = $this->getEstado();
            $resultado = self::$cnx->prepare($query);
            $resultado->bindParam(":id_restaurantePDO", $id_restauranteP, PDO::PARAM_INT);
            $resultado->bindParam(":descripcionPDO", $descripcionP, PDO::PARAM_STR);
            $resultado->bindParam(":cantidadPDO", $cantidadP, PDO::PARAM_INT);
            $resultado->bindParam(":fecha_creacionPDO", $fecha_creacionP, PDO::PARAM_STR);
            $resultado->bindParam(":estadoPDO", $estadoP, PDO::PARAM_STR);
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