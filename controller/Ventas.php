<?php


require_once('../model/VentasModel.php');
require_once('../model/personaModel.php');

$tipo = $_REQUEST['tipo'];

$objVentas = new VentasModel();
$objPersona = new PersonaModel();

if ($tipo == "listar") {
    $arr_Respuestas = array('status' => false, 'contenido' => '');
    $arr_ventas = $objVentas->obtener_ventas();

    if (!empty($arr_ventas)) {
        // recorremos el array para agregar las opciones de la categorias
        for ($i = 0; $i < count($arr_ventas); $i++) {

            /*$id_categoria = $arr_productos[$i]->id_categoria;
            $r_categoria = $objCategoria->obtener_categorias($id_categoria);
            $arr_productos[$i]->categoria = $r_categoria;*/

           /* $id_proveedor = $arr_productos[$i]->id_proveedor;
            $r_proveedor = $objPersona->obtener_proveedor($id_proveedor);
            $arr_productos[$i]->proveedor = $r_proveedor;*/

            $id_ventas = $arr_ventas[$i]->id;
           
            $opciones = '
            <a href="' . BASE_URL . 'editar-producto/' . $id_ventas. '" class="btn btn-warning"><i class="fa fa-pencil"></i> editar</a>
            <button onclick="eliminar-producto(' . $id_ventas . ');" class="btn btn-danger"><i class="fa fa-trash"></i>eliminar</button>';

            $arr_ventas[$i]->options = $opciones;
        }
        $arr_Respuestas['status'] = true;
        $arr_Respuestas['contenido'] = $arr_ventas;
    }

    echo json_encode($arr_Respuestas);
}
?>

































