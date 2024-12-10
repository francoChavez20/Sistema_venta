<?php
session_start();
class vistaModelo
{
    
    protected static function obtener_vista($vista)
    {
        $palabras_permitidas = ['inicio', 'usuario', 'producto', 'descripcion', 'ofertas', 'carrito', 'mujer', 'varon','perfil', 'pedido','direccion','ayuda', 'moneda','nuevo-producto','nueva-categoria',
    'nueva-persona','nueva-compra','ver-productos','ver-proveedor','ver-categoria','ver-usuario','ver-compras','editar-producto','editar-categoria','ver-venta','ver-detalle','ver-pago'];

    if (!isset($_SESSION['sesion_ventas_id'])) {
        return "login";
    }
    
        if (in_array($vista, $palabras_permitidas)) {
            if (is_file("./views/".$vista.".php")) {
                $contenido = "./views/".$vista.".php";  
            } else {
                $contenido = "404";
            }
        } elseif ($vista == "login" || $vista == "index") {
            $contenido = "login";
        } else {
            $contenido = "404";
        }
        return $contenido;
    }
}
