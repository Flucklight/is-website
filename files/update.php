<?php
  require "conexion.php";
  mysqli_set_charset($conexion,'utf8');
  session_start();
  $id = $_GET["id"];
  $query;
  $result;
  $pelicula;
  $miembro;
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
    <div class="nav-wrapper container"><a id="logo-container" href="./session_destroy.php" class="brand-logo center">CRUDa</a>
      <ul id="nav-mobile" class="sidenav">
        <li><a href="./index.php">Inicio</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <?php if ($_GET["u"] == "m"):?>
    <?php
      $query = "SELECT * FROM miembros WHERE id = '$id'";
      $result = $conexion -> query($query);
      $miembro = $result -> fetch_assoc();
    ?>
    <div class="row" style="margin-top:50px">
        <div class="col s6 offset-s3">
            <form action="./submit.php?v=um&id=<?php echo $id?>" method="POST">
                <hr />
                <div class="form-group">
                    <label for="nombre">Nombre Completo: </label><br>
                    <input type="text" value="<?php echo $miembro['nombre']?>" name="nombre" maxlength="255" required>
                    <br /><br />
                </div>
                <div class="form-group">
                    <label for="correo">Email: </label><br>
                    <input type="email" value="<?php echo $miembro['correo']?>" name="correo" maxlength="35" required>
                    <br /><br />
                </div>
                <div class="form-group">
                    <label for="alias">Nombre Usuario: </label><br>
                    <input type="text" value="<?php echo $miembro['alias']?>" name="alias" maxlength="255" required>
                    <br /><br />
                </div>
                <div class="form-group">
                    <label for="contraseña">Password: </label><br>
                    <input type="password" value="<?php echo $miembro['contraseña']?>" name="contraseña" maxlength="8" required>
                    <br /><br />
                </div>
                <div class="form-group">
                    <label for="permiso">Nivel de Permiso</label>
                    <select name="permiso" required>
                        <option value="" disabled selected>selecciona un nivel de permiso</option>
                        <option value="1">Miembro</option>
                        <option value="2">Administrador</option>
                    </select>
                    <br /><br />
                </div>
                <input type="submit" name="submit" class="btn btn-primary" value="Actualizar">
                <input type="reset" name="clear" class="btn btn-primary" value="Borrar">
            </form>
            <br><br>
            <a style="right:inherit" class="waves-effect waves-light btn" href="./admin.php">Regresar</a>
        </div>
    </div>
  <?php elseif ($_GET["u"] == "p"):?>
    <?php
      $query = "SELECT * FROM peliculas WHERE id = '$id'";
      $result = $conexion -> query($query);
      $pelicula = $result -> fetch_assoc();
    ?>
    <div class="row" style="margin-top:50px">
        <div class="col s6 offset-s3">
            <form action="./submit.php?v=up&id=<?php echo $id?>" method="POST">
                <hr />
                <div class="form-group">
                    <label for="titulo">Titulod de la Pelicula: </label><br>
                    <input type="text" value="<?php echo $pelicula['titulo']?>" name="titulo" maxlength="255" required>
                    <br /><br />
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <select name="categoria" required>
                        <option value="" disabled selected>selecciona una categoria</option>
                        <option value="Accion">Accion</option>
                        <option value="Horror">Horror</option>
                        <option value="Animada">Animada</option>
                    </select>
                    <br /><br />
                </div>
                <div class="form-group">
                    <label for="director">Directores: </label><br>
                    <input type="text" value="<?php echo $pelicula['director']?>" name="director" maxlength="255" required>
                    <br /><br />
                </div>
                <div class="form-group">
                    <label for="duracion">Duracion: </label><br>
                    <input type="text" value="<?php echo $pelicula['duracion']?>" name="duracion" maxlength="8" required>
                    <br /><br />
                </div>
                <div class="form-group">
                    <label>Idioma</label>
                    <select name="idioma" required>
                        <option value="" disabled selected>selecciona un idioma</option>
                        <option value="Ingles">Ingles</option>
                        <option value="Español">Español</option>
                        <option value="Japones">Japones</option>
                    </select>
                    <br /><br />
                </div>
                <div class="form-group">
                    <label for="resumen">Resumen: </label><br>
                    <input type="text" value="<?php echo $pelicula['resumen']?>" name="resumen" required>
                    <br /><br />
                </div>
                <div class="form-group">
                    <lable for="fecha_estreno">Fecha de Estreno</label><br>
                    <input type="text" value="<?php echo $pelicula['fecha_estreno']?>" class="datepicker" name="fecha_estreno" required>
                </div>
                <input type="submit" name="submit" class="btn btn-primary" value="Actualizar">
                <input type="reset" name="clear" class="btn btn-primary" value="Borrar">
            </form>
            <br><br>
            <a style="right:inherit" class="waves-effect waves-light btn" href="./login.php">Regresar</a>
        </div>
    </div>
  <?php endif;?>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="assets/js/materialize.js"></script>
  <script src="assets/js/init.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $(".dropdown-trigger").dropdown();
      $('select').formSelect();
      $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
      });
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