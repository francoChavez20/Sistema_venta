<?php
require_once "../libreria/conexion.php";
class CategoriaModel{
    private $conexion ;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function obtener_categoria(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM categoria");
        while ($objeto=$respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }
  
}

class RegistrarCategoriaModel{
    private $conexion ;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrarCategoria($nombre,$detalle){
$sql = $this->conexion->query("CALL insertCategoria('{$nombre}','{$detalle}')");

           $sql = $sql->fetch_object() ;
           return $sql;                                         
    }
}
?>