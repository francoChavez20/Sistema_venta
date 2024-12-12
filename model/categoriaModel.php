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
        $respuesta = $this->conexion->query("SELECT * FROM categoria WHERE estado = '1';");
        while ($objeto=$respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }
  public function obtener_categorias($id){
    $respuesta = $this->conexion->query("SELECT * FROM categoria WHERE id  = '$id'");
    $objeto = $respuesta->fetch_object();
    return $objeto;
  }

  public function eliminarCategoria($id){
    $sql = $this->conexion->query("CALL eliminarCategoria('{$id}')");
    $sql = $sql->fetch_object();
    return $sql;

}
public function actualizarCategoria($id, $nombre, $detalle){
    $sql = $this->conexion->query("CALL updateCategoria('{$id}','{$nombre}','{$detalle}')");
    $sql = $sql->fetch_object();
    return $sql;
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