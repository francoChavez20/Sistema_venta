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
            <a href="" class="btn btn-success"><i class="fa fa-pencil"></i></a>';
            $arr_Categorias[$i] -> options = $opciones ;
        }
        $arr_Respuestas['status'] = true;
        $arr_Respuestas['contenido'] = $arr_Categorias;
    }

    echo json_encode($arr_Respuestas);
}
