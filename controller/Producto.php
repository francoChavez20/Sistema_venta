<?php
require_once ('../model/productoModel.php');

$tipo= $_REQUEST['tipo'];
//instancio la clase modeloproducto
$objProducto= new ProductoModel();
if($tipo=="registrar"){
   /* print_r($_POST);*/
    if($_POST){
        $codigo  =$_POST['codigo'];
        $nombre  =$_POST['nombre'];
        $detalle  =$_POST['detalle'];
        $precio  =$_POST['precio'];
        $stock  =$_POST['stock'];
        $categoria  =$_POST['categoria'];
        $fecha_v =$_POST['fecha_v'];
        $imagen  =$_POST['imagen'];
        $proveedor =$_POST['proveedor'];

        if ($codigo==""|| $nombre=="" || $detalle=="" || $precio==""|| $stock==""||$fecha_v=="" || $categoria==""|| $imagen==""|| $proveedor=="" ) {
         //respuesta
            $arr_Respuestas =array ('status'=>false,'mensaje'=>'error,campos vacios');
            
           } else{
                $arrProducto =$objProducto-> registrarProducto
                ($codigo,$nombre,$detalle,$precio,$stock,$categoria,$fecha_v,$imagen,$proveedor);

      if ($arrProducto->id>0){
               $arr_Respuestas = array('status'=>true,'mensaje'=>'Registro Exitoso');
          }else{
              $arr_Respuestas = array('status'=>false,'mensaje'=>'Error al Registrar Producto');
              }
             echo json_encode($arr_Respuestas);
           }
    }
}

?>