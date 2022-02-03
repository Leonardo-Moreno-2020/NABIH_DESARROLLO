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
  <body class="bg-muted">
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
              <li class="nav-item fs-4">Login-Técnico<a class="nav-link text-warning" href="<?php echo $url;?>./Login-tecnico/index.php">Login-Técnico</a></li>
            </ul>
          </div>
      </div>
    </nav>

<!----------------------Inicio de la pagina tecnico-->
<br/>
<section class="w-50 mx-auto text-center pt-5">
<h1 class="p-3 fs-2 border-top border-3">Nuestro técnico se comunicará una vez dejes los datos de contacto en el inicio de la página, de esta manera es viable prestar soporte remoto o presencial a tu ubicación de la ciudad. <span class="text-primary"> Asesoría técnica especializada.</span></h1>
<p class="p-3 fs-4"><span class="text-primary"> Cumplimiento.</span> Una vez realizada la indagación a tus requerimientos agendamos la visita al instante, obviamente para prestar una atención rápida y de respuesta eficiente, así mismo podrás visualizar en este apartado el contacto de los técnicos los cuales pueden prestar atención a tus necesidades.</p>
</section>

<!--card-tecnicos-->

<div class="row w-50 mx-auto servicio-fila1">
  <div class="col-md-4 mx-auto">
  <div class="card text-center mb-4 col-lg-5 col-md-12 col-sm-12 d-flex justify-content-start my-5" style="width: 17rem;">
  <img src="./Imagenes/1P.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-primary">Bernardo Florez Carreño</h5>
    <p class="card-text">Móvil: 3102200020 Correo electrónico: magno1@gmail.com Técnico de sistemas lo encuentras en Multiservicios de tecnología S.A.S</p>
  </div>
</div>
<!----->
  </div>
  <div class="col-md-4 mx-auto">
  <div class="card text-center mb-4 col-lg-5 col-md-12 col-sm-12 d-flex justify-content-start my-5" style="width: 17rem;">
  <img src="./Imagenes/2P.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-primary">	Norberto Flórez Suarez</h5>
    <p class="card-text">Móvil: 3102005563 Correo electrónico: nrb20@myspace.com Técnico de sistemas lo encuentras en Fixtech S.A.S.</p>
  </div>
</div>
  </div>
</div>
<!----->
<div class="row w-50 mx-auto servicio-fila1">
  <div class="col-md-4 mx-auto">
  <div class="card text-center mb-4 col-lg-5 col-md-12 col-sm-12 d-flex justify-content-start my-5"  style="width: 17rem;">
  <img src="./Imagenes/3P.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-primary">Alfonso Mejia Lopez</h5>
    <p class="card-text">Móvil: 3205420025 Correo electrónico: vl_120@outlook.es Técnico de sistemas lo encuentras en Compuservicios S.A.S</p>
  </div>
</div>
<!----->
  </div>
  <div class="col-md-4 mx-auto">
  <div class="card text-center col-lg-5 col-md-12 col-sm-12 d-flex justify-content-start my-5 mb-4" style="width: 17rem;">
  <img src="./Imagenes/4P.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-primary">Fabian Montenegro</h5>
    <p class="card-text">Móvil: 3205206398 Correo electrónico: fabi02@myspace.com Técnico de sistemas lo encuentras en Meditechno S.A.S</p>
  </div>
</div>
  </div>
</div>
<!--Lista de actividades-->

<ul class="list-group col-md-12">
<h1 class="p-4 fs-2 border-top border-5 text-center text-success">Detalle de los servicios los cuales el técnico está en condición de prestar ☺.<span class="text-primary"></span></h1>
  <li class="list-group-item-light text-center"></li>

  <li class="list-group-item text-center border border-primary list-group-item-primary fs-5">Todos los técnicos aliados están en la condición de prestar al publico el servicio de soporte técnico general, mantenimiento, configuración, ensamble, reparación y redes para cualquier requerimiento que pueda solicitar el usuario directo.</li>
  <li class="list-group-item text-center border border-primary list-group-item-primary fs-5">Soporte técnico en linea, es decir por medio de herramientas de conexión remoto</li>
  <li class="list-group-item text-center border border-primary list-group-item-primary fs-5">Asesoría para adquisición de componentes y diagnostico dependiendo la situación</li>
  <li class="list-group-item text-center border border-primary list-group-item-primary fs-5">Monitoreo de actividades, según el requerimiento asistido que el usuario haya solicitado previamente</li>
  <li class="list-group-item text-center border border-info list-group-item-info fs-5">Recomendaciones de uso para el usuario y que sus dispositivos presenten un rango de vida más amplio</li>
  <li class="list-group-item text-center border border-info list-group-item-info fs-5">Implementación de software con licencia según necesidades del usuario</li>
  <li class="list-group-item text-center border border-info list-group-item-info fs-5">Comunicación con el usuario para que determine sus nuevas asistencias</li>
</ul>
</br></br>
<div class="card mx-auto boder border-white bg-info" style="width: 18rem;">
  <img src="./Imagenes/clndar.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text text-center text-light fs-5">Nuestras visitas van a disponibilidad de tiempo del usuario.</p>
  </div>
</div>

<section class="w-50 mx-auto text-center pt-5">
<h1 class="p-3 fs-2 border-top border-3 text-info">Contamos con tu tiempo, es muy importante que confirmes en la llamada el horario de conveniencia para recibir la asistencia y de esta manera cuentes con el tiempo adecuado para la revisión correspondiente. <span class="text-primary"> La confirmación es telefónica.</span></h1>
<p class="p-3 fs-4"><span class="text-primary fs-3"> Agenda.</span> Es importante que tengas en cuenta que contamos con disponibilidad técnica en agendamiento.</p>
</section>

</br></br></br>

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



