<?php
    require "conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Materialize files-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/estilos.css">

    <title>is-website</title>
</head>
<body>


<?php
    session_start();
    $query = "SELECT COUNT(*) as contar from usuarios where nombre_usuario = '$usuario' and password = '$password'";
    $consulta = mysqli_query($conexion,$query);

    $array = mysqli_fetch_array($consulta);
?>

</body>
</html>