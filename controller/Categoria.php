<?php
require_once ('../model/categoriaModel.php');
$tipo =$_REQUEST['tipo'];

//instancio la clase modeloproducto
$objCategoria= new CategoriaModel();

if ($tipo=="listar") {
    $arr_Respuestas =array ('status'=>false,'contenido'=>'');
    $arr_Categorias = $objCategoria ->obtener_categoria();

    print_r($arr_Categorias);

}







?>