<?php
    require "conexion.php";
    mysqli_set_charset($conexion,'utf8');
    $id = 0;
    $pelicula;
    $peliculas = array();
    $result;
    $query;
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

  <?php
    $query = "SELECT * FROM peliculas";
    $result = $conexion -> query($query);
    while ($pelicula = $result -> fetch_assoc()) {
        $peliculas[] = $pelicula;
    } 
  ?>

  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="./index.php" class="brand-logo center">CRUDa</a>
      <ul class="left hide-on-med-and-down">
        <li><a href="./catalog.php">Catalogo</a></li>
        <li><a href="#">Genero</a></li>
      </ul>

      <ul id="dropdown-menu" class="dropdown-content">
        <li><a href="./login.php">Iniciar Sesion</a></li>
        <li><a href="./registry.php">Registrase</a></li>
      </ul>

      <ul class="right hide-on-med-and-down">
        <li><a href="#"><i class="material-icons">search</i></a></li>
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown-menu">Menu<i
              class="material-icons right">arrow_drop_down</i></a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="./index.php">Inicio</a></li>
        <li><a href="./catalog.php">Catalogo</a></li>
        <li><a href="#">Genero</a></li>
        <li><a href="./login.php">Iniciar Sesion</a></li>
        <li><a href="./registry.php">Registrase</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <table>
    <?php $i = 0; while ($i < sizeof($peliculas)):?>
        <tr height="20%">
          <?php for ($v = 0;$v <= 3; $v++):?>
            <?php if ($i < sizeof($peliculas)):?>
                <th width="25%">
                    <?php $pelicula = $peliculas[$i];?>
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="assets/images/<?php echo $pelicula['titulo'];?>-poster.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><?php echo $pelicula['titulo'];?><i
                                class="material-icons right">more_vert</i></span>
                            <p><a href="#"><?php echo $pelicula['categoria'];?></a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><?php echo $pelicula['titulo'];?><i
                                class="material-icons right">close</i></span>
                            <p><?php echo $pelicula['resumen'];?></p>
                            <p>Dirigida por     : <?php echo $pelicula['director'];?></p>
                            <p>Duracion         : <?php echo $pelicula['duracion'];?></p>
                            <p>Idiomas          : <?php echo $pelicula['idioma'];?></p>
                            <p>Fecha de estreno : <?php echo $pelicula['fecha_estreno'];?></p>
                        </div>
                    </div>
                    <?php $i++;?>
                </th>
            <?php endif?>
          <?php endfor?>
        </tr>
    <?php endwhile?>
  </table>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="assets/js/materialize.js"></script>
  <script src="assets/js/init.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $(".dropdown-trigger").dropdown();
    });
  </script>

</body>

</html>