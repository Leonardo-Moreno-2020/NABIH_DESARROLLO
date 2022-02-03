<!doctype html>
<html lang="en">
  <head>
    <title>Inicio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="./Imagenes/Logo final.png" alt="120" width="180">
          </a>
          <button class="navbar-toggler" type="button"
           data-toggle="collapse" 
           data-target="navbarSupportedContent"
           aria-controls="navbarSupportedContent"
           aria-expanded="false"
           aria-label="Toogle-navigation">
           
          <span class="navbar-toggler-icon"></span>
          </button>
          <?php $url="http://".$_SERVER['HTTP_HOST']."/Nabih_desarrollo"?>
          <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
            <ul class="navbar-nav">
              <li class="nav-item fs-4">Inicio<a class="nav-link text-info" href="<?php echo $url;?>./index.php">Inicio</a></li>
              <li class="nav-item fs-4">Técnicos<a class="nav-link text-info" href="<?php echo $url;?>./tecnicos.php">Técnicos</a></li>
              <li class="nav-item fs-4">Locales<a class="nav-link text-info" href="<?php echo $url;?>./locales.php">Locales</a></li>
              <li class="nav-item fs-4">Contacto<a class="nav-link text-info" href="#Contacto">Contacto</a></li>
              <li class="nav-item fs-4">Login<a class="nav-link text-warning" href="<?php echo $url;?>/Login/index.php">Login-administrador</a></li>
            </ul>
          </div>
      </div>
    </nav>

