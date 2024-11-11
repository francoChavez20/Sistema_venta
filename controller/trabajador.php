<?php
require_once('../model/trabajadorModel.php');
$tipo = $_REQUEST['tipo'];

// Instanciamos la clase ProveedorModel
$objtrabajador = new trabajadorModel();

if ($tipo == "listar") {
    $arr_Respuestas = array('status' => false, 'contenido' => '');
    $arr_trabajador = $objtrabajador->obtener_trabajador();  
    
    if (!empty($arr_trabajador)) {
        for ($i = 0; $i < count($arr_trabajador); $i++) {
            $id_trabajador = $arr_trabajador[$i]->id;
            $trabajador = $arr_trabajador[$i]->razon_social;
            $opciones = '
            <a href="" class="btn btn-success"><i class="fa fa-pencil"></i></a>';
            $arr_trabajador[$i]->options = $opciones;
        }
        $arr_Respuestas['status'] = true;
        $arr_Respuestas['contenido'] = $arr_trabajador; 
    }

    echo json_encode($arr_Respuestas);
}
