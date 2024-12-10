<?php


//require_once('../model/VentasModel.php');
require_once('../model/pagoModel.php');

$tipo = $_REQUEST['tipo'];

//$objVentas = new VentasModel();
$objPago = new PagoModel();

if ($tipo == "listar") {
    $arr_Respuestas = array('status' => false, 'contenido' => '');
    $arr_pago = $objPago->obtener_pago();

    if (!empty($arr_pago)) {
        // recorremos el array para agregar las opciones de la categorias
        for ($i = 0; $i < count($arr_pago); $i++) {

            /*$id_categoria = $arr_productos[$i]->id_categoria;
            $r_categoria = $objCategoria->obtener_categorias($id_categoria);
            $arr_productos[$i]->categoria = $r_categoria;*/

           /* $id_proveedor = $arr_productos[$i]->id_proveedor;
            $r_proveedor = $objPersona->obtener_proveedor($id_proveedor);
            $arr_productos[$i]->proveedor = $r_proveedor;*/

            $id_pago = $arr_pago[$i]->id;
           
            $opciones = '
            <a href="' . BASE_URL . 'editar-producto/' . $id_pago. '" class="btn btn-warning"><i class="fa fa-pencil"></i> editar</a>
            <button onclick="eliminar-producto(' . $id_pago . ');" class="btn btn-danger"><i class="fa fa-trash"></i>eliminar</button>';

            $arr_pago[$i]->options = $opciones;
        }
        $arr_Respuestas['status'] = true;
        $arr_Respuestas['contenido'] = $arr_pago;
    }

    echo json_encode($arr_Respuestas);
}
?>

































