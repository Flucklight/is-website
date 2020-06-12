<?php
    require "conexion.php";
    mysqli_set_charset($conexion,'utf8');
    session_start();
    $usuario = $_POST['alias'];
    $password = $_POST['contraseña'];
    $query = "SELECT * FROM miembros WHERE alias = '$usuario' AND contraseña = '$password'";
    $result = $conexion -> query($query);
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

      <ul class="right hide-on-med-and-down">
        <li><a href="#"><i class="material-icons">search</i></a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="./index.php">Inicio</a></li>
        <li><a href="./catalog.php">Catalogo</a></li>
        <li><a href="#">Genero</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <?php if (mysqli_num_rows($result) == 1):
      $usuario = $result -> fetch_assoc();
      $_SESSION['nombre']     = $usuario['nombre'];
      $_SESSION['alias']      = $usuario['alias'];
      $_SESSION['correo']     = $usuario['correo'];
      $_SESSION['contraseña'] = $usuario['contraseña'];
      $_SESSION['permiso']    = $usuario['permiso'];
      $_SESSION['id']         = $usuario['id'];?>      
      <?php if ($_SESSION['permiso'] == 1):?>   
        <?php
            $query = "SELECT * FROM peliculas";
            $result = $conexion -> query($query);
        ?>
        <h1 style="text-align:center">Peliculas Registradas</h1>
        <table style="width:100%; border:2px">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Categoria</th>
                    <th>Direccion</th>
                    <th>Duracion</th>
                    <th>Idioma</th>
                    <th>Fecha de Estreno</th>
                </tr>
            </thead>
            <?php if (mysqli_num_rows($result) > 0):?>
                <?php while($row = mysqli_fetch_assoc($result)):?>
                    <tr>
                        <td><?php echo $row['titulo']; ?></td>
                        <td><?php echo $row['categoria']; ?></td>
                        <td><?php echo $row['director']; ?></td>
                        <td><?php echo $row['duracion']; ?></td>
                        <td><?php echo $row['idioma']; ?></td>
                        <td><?php echo $row['fecha_estreno']; ?></td>
                    </tr>
                <?php endwhile?>
            <?php else:
                echo 'No hay peliculas registradas';
            endif?>
        </table>
        <br><br>
        <a style="right:inherit" class="waves-effect waves-light btn" href="./">Agregar Pelicula</a>
        <a style="right:inherit" class="waves-effect waves-light btn" href="./session_destroy.php">Salir</a>
      <?php else:?>
        <?php
            $query = "SELECT * FROM peliculas";
            $result = $conexion -> query($query);
        ?>
        <h1 style="text-align:center">Peliculas Registradas</h1>
        <table style="width:100%; border:2px">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Categoria</th>
                    <th>Direccion</th>
                    <th>Duracion</th>
                    <th>Idioma</th>
                    <th>Fecha de Estreno</th>
                    <th>Identificador</th>
                </tr>
            </thead>
            <?php if (mysqli_num_rows($result) > 0):?>
                <?php while($row = mysqli_fetch_assoc($result)):?>
                    <tr>
                        <td><?php echo $row['titulo']; ?></td>
                        <td><?php echo $row['categoria']; ?></td>
                        <td><?php echo $row['director']; ?></td>
                        <td><?php echo $row['duracion']; ?></td>
                        <td><?php echo $row['idioma']; ?></td>
                        <td><?php echo $row['fecha_estreno']; ?></td>
                        <td><?php echo $row['id']; ?></td>
                    </tr>
                <?php endwhile?>
            <?php else:
                echo 'No hay peliculas registradas';
            endif?>
        </table>
        
        <br><br>
        <a style="right:inherit" class="waves-effect waves-light btn" href="./">Agregar Pelicula</a>
        <a style="right:inherit" class="waves-effect waves-light btn" href="./">Actualizar Pelicula</a>
        <a style="right:inherit" class="waves-effect waves-light btn" href="./">Eliminar Pelicula</a>
        <br><br>
        
        <?php
            $query = "SELECT * FROM miembros";
            $result = $conexion -> query($query);
        ?>
        <h1 style="text-align:center">Miembros Registradas</h1>
        <table style="width:100%; border:2px">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Nombre de Usuario</th>
                    <th>Contraseña</th>
                    <th>Nivel de Permiso</th>
                    <th>Identificador</th>
                </tr>
            </thead>
            <?php if (mysqli_num_rows($result) > 0):?>
                <?php while($row = mysqli_fetch_assoc($result)):?>
                    <tr>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['correo']; ?></td>
                        <td><?php echo $row['alias']; ?></td>
                        <td><?php echo $row['contraseña']; ?></td>
                        <td><?php echo $row['permiso']; ?></td>
                        <td><?php echo $row['id']; ?></td>
                    </tr>
                <?php endwhile?>
            <?php endif;?>
        </table>
        <br><br>
        <a style="right:inherit" class="waves-effect waves-light btn" href="./create.php">Agregar Usuario</a>
        <a style="right:inherit" class="waves-effect waves-light btn" href="./update.php">Actualizar Usuario</a>
        <a style="right:inherit" class="waves-effect waves-light btn" href="./delete.php">Eliminar Usuario</a>
        <br><br>
        <a style="right:inherit" class="waves-effect waves-light btn" href="./session_destroy.php">Salir</a>
        <br><br>
      <?php endif?>
    <?php else:?>
      <?php
          echo '<p class="alert>El nombre de usuario o la contraseña son erroneos!>';
          header('Location: ./login.php');
      ?>
    <?php endif;?>

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