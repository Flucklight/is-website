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
        <li><a href="./create.php">Registrase</a></li>
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
        <li><a href="./create.php">Registrase</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <?php
    $query = "SELECT * FROM peliculas WHERE id = '$id'";
    $result = $conexion -> query($query);
    $pelicula = $result -> fetch_assoc();
  ?>

  <div class="parallax-container">
    <div class="parallax"><img src="assets/images/<?php echo $pelicula['titulo'];?>.jpg"></div>
    <article>
      <header align="center">
        <h2><?php echo $pelicula['titulo'];?></h2>
      </header>
      <div>
        <table>
          <tr>
            <th>
              <figure>
                <img width="200" height="300" src="assets/images/<?php echo $pelicula['titulo'];?>-poster.jpg">
              </figure>
            </th>
            <th>
              <p><?php echo $pelicula['resumen'];?></p>
            </th>
          </tr>
        </table>
      </div>
    </article>
  </div>

  <div class="carousel">
    <?php for ($id = 0;$id <= 5; $id++):?>
    <?php   $query = "SELECT * FROM peliculas WHERE id = '$id'";
            $result = $conexion -> query($query);
            $pelicula = $result -> fetch_assoc();?>
            <a class="carousel-item" href="<?echo $id;?>"><img src="assets/images/<?php echo $pelicula['titulo'];?>-poster.jpg"></a>
    <?php endfor?>
  </div>

  <div>
    <table>
      
      <th>
        <table>
          <?php $i = 0; for ($y = 0;$y <= 5; $y++):?>
            <tr height="25%">
              <?php for ($v = 0;$v <= 4; $v++):?>
                <?php if ($i < sizeof($peliculas)):?>
                  <th width="25%">
                    <?php $pelicula = $peliculas[$i];?>
                    <figure>
                      <img src="assets/images/<?php echo  $pelicula['titulo'];?>-poster.jpg">
                    </figure>
                    <?php $i++;?>
                  </th>
                <?php endif?>
              <?php endfor?>
            </tr>
          <?php endfor?>
        </table>
      </th>

      <th width="20%">
        <div class="icon-block">
          <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
          <h5 class="center">User Experience Focused</h5>

          <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework
            that incorporates components and animations that provide more feedback to users. Additionally, a single
            underlying responsive system across all platforms allow for a more unified user experience.</p>
        </div>
      </th>

    </table>
  </div>

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our
            full time job. Any amount would help support and continue development on this project and is greatly
            appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="assets/js/materialize.js"></script>
  <script src="assets/js/init.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $(".dropdown-trigger").dropdown();
      $('.parallax').parallax();
      $('.carousel').carousel();
    });
  </script>

</body>

</html>