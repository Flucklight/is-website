<?php
    include "conexion.php";
    mysqli_set_charset($conexion,'utf8');

    $buscarUsuario = "SELECT * FROM miembros WHERE alias = '$_POST[alias]'";

    $result = $conexion -> query($buscarUsuario);

    if (mysqli_num_rows($result) == 1 ) {
        echo '<p class="alert>El nombre de usuario ya fue utilizado!>';
        header('Location: ./registry.php');
    } else {
        mysqli_query($conexion, "INSERT INTO miembros (
            nombre,
            correo,
            alias,
            contraseña)
        VALUES(
            '$_POST[nombre]',
            '$_POST[correo]',
            '$_POST[alias]',
            '$_POST[contraseña]'      
        )");
        echo '<p class="alert>Usuario Creado Exitosamente!p>';
        header('Location: ./index.php');
    }
?>