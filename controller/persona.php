<?php
require_once('../model/personaModel.php');

$tipo = $_REQUEST['tipo'];

// Instancia de la clase modelo de persona
$objPersona = new personaModel();

if ($tipo == "listar") {
    $arr_Respuestas = array('status' => false, 'contenido' => '');
    $arr_proveedor = $objPersona->obtener_proveedores();

    if (!empty($arr_proveedor)) {
        // recorremos el array para agregar las opciones de la categorias
        for ($i = 0; $i < count($arr_proveedor); $i++) {

            $id_proveedor = $arr_proveedor[$i]->id;
            $proveedor = $arr_proveedor[$i]->razon_social;
            $opciones = '
            <a href="' . BASE_URL . 'editar-persona/' . $id_proveedor . '" class="btn btn-warning"><i class="fa fa-pencil"></i> editar</a>
            <button onclick="eliminar_persona(' . $id_proveedor . ');" class="btn btn-danger"><i class="fa fa-trash"></i>eliminar</button>';

            $arr_proveedor[$i]->options = $opciones;
        }
        $arr_Respuestas['status'] = true;
        $arr_Respuestas['contenido'] = $arr_proveedor;
    }

    echo json_encode($arr_Respuestas);
}

if ($tipo == "listar_usuario") {
    $arr_Respuestas = array('status' => false, 'contenido' => '');

    $arr_usuarios = $objPersona->obtener_usuarios();

    if (!empty($arr_usuarios)) {

        for ($i = 0; $i < count($arr_usuarios); $i++) {
            $id_usuario = $arr_usuarios[$i]->id;
            $opciones = '
            <a href="' . BASE_URL . 'editar-persona/' . $id_usuario . '" class="btn btn-warning"><i class="fa fa-pencil"></i> editar</a>
            <button onclick="eliminar_persona(' . $id_usuario . ');" class="btn btn-danger"><i class="fa fa-trash"></i>eliminar</button>';
            $arr_usuarios[$i]->options = $opciones;
        }
        $arr_Respuestas['status'] = true;
        $arr_Respuestas['contenido'] = $arr_usuarios;
    }

    echo json_encode($arr_Respuestas);
}

if ($tipo == "registrar") {
    if ($_POST) {
        // Capturamos los valores de los campos
        $nro_identidad = $_POST['nro_identidad'];
        $razon_social = $_POST['razon_social'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $departamento = $_POST['departamento'];
        $provincia = $_POST['provincia'];
        $distrito = $_POST['distrito'];
        $cod_postal = $_POST['cod_postal'];
        $direccion = $_POST['direccion'];
        $rol = $_POST['rol'];
        $password = $_POST['password']; // Captura de la contraseña sin encriptar


        // Verificación de campos vacíos
        if (
            $nro_identidad == "" || $razon_social == "" || $telefono == "" || $correo == "" ||
            $departamento == "" || $provincia == "" || $distrito == "" || $cod_postal == "" ||
            $direccion == "" || $rol == "" || $password == ""
        ) {
            // Respuesta en caso de campos vacíos
            $arr_Respuestas = array('status' => false, 'mensaje' => 'Error, campos vacíos');
        } else {
            // Encriptar la contraseña
            $password_hashed = password_hash($password, PASSWORD_BCRYPT);

            // Llamada al método para registrar persona con la contraseña encriptada
            $arrPersona = $objPersona->registrarPersona(
                $nro_identidad,
                $razon_social,
                $telefono,
                $correo,
                $departamento,
                $provincia,
                $distrito,
                $cod_postal,
                $direccion,
                $rol,
                $password_hashed // Contraseña encriptada

            );

            if ($arrPersona->id > 0) {
                $arr_Respuestas = array('status' => true, 'mensaje' => 'Registro Exitoso');
            } else {
                $arr_Respuestas = array('status' => false, 'mensaje' => 'Error al Registrar Persona');
            }

            echo json_encode($arr_Respuestas);
        }
    }
}

if ($tipo == "ver") {
    //print_r($_POST);
    $id_persona = $_POST['id_persona'];
    $arr_Respuesta = $objPersona->obtener_personas($id_persona);
    //print_r($arr_Respuesta);
    if (empty($arr_Respuesta)) {
        $response = array('status' => false, 'mensaje' => "No se encontraron resultados");
    } else {
        $response = array('status' => true, 'mensaje' => "datos encontrados", 'contenido' => $arr_Respuesta);
    }
    echo json_encode($response);
}


if ($tipo == "actualizar") {
    $id_persona = $_POST['id_persona'];
    $nro_identidad = $_POST['nro_identidad'];
    $razon_social = $_POST['razon_social'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $departamento = $_POST['departamento'];
    $provincia = $_POST['provincia'];
    $distrito = $_POST['distrito'];
    $cod_postal = $_POST['cod_postal'];
    $direccion = $_POST['direccion'];

    if (
        $nro_identidad == "" || $razon_social == "" || $telefono == "" || $correo == "" ||
        $departamento == "" || $provincia == "" || $distrito == "" || $cod_postal == "" ||
        $direccion == ""
    ) {
        $arr_Respuestas = array('status' => false, 'mensaje' => 'error campos vacios');
    } else {
        $arr_Categorias = $objPersona->actualizarPersona($id_persona,
            $nro_identidad,
            $razon_social,
            $telefono,
            $correo,
            $departamento,
            $provincia,
            $distrito,
            $cod_postal,
            $direccion
        );
        if ($arr_Categorias->p_id > 0) {
            $arr_Respuestas = array('status' => true, 'mensaje' => 'actualizacion Exitoso');
        } else {
            $arr_Respuestas = array('status' => false, 'mensaje' => 'Error al actualizar Producto');
        }
    }
    echo json_encode($arr_Respuestas);
}


if ($tipo == "eliminar") {
    $id_usuario = $_POST['id_usuario'];
    try {
        $arr_Respuesta = $objPersona->eliminarUsuario($id_usuario);
        
        if (empty($arr_Respuesta)) {
            $response = array(
                'status' => false,
                'message' => 'No se encontró la categoría o no pudo ser eliminada.'
            );
        } else {
            $response = array(
                'status' => true,
                'message' => 'Categoría eliminada correctamente.'
            );
        }
    } catch (PDOException $e) {
        // Verificamos si el error es debido a una restricción de clave foránea
        if ($e->getCode() == '23000') { // Código de error SQLSTATE para restricciones de integridad
            $response = array(
                'status' => false,
                'message' => 'No se puede eliminar porque está asociada a otros registros.'
            );
        } else {
            // Otro tipo de error
            $response = array(
                'status' => false,
                'message' => 'Ocurrió un error inesperado: ' . $e->getMessage()
            );
        }
    }
    echo json_encode($response);
}
