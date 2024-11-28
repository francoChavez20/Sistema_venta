<?php
require_once "./config/config.php";
require_once "./controller/vistas_control.php";

$mostrar =  new vistascontrolador();

$vista = $mostrar->obtenerVistaControlador();
if ($vista=="login" || $vista == "404") {
    require_once "./views/".$vista.".php";
}else{
    include_once "./views/include/header.php";
    include $vista;
    include_once "./views/include/footer.php";
}

 ?>