<?php
require_once "../libreria/conexion.php";

class personaModel
{
    private $conexion;

    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $password)
    {
        $sql = $this->conexion->query("CALL insertPersona(
            '{$nro_identidad}', '{$razon_social}', '{$telefono}', '{$correo}', 
            '{$departamento}', '{$provincia}', '{$distrito}', '{$cod_postal}', 
            '{$direccion}', '{$rol}', '{$password}'
        )");

        $sql = $sql->fetch_object();
        return $sql;
    }
    public function buscarPersonaPorDni($dni)
    {
        $sql = $this->conexion->query("SELECT * FROM persona where nro_identidad = '{$dni}'");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function obtener_proveedor($id)
    {
        $respuesta = $this->conexion->query("SELECT * FROM persona WHERE id = '$id' AND rol = 'proveedor'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }
    public function obtener_personas($id)
    {
        $respuesta = $this->conexion->query("SELECT * FROM persona WHERE id = '$id'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }

    public function obtener_proveedores()
    {
        $respuesta = $this->conexion->query("SELECT * FROM persona WHERE rol IN ('proveedor') AND estado = '1';");
        $proveedores = [];
        while ($row = $respuesta->fetch_object()) {
            $proveedores[] = $row;
        }
        return $proveedores;
    }
    public function obtener_usuarios()
    {
        $respuesta = $this->conexion->query("SELECT * FROM persona 
WHERE rol IN ('usuario', 'cajero', 'administrador', 'recepcionista') 
  AND estado = '1';");
        $usuarios = [];
        while ($row = $respuesta->fetch_object()) {
            $usuarios[] = $row;
        }
        return $usuarios;
    }

    public function obtener_trabajador($id)
    {
        $respuesta = $this->conexion->query("SELECT * FROM persona WHERE id  = '$id'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }

    public function eliminarUsuario($id)
    {
        $sql = $this->conexion->query("CALL eliminarPersona('{$id}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function actualizarPersona($id, $nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion)
    {
        $sql = $this->conexion->query("CALL updatePersona('{$id}','{$nro_identidad}','{$razon_social}','{$telefono}','{$correo}','{$departamento}','{$provincia}','{$distrito}','{$cod_postal}','{$direccion}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
}
