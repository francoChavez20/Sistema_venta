<?php
require_once "./config/config.php";

class conexion{
    public static function connect(){
        $mysql = new mysqli(BD_HOST, BD_NAME, BD_USER, BD_PASSWORD, BASE_URL);
        $mysql ->set_charset(BD_CHARSET);
        if (mysqli_connect_errno()) {
            echo "Error de conexion: ". mysqli_connect_errno();

    }
}
}


?>