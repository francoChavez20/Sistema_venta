<?php
require_once('../model/productoModel.php');
$tipo = $_REQUEST['tipo'];

// Instantiate the ProductoModel class
$objProducto = new ListarProductoModel();

if ($tipo == "listar") {
    $arr_Respuestas = array('status' => false, 'contenido' => '');
    $arr_Productos = $objProducto->obtener_producto();
    
    if (!empty($arr_Productos)) {
        // Iterate through the array to add product options
        for ($i = 0; $i < count($arr_Productos); $i++) {
            $id_producto = $arr_Productos[$i]->id;
            $producto = $arr_Productos[$i]->nombre;

            // Customize options (edit and delete buttons for each product)
            $opciones = '
            <a href="" class="btn btn-success"><i class="fa fa-pencil"></i></a>
            <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>';
            
            // Add options and other attributes to the product object
            $arr_Productos[$i]->options = $opciones;
            
        }
        $arr_Respuestas['status'] = true;
        $arr_Respuestas['contenido'] = $arr_Productos;
    }

    echo json_encode($arr_Respuestas);
}
?>
