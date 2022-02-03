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
              <li class="nav-item fs-4">Login-administrador<a class="nav-link text-warning" href="<?php echo $url;?>/Login/index.php">Login-administrador</a></li>
            </ul>
          </div>
      </div>
    </nav>
<!--Texto inicio locales-->

<br/>
<section class="w-50 mx-auto text-center pt-5">
<h1 class="p-3 fs-2 border-top border-3">En este apartado encontraras los locales donde los técnicos prestan sus servicios, además de validar información de componentes y demás servicios.<span class="text-primary"> Contacto directo</span></h1>
<p class="p-3 fs-4"><span class="text-primary"> Guía detallada</span> Así mismo encontraras la agenda de contacto de locales y lugar de operación.</p>
</section>

<!--Card con imagenes y descripcion de locales-->

<div class="card mb-7" style="max-width: 1080px; width: auto; margin: auto">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./Imagenes/loc1.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body border border-warning bg-secondary">
        <h5 class="card-title text-center align-cente pt-5 fs-2 text-info">Meditechno S.A.S</h5>
        <p class="card-text text-center align-center fs-5 text-light">Proveedores de soluciones tecnológicas componentes y demás soluciones</p>
        <p class="card-text text-center align-center fs-5 text-light">Representante: Julio Pardo Mendoza Contacto: (60)3203200 Cl 76 No. 16-42 local-201<small class="text-muted"></small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-7" style="max-width: 1080px; width: auto; margin: auto">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./Imagenes/loc2.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body border border-info bg-secondary">
        <h5 class="card-title text-center align-cente pt-5 fs-2 text-info">Multiservicios de tecnología S.A.S</h5>
        <p class="card-text text-center align-center fs-5 text-light">Proveedores de soluciones tecnológicas componentes y demás soluciones</p>
        <p class="card-text text-center align-center fs-5 text-light">Representante: Olga Lucrecia Palacio Murcia Contacto: (60)2508063 Cl 76 No. 15-32 Local-116 <small class="text-muted"></small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-7" style="max-width: 1080px; width: auto; margin: auto">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./Imagenes/locl3.jfif" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body border border-primary bg-secondary">
        <h5 class="card-title text-center align-cente pt-5 fs-2 text-info">Compuservicios S.A.S</h5>
        <p class="card-text text-center align-center fs-5 text-light">Proveedores de soluciones tecnológicas componentes y demás soluciones</p>
        <p class="card-text text-center align-center fs-5 text-light">Representante: Julio Pardo Mendoza Contacto: (60)3201020 Cl 76 No. 20-65 local-203<small class="text-muted"></small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-7" style="max-width: 1080px; width: auto; margin: auto">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./Imagenes/loc4.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body border border-danger bg-secondary">
        <h5 class="card-title text-center align-cente pt-5 fs-2 text-info">Fixtech S.A.S</h5>
        <p class="card-text text-center align-center fs-5 text-light">Proveedores de soluciones tecnológicas componentes y demás soluciones</p>
        <p class="card-text text-center align-center fs-5 text-light">Representante: Julio Pardo Mendoza Contacto: (60)2035060 Cl 76 No. 15-20 local-203 centro de alta tecnología<small class="text-muted"></small></p>
      </div>
    </div>
  </div>
</div>
<!--Servicios de locales-->

<br/>
<section class="w-50 mx-auto text-center pt-5">
<h1 class="p-3 fs-2 border-top border-3">Además de encontrar datos del aliado, conocerás los servicios tecnológicos en componentes y variedad en artículos postventa.<span class="text-primary"> Asesoría tecnológica</span></h1>
<p class="p-3 fs-4"><span class="text-primary"> Últimas generaciones</span> Productos de las marcas lideres en tecnología empresarial y doméstica.</p>
</section>

<!--Guia de componentes-->

<section class="container-fluid">
  <div class="row w-75 mx-auto servicio-fila">
    <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap" > 
      <img src="./Imagenes/gamer1.png" alt="servicios" width="400" height="300">
      <div>
        <h3 class="fs-4 mt-4 px-4 pb-1 text-center text-primary">Equipos</h3>
        <p class="px-4 text-center text-success fs-5">Equipos de última generación, además de presentar la linea completa de equipos para empresas.</p>
      </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
      <img src="./Imagenes/componentes.png" alt="remoto" width="300" height="300">
      <div>
        <h3 class="fs-4 mt-4 px-4 pb-1 text-center text-primary">Componentes</h3>
        <p class="fs-5 px-4 text-center text-success">Componentes especializados de diversas marcas, discos, placas, tarjetas, memorias, gabinetes.</p>
      </div>
    </div>
  </div>
</section>
<section class="container-fluid">
  <div class="row w-75 mx-auto servicio-fila">
    <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap" > 
      <img src="./Imagenes/servidor1.png" alt="servicios" width="400" height="300">
      <div>
        <h3 class="fs-4 mt-4 px-4 pb-1 text-center text-primary">Servidores</h3>
        <p class="fs-5 px-4 text-center text-success">La mejor variedad de servidores que darán respuesta a concordancia de tus necesidades empresariales.</p>
      </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
      <img src="./Imagenes/partes.png" alt="remoto" width="300" height="300">
      <div>
        <h3 class="fs-4 mt-4 px-4 pb-1 text-center text-primary">Partes básicas</h3>
        <p class="fs-5 px-4 text-center text-success">Componentes hardware de variedad y marcas, además de la venta masiva y por unidades.</p>
      </div>
    </div>
  </div>
</section>
<h3 class="fs-2 mt-4 px-4 pb-1 text-center text-primary">Esperamos tu visita ☺</h3>
<!--footer-->
</br></br>
<div class="container-fluid bg-primary">
        <div class="row">
            <div class="col-md">
            <footer class="w-100 d-flex align-items justify-content-center flex-wrap">
            <p class="fs-5 px-3 pt-3 text-light">Prueba educativa de proyecto Nabih, SENA-Análisis y desarrollo de sistemas de información Bogotá 2022</p>
            <div id="iconos-ligth">
            <a href="https://www.facebook.com/leonardo.moreno.779205"><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-whatsapp"></i></a>
            <a href="https://www.instagram.com/winter_soldier2.0/"><i class="bi bi-instagram"></i></a>
        </div>
            </footer> 
        </div>
        </div>
    </div>
<div class="container mt-5">
<div class="row">
<div class="col-md-12">







  
