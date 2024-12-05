<?php
require_once('../model/categoriaModel.php');
$tipo = $_REQUEST['tipo'];

//instancio la clase modeloproducto
$objCategoria = new CategoriaModel();



if ($tipo == "listar") {
    $arr_Respuestas = array('status' => false, 'contenido' => '');
    $arr_Categorias = $objCategoria->obtener_categoria();
    
    if (!empty($arr_Categorias)) {
        // recorremos el array para agregar las opciones de la categorias
        for ($i = 0; $i < count($arr_Categorias); $i++) {
            $id_categoria = $arr_Categorias[$i]->id;
            $categoria = $arr_Categorias[$i]->nombre;
            $opciones = '
            <a href="'.BASE_URL.'editar-categoria/'. $id_categoria.'" class="btn btn-warning"><i class="fa fa-pencil"></i> editar</a>
            <button onclick="eliminar-categoria('. $id_categoria.');" class="btn btn-danger"><i class="fa fa-trash"></i>eliminar</button>';
            $arr_Categorias[$i] -> options = $opciones ;
        }
        $arr_Respuestas['status'] = true;
        $arr_Respuestas['contenido'] = $arr_Categorias;
    }

    echo json_encode($arr_Respuestas);
}
if($tipo == "ver"){
    //print_r($_POST);
    $id_categoria= $_POST['id_categoria'];
    $arr_Respuesta = $objCategoria->obtener_categorias($id_categoria);
    //print_r($arr_Respuesta);
    if(empty($arr_Respuesta)){
        $response = array('status' => false, 'mensaje' => "No se encontraron resultados");
    }else{
        $response = array('status' => true, 'mensaje' => "datos encontrados",'contenido'=>$arr_Respuesta);
    }
    echo json_encode($response);
}
