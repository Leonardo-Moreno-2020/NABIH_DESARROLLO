<!doctype html>
<html lang="en">
  <head>
    <title>Menú de navegación</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--cdn iconos-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  

  </head>
  <body>
  <?php $url="http://".$_SERVER['HTTP_HOST']."/Nabih_desarrollo"?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="nav navbar-nav">
        <a class="nav-item nav-link active text-warning fs-5" href="#">Nabih</a>
        <a class="nav-item nav-link text-info fs-5" href="<?php echo $url;?>/Inicio/Inicio.php">Inicio</a>
        <a class="nav-item nav-link text-warning fs-5" href="<?php echo $url;?>../Registro_cliente/cliente.php">Usuarios-registrados</a>
        <a class="nav-item nav-link text-warning fs-5" href="<?php echo $url;?>/Usuario/usuario.php">Usuarios-asistidos</a>
        <a class="nav-item nav-link text-info fs-5" href="<?php echo $url;?>/Tecnico/tecnico.php">Tecnicos</a>
        <a class="nav-item nav-link text-info fs-5" href="<?php echo $url;?>/Administrador/administrador.php">Administradores</a>
        <a class="nav-item nav-link text-info fs-5" href="<?php echo $url;?>/Asistencia/asistencia.php">Asistencias</a>
        <a class="nav-item nav-link text-info fs-5" href="<?php echo $url;?>/Locales/locales.php">Locales</a>
        <a class="nav-item nav-link text-warning fs-5" href="<?php echo $url;?>">Salir</a>
    </div>
</nav>      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>