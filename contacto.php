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
    <?php
      include 'menu.php';
    ?>
    <div class="container-fluid contenedor-contacto">
      <div class="row">
        <div class="col-8 animated fadeIn slower">
          <h1 class="mt-5 titulo">¿Te interesa nuestros servicios?</h1>
          <h2 class="mont-200 subtitulo">Consultános y te enviamos un presupuesto</h2>
        </div>
        <div class="col-md-8 animated fadeInLeft">
          <form  method="POST" id="form-cont" class="form-contacto" onsubmit="return enviar()">
            <div class="row">
              <div class="col">
                <label for="nomApe">Nombre</label>
                <input type="text" class="form-control" name="nomApe" id="nomApe" aria-label="Username" aria-describedby="basic-addon1" required="">
              </div>
              <div class="col">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" name="email" id="email" aria-label="Username" aria-describedby="basic-addon1" required="">
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-6">
              <label for="telefono">Teléfono</label>
              <input type="text" class="form-control" name="telefono" id="telefono"  aria-label="Username" aria-describedby="basic-addon1" required="">
              </div>
            </div>
            <div class="input-group mb-3 mt-4">
              <textarea name="consulta" placeholder="Escribe tu mensaje"  class="form-control" id="consulta" cols="30" rows="10" required=""></textarea>
            </div>
            <button type="submit" class="btn btn-lg btn-enviar">Enviar <i class="fab fa-telegram-plane"></i></button>
            <img src="img/loading.gif" style="display:none;" height="50" alt="">
          </form>
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
          <h1 class="text-center animated jello infinite"><i class="fas fa-check fa-2x"></i></h1>
          <h4 class="text-center mont-400">¡Tu consulta fue enviada!</h4>
          <p class="text-center mont-200">Responderemos tu consulta lo antes posible.</p>
          <img src="img/logo.png" class="d-block m-auto" height="30" alt="">
        </div>
      </div>
    </div>
  </div>

  <script>
     $(".navbar").css('background-color', 'white');
     $(".navbar").css('transition', '1s');
     $(".nav-link").css("color", "gray");
     $("#logoimg").attr("src", "img/logo.png");
     $("#homeimg").attr("src", "img/home-orange.png");
     $("#nosotrosimg").attr("src", "img/nosotros-orange.png");
     $("#serviciosimg").attr("src", "img/servicio-orange.png");
     $("#portfolioimg").attr("src", "img/portfolio-orange.png");
     $("#contactoimg").attr("src", "img/contacto-orange.png");
     $('.navbar').css('box-shadow', '0px 2px 5px 0px rgba(0,0,0,0.47)');
  </script>
</body>
</html>