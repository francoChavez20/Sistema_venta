<?php

require_once "../libreria/conexion.php";
class VentasModel {
    private $conexion;

    function __construct() {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function obtener_ventas() {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM venta");
        
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }

        return $arrRespuesta;
    }
}
?>