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
    <title>WEBIDEA - Desarrollo Web</title>

    <script>
        new WOW().init();
    </script>
</head>
<body>
    <?php
        include 'menu.php';
    ?>
    <div class="container-fluid contenedor-inicio">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-5 titulo animated zoomIn">¡WEBIDEA , desarrolla tu página!</h1>
                <h2 class="text-center mb-5 subtitulo animated fadeIn slow">Nos encargamos de hacer soluciones a medidas para cada uno de nuestros clientes.</h2>
                <div class="row">
                    <div class="col-md-4 offset-md-2 animated fadeIn slow">
                        <img class="img-fluid img-desarrollo" src="img/desarrollo-web.png">
                    </div>
                    <div class="col-md-4 contenedor-info animated fadeIn slow">
                        <h2 class="text-center text-white mt-4">¡Empezá ya!</h2>
                        <p class="mt-3 text-white">Si estas empezando un empredimiento o tenes tu negocio, y necesitas una pagina web o un sistema de administración , contactanos para poder hacer un desarrollo a medida.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 contenedor-presupuesto animated fadeIn slow ">
                        <h2 class="text-center text-white mt-5">¡Presupuestá tu web!</h2>
                        <a href="contacto"><button class="btn btn-lg mt-5 mb-5 btn-presupuesto">Contactar <i class="fab fa-telegram-plane fa-lg"></i></button></a>
                    </div>
                   
                </div>
            </div>
        </div>
    </div> 
    <div class="container contenedor-beneficios">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-5 titulo">Te ofrecemos una solución</h1>
                <h2 class="text-center subtitulo">Trabajamos en equipo para darle a nuestros clientes una forma eficiente de solucionar su problema.</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 beneficio mt-5 mb-3 wow animated  fadeIn slow" data-wow-delay="0s">
                    <img class="img-fluid" src="img/responsive.png" alt="">
                    <h1 class="text-center mt-3">Diseño Adaptable</h1>
                    <p class="text-center">Todos nuestros desarrollos son multiplataforma , por lo que podras utilizarlo desde cualquier dispositivo (PC,Notebooks,Tablets,Celulares)</p>
            </div>
            <div class="col-md-4 beneficio mt-5 mb-3 wow animated fadeIn  slow" data-wow-delay="0.7s">
                    <img class="img-fluid" src="img/tecnologias.png" alt="">
                    <h1 class="text-center mt-3">Desarrollo</h1>
                    <p class="text-center">Utilizamos todo tipo de tecnologias , HTML5 , CSS3 , Javascript , PHP , Bootstrap , JQuery , MySQL entre otras...</p>
            </div>
            <div class="col-md-4 beneficio mt-5 mb-3 wow animated fadeIn   slow" data-wow-delay="1.4s">
                    <img class="img-fluid" src="img/servidor.png" alt="">
                    <h1 class="text-center mt-3">Alojamiento</h1>
                    <p class="text-center">Tu página estará segura y online las 24hs , poseemos un hosting confiable que nos ofrece garantizar el servicio de alojamiento web.</p>
            </div>
        </div>
    </div>
    <div class="container contenedor-trabajos">
        <div class="row mb-5">
            <div class="col-md-12">
                <h1 class="text-center mt-5 titulo">Algunos de nuestros trabajos</h1>
            </div>
        </div>
        <div class="row trabajos mb-5">
            <div class="col-lg-6 wow zoomIn " data-wow-duration="1.5s" onclick="location.href='img/trabajo1.png'">
                <img src="img/trabajo1.png" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="col-lg-6 wow zoomIn " data-wow-duration="1.5s" data-wow-delay="0.5s" onclick="location.href='img/trabajo2.png'">
                <img src="img/trabajo2.png" class="img-fluid img-thumbnail" alt="">
            </div>
            
        </div>
        <div class="row trabajos">
            <div class="col-lg-6 wow zoomIn " data-wow-duration="1.5s" data-wow-delay="1s"   onclick="location.href='img/trabajo3.png'">
                <img src="img/trabajo3.png" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="col-lg-6 wow zoomIn " data-wow-duration="1.5s" data-wow-delay="1.5s"  onclick="location.href='img/trabajo4.png'">
                <img src="img/trabajo4.png" class="img-fluid img-thumbnail" alt="">
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
</body>
</html>