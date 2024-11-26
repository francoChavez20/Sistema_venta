<?php
require_once ('../model/compraModel.php');
require_once('../model/productoModel.php');
require_once('../model/personaModel.php');

$tipo = $_REQUEST['tipo'];
// Instantiate the ComprasModel class
$objCompra = new ComprasModel();
$objPersona = new PersonaModel();
$objProducto = new ProductoModel();


if ($tipo == "listar") {
    $arr_Respuestas = array('status' => false, 'contenido' => '');
    $arr_compra = $objCompra->obtener_compras();

    if (!empty($arr_compra)) {
        // recorremos el array para agregar las opciones de la categorias
        for ($i = 0; $i < count($arr_compra); $i++) {

            $id_producto = $arr_compra[$i]->id_producto;
            $r_producto = $objProducto->obtener_product($id_producto);
            $arr_compra[$i]->producto = $r_producto;

            $id_trabajador = $arr_compra[$i]->id_trabajador; // Obtén el ID del proveedor relacionado con el producto
            $r_trabajador = $objPersona->obtener_trabajador($id_trabajador); // Obtén los datos del proveedor
            $arr_compra[$i]->trabajador = $r_trabajador; // Asocia el proveedor al producto


            $id_compra = $arr_compra[$i]->id;
            
            $opciones = '
            <a href="" class="btn btn-success"><i class="fa fa-pencil"></i></a>';
            $arr_compra[$i]->options = $opciones;
        }
        $arr_Respuestas['status'] = true;
        $arr_Respuestas['contenido'] = $arr_compra;
    }

    echo json_encode($arr_Respuestas);
}

if ($tipo == "registrar") {
    if ($_POST) {
        $id_producto = $_POST['id_producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $fecha_compra = $_POST['fecha_compra'];
        $id_trabajador = $_POST['id_trabajador'];

        // Check for empty fields
        if ($id_producto == "" || $cantidad == "" || $precio == "" || $fecha_compra == "" || $id_trabajador == "") {
            // Response for empty fields
            $arr_Respuestas = array('status' => false, 'mensaje' => 'Error, campos vacíos');
        } else {
            // Register the purchase in the database
            $arrCompra = $objCompra->registrarCompra($id_producto, $cantidad, $precio, $fecha_compra, $id_trabajador);

            if ($arrCompra->id > 0) {
                $arr_Respuestas = array('status' => true, 'mensaje' => 'Registro Exitoso');
            } else {
                $arr_Respuestas = array('status' => false, 'mensaje' => 'Error al Registrar Compra');
            }
        }
        echo json_encode($arr_Respuestas);
    }
}
?>
