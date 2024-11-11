<?php
require_once ('../model/categoriaModel.php');

$tipo= $_REQUEST['tipo'];
//instancio la clase modeloproducto
$objCategoria= new RegistrarCategoriaModel();
if($tipo=="registrar"){
    //print_r($_POST);
    //echo $_FILES['imagen']['name'];
    if($_POST){
    
        $nombre  =$_POST['nombre'];
        $detalle  =$_POST['detalle'];
       

        if ( $nombre=="" || $detalle=="") {
         //respuesta
            $arr_Respuestas =array ('status'=>false,'mensaje'=>'error,campos vacios');
            
           } else{
                $arrCategoria =$objCategoria-> registrarCategoria
                ($nombre,$detalle);

      if ($arrCategoria->id>0){
               $arr_Respuestas = array('status'=>true,'mensaje'=>'Registro Exitoso');
               
               
          }else{
              $arr_Respuestas = array('status'=>false,'mensaje'=>'Error al Registrar categoria');
              }
             echo json_encode($arr_Respuestas);
           }
    }
}

?>