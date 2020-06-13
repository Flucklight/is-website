<?php
    include "conexion.php";
    mysqli_set_charset($conexion,'utf8');

    if ($_GET["v"] == "cm") {
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
    } elseif ($_GET["v"] == "cp") {
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
    } elseif ($_GET["v"] == "um") {
        $id = $_GET["id"];
        $query = "UPDATE miembros SET 
                  nombre        = '$_POST[nombre]', 
                  correo        = '$_POST[correo]', 
                  alias         = '$_POST[alias]', 
                  contraseña    = '$_POST[contraseña]', 
                  permiso       = '$_POST[permiso]'
                  WHERE id = '$id'";
        mysqli_query($conexion, $query);
        echo '<p class="alert>Usuario Actualizado Exitosamente!p>';
        header('Location: ./admin.php');
    } elseif ($_GET["v"] == "up") {
        $id = $_GET["id"];
        $query = "UPDATE peliculas SET 
                  titulo        = '$_POST[titulo]', 
                  categoria     = '$_POST[categoria]', 
                  director      = '$_POST[director]', 
                  duracion      = '$_POST[duracion]', 
                  idioma        = '$_POST[idioma]', 
                  resumen       = '$_POST[resumen]',
                  fecha_estreno = '$_POST[fecha_estreno]'
                  WHERE id = '$id'";
        mysqli_query($conexion, $query);
        echo '<p class="alert>Pelicula Actualizada Exitosamente!p>';
        header('Location: ./admin.php');
    } elseif ($_GET["v"] == "dm") {
        $id = $_GET["id"];
        $query = "DELETE FROM miembros WHERE id = '$id'";
        mysqli_query($conexion, $query);
        echo '<p class="alert>Usuario Eliminado Exitosamente!p>';
        header('Location: ./admin.php');
    } elseif ($_GET["v"] == "dp") {
        $id = $_GET["id"];
        $query = "DELETE FROM peliculas WHERE id = '$id'";
        mysqli_query($conexion, $query);
        echo '<p class="alert>Pelicula Eliminado Exitosamente!p>';
        header('Location: ./admin.php');
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