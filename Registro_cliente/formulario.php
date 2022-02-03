<!doctype html>
<html lang="en">
  <head>
    <title>Registro de usuario</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body class="bg-secondary">

  <!-- As a link -->
  <nav class="navbar navbar-light bg-dark">
  <div class="container">
    <a class="navbar-brand text-warning fs-3" href="../index.php">Regresar al inicio</a>
      <img src="../Imagenes/Logo final.png" alt="" width="140" height="110">
    </a>
  </div>
</nav>

<div class="card mx-auto border border-secondary" style="width: 50rem;">
  <img src="../Imagenes/contacto_01.jpg" class="card-img-top" alt="...">
  <div class="card-body bg-info">
    <p class="card-text text-center text-light fs-5">Administradores: Yesid Betin-Móvil: 3215627346, Johan Soto-Movil:3024505988, Desarrollador Leonardo Moreno Muñoz-Móvil: 3224842830.</p>
  </div>
</div>

  <!--CONTENEDOR FORMULARIO-->
<div class="container" id="Contacto">
  <div id="titulo-formulario" class="text-center mb-4">
    </br></br>
    <h2 class="text-primary text-dark">Contáctanos</h2>
    <p class="fs-5 text-light">Regístrate para atender tus novedades técnicas, una vez diligenciado el formulario nos 
      contactaremos contigo.</p>
  </div>
  <form method="POST" action="registrar.php">
  <div class="mb-4">
  <input type="text" class="form-control border border-primary" name="txtCedula" placeholder="Cedula" require>
  </div>
  <div class="mb-4">
  <input type="text" class="form-control border border-primary" name="txtNombres" placeholder="Nombres" require>
  </div>
  <div class="mb-4">
  <input type="text" class="form-control border border-primary" name="txtDireccion" placeholder="Direccion" require>
  </div>
  <div class="mb-4">
  <input type="text" class="form-control border border-primary" name="txtTelefono" placeholder="Telefono fijo o movil" require>
  </div>
  <div class="mb-4">
  <input type="email" class="form-control border border-primary" name="txtCorreo" placeholder="Correo electronico" require>
  </div>
  <div class="mb-4">
  <input type="text" class="form-control border border-primary" name="txtProfesion" placeholder="Profesion" require>
  </div>
  <div class="mb-4">
  <textarea class="form-control border border-primary" name="txtAsistencia" placeholder="Escribe tus comentarios y solicitudes o Describe la solicitud que requieres ejemplo mantenimiento de mi pc."rows="3"></textarea>
</div>
  <div class="mb-4">
    <input type="hidden" name="oculto" value="1">
    <button type="button-info" href="" class="btn btn-primary w-100 text-light fs-5">Enviar mensaje</button>
  </div>
  </form>
</div>
  </form>
</div>
  
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>

