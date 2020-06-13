<?php
  require "conexion.php";
  session_start();
  mysqli_set_charset($conexion,'utf8');
  $peliculas = array();
  $miembros = array();
  $miembro;
  $pelicula;
  $query;
  $result;
?>

<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>IS-Website Peliculas Online en Full HD 4K</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="./index.php" class="brand-logo center">CRUDa</a>
      <ul id="nav-mobile" class="sidenav">
        <li><a href="./index.php">Inicio</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <?php if ($_GET["s"] == "ap"):?>
    <?php 
        $query = "SELECT * FROM peliculas";
        $result = $conexion -> query($query);
        while ($pelicula = $result -> fetch_assoc()) {
            $peliculas[] = $pelicula;
        }
    ?>
    <h1 style="text-align:center">Seleccione una Pelicula</h1>
    <div class="collection">
        <?php for($i = 0; $i < sizeof($peliculas); $i++):?>
            <?php $pelicula = $peliculas[$i];?>
            <a href="./update.php?u=p&id=<?php echo $pelicula['id'];?>" class="collection-item"><?php echo $pelicula['titulo'];?></a>
        <?php endfor;?>
    </div>

  <?php elseif ($_GET["s"] == "am"):?>
    <?php 
        $query = "SELECT * FROM miembros";
        $result = $conexion -> query($query);
        while ($miembro = $result -> fetch_assoc()) {
            $miembros[] = $miembro;
        }
    ?>
    <h1 style="text-align:center">Seleccione un Usuario</h1>
    <div class="collection">
        <?php for($i = 0; $i < sizeof($miembros); $i++):?>
            <?php $miembro = $miembros[$i];?>
            <a href="./update.php?u=m&id=<?php echo $miembro['id'];?>" class="collection-item"><?php echo $miembro['nombre'];?></a>
        <?php endfor;?>
    </div>

  <?php elseif ($_GET["s"] == "ep"):?>
    <?php 
        $query = "SELECT * FROM peliculas";
        $result = $conexion -> query($query);
        while ($pelicula = $result -> fetch_assoc()) {
            $peliculas[] = $pelicula;
        }
    ?>
    <h1 style="text-align:center">Seleccione una Pelicula</h1>
    <div class="collection">
        <?php for($i = 0; $i < sizeof($peliculas); $i++):?>
            <?php $pelicula = $peliculas[$i];?>
            <a href="./submit.php?v=dp&id=<?php echo $pelicula['id'];?>" class="collection-item"><?php echo $pelicula['titulo'];?></a>
        <?php endfor;?>
    </div>

  <?php elseif ($_GET["s"] == "em"):?>
    <?php 
        $query = "SELECT * FROM miembros";
        $result = $conexion -> query($query);
        while ($miembro = $result -> fetch_assoc()) {
            $miembros[] = $miembro;
        }
    ?>
    <h1 style="text-align:center">Seleccione un Usuario</h1>
    <div class="collection">
        <?php for($i = 0; $i < sizeof($miembros); $i++):?>
            <?php $miembro = $miembros[$i];?>
            <a href="./submit.php?v=dm&id=<?php echo $miembro['id'];?>" class="collection-item"><?php echo $miembro['nombre'];?></a>
        <?php endfor;?>
    </div>
    
  <?php endif;?>
</body>

</html>