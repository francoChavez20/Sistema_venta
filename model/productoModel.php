<?php 
require_once "../librerias/conexion.php";
class productoModel{


    private $conexion;
     function __construct(){
        $this->conexion = new conexion();
        $this->conexion =$this->conexion ->connect();
     }
    public function registrarProducto($codigo,$nombre,$detalle,$precio,$stock,$categoria,$fecha_v,$imagen,$proveedor){
        $sql = $this->conexion->query("CALL insertProducto('{'$codigo','$nombre','$detalle','$precio','$stock','$categoria','$fecha_v','$imagen','$proveedor'}')");
    }
}





?>