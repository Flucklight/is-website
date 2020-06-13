<?php
    include "conexion.php";
    mysqli_set_charset($conexion,'utf8');

    if ($_GET["v"] == "m") {
        $buscarUsuario = "SELECT * FROM miembros WHERE alias = '$_POST[alias]'";
        $result = $conexion -> query($buscarUsuario);
        if (mysqli_num_rows($result) == 1 ) {
            echo '<p class="alert">El nombre de usuario ya fue utilizado!>';
            header('Location: ./create.php?v=m');
        } else {
            mysqli_query($conexion, "INSERT INTO miembros (
                nombre,
                correo,
                alias,
                contraseña,
                permiso)
            VALUES(
                '$_POST[nombre]',
                '$_POST[correo]',
                '$_POST[alias]',
                '$_POST[contraseña]',
                '$_POST[permiso]'
            )");
            echo '<p class="alert>Usuario Creado Exitosamente!p>';
            header('Location: ./admin.php');
        }
    } elseif ($_GET["v"] == "p") {
        $buscarPelicula = "SELECT * FROM peliculas WHERE titulo = '$_POST[titulo]'";
        $result = $conexion -> query($buscarPelicula);
        if (mysqli_num_rows($result) == 1 ) {
            echo '<p>Ya existe una pelicula con el mismo nombre!>';
            header('Location: ./create.php?v=p');
        } else {
            mysqli_query($conexion, "INSERT INTO peliculas (
                titulo,
                categoria,
                director,
                duracion,
                idioma,
                resumen,
                fecha_estreno)
            VALUES(
                '$_POST[titulo]',
                '$_POST[categoria]',
                '$_POST[director]',
                '$_POST[duracion]',
                '$_POST[idioma]',
                '$_POST[resumen]',
                '$_POST[fecha_estreno]'
            )");
            echo '<p class="alert>Pelicula Ingresada Exitosamente!p>';
            header('Location: ./admin.php');
        }
    } else {
        $buscarUsuario = "SELECT * FROM miembros WHERE alias = '$_POST[alias]'";
        $result = $conexion -> query($buscarUsuario);
        if (mysqli_num_rows($result) == 1 ) {
            echo '<p class="alert">El nombre de usuario ya fue utilizado!>';
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
    }
?>