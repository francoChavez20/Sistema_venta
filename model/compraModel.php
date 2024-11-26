<?php
require_once "../libreria/conexion.php";

class ComprasModel {
    private $conexion;

    function __construct() {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function obtener_compras() {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM compras");
        
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }

        return $arrRespuesta;
    }
  
    public function registrarCompra($id_producto, $cantidad, $precio, $fecha_compra, $id_trabajador) {
        $sql = $this->conexion->query("CALL insertCompras('{$id_producto}', '{$cantidad}', '{$precio}', '{$fecha_compra}', '{$id_trabajador}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
}


?>
