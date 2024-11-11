<?php
require_once ('../model/compraModel.php');

$tipo = $_REQUEST['tipo'];
// Instantiate the ComprasModel class
$objCompra = new ComprasModel();

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
