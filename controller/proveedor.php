<?php 
require_once('../model/proveedorModel.php');
$tipo = $_REQUEST['tipo'];

// Instanciamos la clase ProveedorModel
$objProveedor = new ProveedorModel();

if ($tipo == "listar") {
    $arr_Respuestas = array('status' => false, 'contenido' => '');
    $arr_proveedor = $objProveedor->obtener_proveedor();  
    
    if (!empty($arr_proveedor)) {
        for ($i = 0; $i < count($arr_proveedor); $i++) {
            $id_proveedor = $arr_proveedor[$i]->id;
            $proveedor = $arr_proveedor[$i]->razon_social;
            $opciones = '
            <a href="'.BASE_URL.'editar-producto/'. $id_proveedor.'" class="btn btn-warning"><i class="fa fa-pencil"></i> editar</a>
            <button onclick="eliminar-producto('. $id_proveedor.');" class="btn btn-danger"><i class="fa fa-trash"></i>eliminar</button>';
            $arr_proveedor[$i] -> options= $opciones;
        }
        $arr_Respuestas['status'] = true;
        $arr_Respuestas['contenido'] = $arr_proveedor; 
    }

    echo json_encode($arr_Respuestas);
}

?>