<?php
require_once('../model/productoModel.php');
require_once('../model/categoriaModel.php');
require_once('../model/personaModel.php');

$tipo = $_REQUEST['tipo'];

$objProducto = new ProductoModel();
$objCategoria = new CategoriaModel();
$objPersona = new PersonaModel();

if ($tipo == "listar") {
    $arr_Respuestas = array('status' => false, 'contenido' => '');
    $arr_productos = $objProducto->obtener_productos();

    if (!empty($arr_productos)) {
        // recorremos el array para agregar las opciones de la categorias
        for ($i = 0; $i < count($arr_productos); $i++) {

            $id_categoria = $arr_productos[$i]->id_categoria;
            $r_categoria = $objCategoria->obtener_categorias($id_categoria);
            $arr_productos[$i]->categoria = $r_categoria;

            $id_proveedor = $arr_productos[$i]->id_proveedor;
            $r_proveedor = $objPersona->obtener_proveedor($id_proveedor);
            $arr_productos[$i]->proveedor = $r_proveedor;

            $id_producto = $arr_productos[$i]->id;
            $producto = $arr_productos[$i]->nombre;
            $opciones = '
            <a href="'.BASE_URL.'editar-producto/'. $id_producto.'" class="btn btn-warning"><i class="fa fa-pencil"></i> editar</a>
            <button onclick="eliminar-producto('. $id_producto.');" class="btn btn-danger"><i class="fa fa-trash"></i>eliminar</button>';

            $arr_productos[$i]->options = $opciones;
        }
        $arr_Respuestas['status'] = true;
        $arr_Respuestas['contenido'] = $arr_productos;
    }

    echo json_encode($arr_Respuestas);
}

if ($tipo == "registrar") {
    if ($_POST) {
        $codigo  = $_POST['codigo'];
        $nombre  = $_POST['nombre'];
        $detalle  = $_POST['detalle'];
        $precio  = $_POST['precio'];
        $stock  = $_POST['stock'];
        $categoria  = $_POST['categoria'];
        $fecha_v = $_POST['fecha_v'];
        $imagen  = 'imagen';
        $proveedor = $_POST['proveedor'];

        if ($codigo == "" || $nombre == "" || $detalle == "" || $precio == "" || $stock == "" || $fecha_v == "" || $categoria == "" || $imagen == "" || $proveedor == "") {
            //respuesta
            $archivo = $_FILES['imagen']['tmp_name'];
                $destino = './assets/img_productos/';
                $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));

            $arr_Respuestas = array('status' => false, 'mensaje' => 'error,campos vacios');
        } else {
            $arrProducto = $objProducto->registrarProducto($codigo, $nombre, $detalle, $precio, $stock, $categoria, $fecha_v, $imagen, $proveedor);

            if ($arrProducto->id > 0) {
                $arr_Respuestas = array('status' => true, 'mensaje' => 'Registro Exitoso');

                $nombre = $arrProducto->id . "." . $tipoArchivo;

                if (move_uploaded_file($archivo, $destino . '' . $nombre)) {
                } else {
                    $arr_Respuestas = array('status' => true, 'mensaje' => 'Registro Exitoso, error al subir imagen');
                }
            } else {
                $arr_Respuestas = array('status' => false, 'mensaje' => 'Error al Registrar Producto');
            }
            echo json_encode($arr_Respuestas);
        }
    }
}

if($tipo == "ver"){
    //print_r($_POST);
    $id_producto = $_POST['id_producto'];
    $arr_Respuesta = $objProducto->verProducto($id_producto);
    //print_r($arr_Respuesta);
    if(empty($arr_Respuesta)){
        $response = array('status ' => false, 'mensaje' => "No se encontraron resultados");
    }else{
        $response = array('status ' => true, 'mensaje' => "datos encontrados",'contenido'=>$arr_Respuesta);
    }
    echo json_encode($response);
}
