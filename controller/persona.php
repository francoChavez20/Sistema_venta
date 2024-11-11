<?php
require_once('../model/personaModel.php');

$tipo = $_REQUEST['tipo'];

// Instancia de la clase modelo de persona
$objPersona = new personaModel();

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
        $password = $_POST['password'];
        $estado = $_POST['estado'];
        $fecha_reg = $_POST['fecha_reg'];

        // Verificación de campos vacíos
        if (
            $nro_identidad == "" || $razon_social == "" || $telefono == "" || $correo == "" ||
            $departamento == "" || $provincia == "" || $distrito == "" || $cod_postal == "" ||
            $direccion == "" || $rol == "" || $password == "" || $estado == "" || $fecha_reg == ""
        ) {
            // Respuesta en caso de campos vacíos
            $arr_Respuestas = array('status' => false, 'mensaje' => 'Error, campos vacíos');
        } else {
            // Llamada al método para registrar persona
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
                $password,
                $estado,
                $fecha_reg
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
