<?php
require_once "../libreria/conexion.php";
class PagoModel {
    private $conexion;

    function __construct() {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function obtener_pago() {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM pagos");
        
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }

        return $arrRespuesta;
    }

    public function registrarPago($id_venta, $fecha, $monto, $metodo) {
        $sql = $this->conexion->query("CALL insertPagos('{$id_venta}', '{$fecha}', '{$monto}', '{$metodo}')");
        $sql = $sql->fetch_object();
        return $sql;
    }

}
?>