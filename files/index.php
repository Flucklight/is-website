<?php
    require "conexion.php";
?>

<!DOCTYPE html>
<html lang="en">

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

  <ul id="dropdown-menu" class="dropdown-content">
    <li><a href="#!">Iniciar Sesion</a></li>
    <li><a href="#!">Registrase</a></li>
  </ul>

  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo center">CRUDa</a>
      <ul class="left hide-on-med-and-down">
        <li><a href="#">Catalogo</a></li>
        <li><a href="#">Genero</a></li>
      </ul>

      <ul class="right hide-on-med-and-down">
        <li><a href="#"><i class="material-icons">search</i></a></li>
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown-menu">Menu<i
              class="material-icons right">arrow_drop_down</i></a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Catalogo</a></li>
        <li><a href="#">Genero</a></li>
        <li><a href="#!">Iniciar Sesion</a></li>
        <li><a href="#!">Registrase</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="parallax-container">
    <div class="parallax"><img src="assets/images/Bad-Boys.jpg"></div>
    <article>
      <header align="center">
        <h2>Bad Boys for Life</h2>
      </header>
      <div>
        <table>
          <tr>
            <th>
              <figure>
                <img width="200" height="300" src="assets/images/Bad-Boys-poster.jpg">
              </figure>
            </th>
            <th>
              <p>Pasaron 17 años para poder ver nuevamente a Marcus Burnett y Mike Lowery en acción.
                Luego del éxito de las dos primeras entregas, esta tercera parte llamada Bad Boys For life emociona a
                todos.
                Marcus Burnett es ahora un inspector de policía, Mike lowery está en una crisis, pero el destino los
                junta
                nuevamente.</p>
            </th>
          </tr>
        </table>
      </div>
    </article>
  </div>

  <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
    <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
    <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
    <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
    <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
  </div>

  <div>
    <table>
      <th>
        <table>
          <tr height="25%">
            <th width="25%">
              <figure>
                <img src="assets/images/Bad-Boys-poster.jpg">
              </figure>
            </th>
            <th width="25%">
              <figure>
                <img src="assets/images/Bad-Boys-poster.jpg">
              </figure>
            </th>
            <th width="25%">
              <figure>
                <img src="assets/images/Bad-Boys-poster.jpg">
              </figure>
            </th>
            <th width="25%">
              <figure>
                <img src="assets/images/Bad-Boys-poster.jpg">
              </figure>
            </th>
          </tr>
          <tr height="25%">
            <th width="25%">
              <figure>
                <img src="assets/images/Bad-Boys-poster.jpg">
              </figure>
            </th>
            <th width="25%">
              <figure>
                <img src="assets/images/Bad-Boys-poster.jpg">
              </figure>
            </th>
            <th width="25%">
              <figure>
                <img src="assets/images/Bad-Boys-poster.jpg">
              </figure>
            </th>
            <th width="25%">
              <figure>
                <img src="assets/images/Bad-Boys-poster.jpg">
              </figure>
            </th>
          </tr>
          <tr height="25%">
            <th width="25%">
              <figure>
                <img src="assets/images/Bad-Boys-poster.jpg">
              </figure>
            </th>
            <th width="25%">
              <figure>
                <img src="assets/images/Bad-Boys-poster.jpg">
              </figure>
            </th>
            <th width="25%">
              <figure>
                <img src="assets/images/Bad-Boys-poster.jpg">
              </figure>
            </th>
            <th width="25%">
              <figure>
                <img src="assets/images/Bad-Boys-poster.jpg">
              </figure>
            </th>
          </tr>
          <tr height="25%">
            <th width="25%">
              <figure>
                <img src="assets/images/Bad-Boys-poster.jpg">
              </figure>
            </th>
            <th width="25%">
              <figure>
                <img src="assets/images/Bad-Boys-poster.jpg">
              </figure>
            </th>
            <th width="25%">
              <figure>
                <img src="assets/images/Bad-Boys-poster.jpg">
              </figure>
            </th>
            <th width="25%">
              <figure>
                <img src="assets/images/Bad-Boys-poster.jpg">
              </figure>
            </th>
          </tr>
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