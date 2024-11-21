<?php
require_once "../libreria/conexion.php";
class ProductoModel{
    private $conexion ;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function obtener_productos(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM producto");
        while ($objeto=$respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
        
    }
    public function registrarProducto($codigo,$nombre,$detalle,$precio,$stock,$categoria,$fecha_v,$imagen,$proveedor){
$sql = $this->conexion->query("CALL insertProducto('{$codigo}','{$nombre}','{$detalle}','{$precio}','{$stock}',
                                                     '{$categoria}','$fecha_v','{$imagen}','{$proveedor}')");

           $sql = $sql->fetch_object() ;
           return $sql;                                         
    }
    public function actualizar_imagen($id, $imagen){
        $sql = $this->conexion->query("UPDATE producto set imagen = '{$imagen}' WHERE id = '{$id}'");
        return 1;

    }
   
}

class ListarProductoModel {
    private $conexion;

    function __construct() {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function obtener_producto() {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM producto");
        
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }

        return $arrRespuesta;
    }
}



?>