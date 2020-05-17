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
    <title>Servicios - WEBIDEA</title>
    <script>
        new WOW().init();
    </script>
</head>
<body>
    <?php
        include 'menu.php';
    ?>
    <div class="container-fluid contenedor-servicios">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-5 titulo animated zoomIn">¿Que servicio ofrecemos?</h1>
            </div>
            <div class="col-md-4 offset-md-2 mt-5 mb-5 animated fadeIn slower">
                <h2 class="text-center"><i class="fas fa-globe fa-2x"></i></h2>
                <h2 class="text-center">Desarrollo de páginas web</h2>
                <p class="text-center mt-3">Creamos paginas web dinámicas para tu negocio o emprendimiento ,te permitirá credibilidad y ser visible en los buscadores.</p>
            </div>
            <div class="col-md-4 mt-5 mb-5 animated fadeIn slower">
                <h2 class="text-center"><i class="far fa-window-maximize fa-2x"></i></h2>
                <h2 class="text-center">Desarrollo de software de gestión</h2>
                <p class="text-center mt-3">Creamos sistemas de gestión a medida para manejar las políticas y los procedimientos de un negocio u organización de manera eficaz.</p>
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