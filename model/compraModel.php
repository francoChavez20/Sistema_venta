<?php
require_once "../libreria/conexion.php";

class ComprasModel {
    private $conexion;

    function __construct() {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

  
    public function registrarCompra($id_producto, $cantidad, $precio, $fecha_compra, $id_trabajador) {
        $sql = $this->conexion->query("CALL insertCompras('{$id_producto}', '{$cantidad}', '{$precio}', '{$fecha_compra}', '{$id_trabajador}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
}


?>
