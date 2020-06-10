<?php
    $host_db = "localhost";
    $user_db = "root";
    $pass_db = "Hotwheels1";
    $db_name = "is-website";
    $tbl_pic = "peliculas";
    $tbl_usr = "miembros";

    $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

    if ($conexion->connect_error) {
        die("Error en la conexion a la base de datos: " . $conexion->connect_error);
    }
?>
