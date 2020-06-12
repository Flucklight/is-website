<?php
  require "conexion.php";
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

  <div class="row" style="margin-top:50px">
    <div class="col s6 offset-s3">
      <form action="./submit.php" method="POST">
        <hr />
        <div class="form-group">
          <label for="nombre">Nombre Completo: </label><br>
          <input type="text" name="nombre" maxlength="255" required>
          <br /><br />
        </div>
        <div class="form-group">
          <label for="correo">Email: </label><br>
          <input type="email" name="correo" maxlength="35" required>
          <br /><br />
        </div>
        <div class="form-group">
          <label for="nombre">Nombre Usuario: </label><br>
          <input type="text" name="alias" maxlength="255" required>
          <br /><br />
        </div>
        <div class="form-group">
          <label for="pass">Password: </label><br>
          <input type="password" name="contraseña" maxlength="8" required>
        </div>        
        <br /><br />
        <input type="submit" name="submit" class="btn btn-primary" value="Registrarme">
        <input type="reset" name="clear" class="btn btn-primary" value="Borrar">
      </form>
    </div>
  </div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="assets/js/materialize.js"></script>
  <script src="assets/js/init.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $(".dropdown-trigger").dropdown();
    });
  </script>
  <script> function valida(e) {
      tecla = (document.all) ? e.keyCode : e.which;
      if (tecla == 8) {
        return true;
      }

      patron = /[0-9]/;
      tecla_final = String.fromCharCode(tecla);
      return patron.test(tecla_final);
    }
  </script>

</body>

</html>