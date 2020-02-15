<?php
    include 'php/funciones.php';
?>





<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/all.css"> <!-- ICONOS FONT-AWESOME -->
    <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="css/estilo.css"> <!-- ESTILO CSS DE LA WEB -->
    <link rel="stylesheet" href="css/animate.css"> <!-- ANIMACIONES -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script> <!-- ANIMACONES DE SCROLL -->
    <script src="ajax/enviar.js"></script> <!-- ENVIAR EMAIL CONTACTO -->
    <title>Contacto - Desarrollo Web</title>

    <script>
        new WOW().init();
    </script>
</head>
<body>
    <nav class="navbar  navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
          <img class="logo" src="img/logo.png" width="150" height="40" class="d-inline-block align-top" alt="WEBIDEA">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index"><i class="fas fa-home fa-lg"></i> Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="servicios"><i class="fas fa-laptop fa-lg"></i> Servicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto"><i class="fab fa-telegram-plane fa-lg"></i> Contacto</a>
              </li>
            </ul>
        </div>
    </nav>
    <div class="container contenedor-contacto">
      <div class="row">
        <div class="col-12 animated fadeIn slower">
          <h1 class="text-center mt-5">¿Te interesa nuestros servicios?</h1>
          <h2 class="text-center">Envianos tu consulta <i class="fas fa-thumbs-up"></i></h2>
        </div>
        <div class="col-md-6 animated fadeInLeft">
          <h3 class="mt-5"><i class="fas fa-signature"></i> Escribe tu consulta</h3>
          <form  method="POST" id="form-cont" class="form-contacto" onsubmit="return enviar()">
            <div class="input-group mb-3 mt-4">
              <input type="text" class="form-control" name="nomApe" placeholder="Ingrese Nombre y Apellido" aria-label="Username" aria-describedby="basic-addon1" required="">
            </div>
            <div class="input-group mb-3 mt-4">
              <input type="email" class="form-control" name="email" placeholder="Ingrese Email" aria-label="Username" aria-describedby="basic-addon1" required="">
            </div>
            <div class="input-group mb-3 mt-4">
              <input type="text" class="form-control" name="telefono" placeholder="Ingrese Teléfono" aria-label="Username" aria-describedby="basic-addon1" required="">
            </div>
            <div class="input-group mb-3 mt-4">
              <textarea name="consulta" placeholder="¿Cual es tu consulta?" class="form-control" id="consulta" cols="30" rows="10" required=""></textarea>
            </div>
            <button type="submit" class="btn btn-lg btn-enviar">Enviar <i class="fab fa-telegram-plane"></i></button>
          </form>
        </div>
        <div class="col-md-6 animated fadeInUp">
          <h3 class="mt-5 mb-5"><i class="fas fa-info-circle"></i> Información de contacto</h3>
          <h6 class="mt-4"><i class="fas fa-at fa-lg"></i> E-mail: webidealp@gmail.com</h6>
        </div>
      </div>
    </div>
    <footer class="pie-pagina">
        <div class="container">
            <div class="row">
              <div class="col-md-12 redes text-center wow animated fadeIn slow">
                    <h1 class="text-white">¡Seguinos  y demostranos tu apoyo!</h1>
                    <a href="https://www.facebook.com/webideainfo/" target="_blank" title="Ir a nuestro Facebook" class="ml-2"><i class="fab fa-facebook fa-3x"></i></a>
                    <a href="https://www.instagram.com/webideainfo/" target="_blank" title="Ir a nuestro Instragram" class="ml-2"><i class="fab fa-instagram fa-3x"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center mt-5 text-white wow animated fadeIn slow">© Copyright <?php echo getYear(); ?> WEBIDEA -
                    Diseño y Desarrollo Web La Plata - Buenos Aires - Argentina.</p>
                </div>
            </div>
        </div>
    </footer>


    <div class="modal fade modal-envio" id="aviso-contacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" title="Cerrar" data-dismiss="modal" aria-label="Close">
            <i class="fas fa-times fa-lg"></i>
          </button>
        </div>
        <div class="modal-body">
          <h1 class="text-center"><i class="fas fa-check fa-2x"></i></h1>
          <h4 class="text-center">¡Tu consulta fue enviada!</h4>
          <p class="text-center">Responderemos tu consulta lo antes posible.</p>
          <p class="text-right">Saludos Atte: WEBIDEA</p>
        </div>
      </div>
    </div>
  </div>

</body>
</html>