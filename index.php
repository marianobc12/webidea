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
    <title>Inicio - WEBIDEA</title>

    <script>
        new WOW().init();
    </script>
</head>
<body>
    <div class="container-fluid contenedor-inicio">
        <div class="row">
        <?php
            include 'menu.php';
        ?>
        </div>
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-5 titulo animated zoomIn">¡WEBIDEA , desarrolla tu página!</h1>
                <h2 class="text-center mb-5 subtitulo animated fadeIn slow delay-2s mont-200">Nos encargamos de hacer soluciones a medidas para cada uno de nuestros clientes.</h2>
                <div class="row">
                    <div class="col-md-4 offset-md-2 animated fadeInLeft">
                        <img class="img-fluid img-desarrollo" style="filter: drop-shadow(0px 0px 2px black);" src="img/desarrollo-web.png">
                    </div>
                    <div class="col-md-4 contenedor-info animated fadeInRight">
                        <h2 class="text-center text-white mt-4">¡Empezá ya!</h2>
                        <p class="mt-3 text-white mont-200">Si estas empezando un empredimiento o tenes tu negocio, y necesitas una pagina web o un sistema de administración , contactanos para poder hacer un desarrollo a medida.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 contenedor-presupuesto animated fadeInUp delay-1s ">
                        <h2 class="text-center text-white mt-5 ruso">¡Presupuestá tu web!</h2>
                        <a href="contacto"><button class="btn btn-lg mt-3 mb-5 btn-presupuesto">Contactar <i class="fab fa-telegram-plane fa-lg"></i></button></a>
                    </div>
                   
                </div>
            </div>
        </div>
    </div> 
    <div class="container contenedor-beneficios">
        <div class="row">
            <div class="col-md-12 wow animated fadeInUp slow">
                <h1 class="text-center mt-5 titulo">Te ofrecemos una solución</h1>
                <h2 class="text-center subtitulo mont-200">Trabajamos en equipo para darle a nuestros clientes una forma eficiente de solucionar su problema.</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 beneficio mt-5 mb-3 wow animated  fadeIn slow" data-wow-delay="0s">
                    <img class="img-fluid" src="img/responsive.png" alt="">
                    <h1 class="text-center mt-3 mont-200">Diseño Adaptable</h1>
                    <p class="text-center mont-300">Todos nuestros desarrollos son multiplataforma , por lo que podras utilizarlo desde cualquier dispositivo (PC,Notebooks,Tablets,Celulares)</p>
            </div>
            <div class="col-md-4 beneficio mt-5 mb-3 wow animated fadeIn  slow" data-wow-delay="0.7s">
                    <img class="img-fluid" src="img/tecnologias.png" alt="">
                    <h1 class="text-center mt-3 mont-200">Desarrollo</h1>
                    <p class="text-center mont-300">Utilizamos todo tipo de tecnologias , HTML5 , CSS3 , Javascript , PHP , Bootstrap , JQuery , MySQL entre otras...</p>
            </div>
            <div class="col-md-4 beneficio mt-5 mb-3 wow animated fadeIn   slow" data-wow-delay="1.4s">
                    <img class="img-fluid" src="img/servidor.png" alt="">
                    <h1 class="text-center mt-3 mont-200">Alojamiento</h1>
                    <p class="text-center mont-300">Tu página estará segura y online las 24hs , poseemos un hosting confiable que nos ofrece garantizar el servicio de alojamiento web.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid contenedor-trabajos">
        <div class="row mb-5">
            <div class="col-md-12 wow animated fadeInUp slow">
                <h1 class="text-center mt-2 mb-4 titulo">Algunos de nuestros trabajos</h1>
            </div>
        </div>
        <div class="row trabajos" style="margin:0px;">
            <div class="col-lg-4 wow zoomIn trabajo" data-wow-duration="1.5s" onclick="location.href='img/trabajo1.png'">
                <img src="img/trabajo1.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-4 wow zoomIn trabajo" data-wow-duration="1.5s" data-wow-delay="0.5s" onclick="location.href='img/trabajo2.png'">
                <img src="img/trabajo2.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-4 wow zoomIn trabajo" data-wow-duration="1.5s" data-wow-delay="1s"   onclick="location.href='img/trabajo3.png'">
                <img src="img/trabajo3.png" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row trabajos" style="margin:0px;">
            <div class="col-lg-4 wow zoomIn " data-wow-duration="1.5s" onclick="location.href='img/trabajo1.png'">
                <img src="img/trabajo1.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-4 wow zoomIn trabajo" data-wow-duration="1.5s" data-wow-delay="0.5s" onclick="location.href='img/trabajo2.png'">
                <img src="img/trabajo2.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-4 wow zoomIn trabajo" data-wow-duration="1.5s" data-wow-delay="1s"   onclick="location.href='img/trabajo3.png'">
                <img src="img/trabajo3.png" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row trabajos" style="margin:0px;">
            <div class="col-lg-4 wow zoomIn trabajo" data-wow-duration="1.5s" onclick="location.href='img/trabajo1.png'">
                <img src="img/trabajo1.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-4 wow zoomIn trabajo" data-wow-duration="1.5s" data-wow-delay="0.5s" onclick="location.href='img/trabajo2.png'">
                <img src="img/trabajo2.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-4 wow zoomIn trabajo" data-wow-duration="1.5s" data-wow-delay="1s"   onclick="location.href='img/trabajo3.png'">
                <img src="img/trabajo3.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <div class="container-fluid cont-opiniones">
        <h1 class="text-center titulo">Cada vez más personas confian en nosotros</h1>
        <div class="row mb-5">
            <div class="col-md-4">
    		    <div class="card profile-card-1 wow animated flipInX">
                    <div class="card-content">
                        <img src="img/jose.jpg"  alt="profile-image" class="profile"/>
                        <h2 class="mt-2">GONZALEZ JOSÉ<small><img src="img/comilla.png" height="30" alt=""> Estoy muy conforme con su trabajo, ellos me crearon mi tienda online para mi verdulería, la cual me permitió digitalizarme y obtener muchas más ingresos. <img src="img/comilla.png" height="30" alt=""></small></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
    		    <div class="card profile-card-1 wow animated flipInY" data-wow-delay="1s">
                    <div class="card-content">
                        <img src="http://conexion-sol-tierra.com/img/fotoperfil.jpg"  alt="profile-image" class="profile"/>
                        <h2 class="mt-2">GIANIBELLI JULIO<small><img src="img/comilla.png" height="30" alt=""> Contento , me desarrollaron una apliacion web donde puedo compartir mis trabajos de investigacón y otros proyectos , con mis alumnos y todo el mundo. <img src="img/comilla.png" height="30" alt=""></small></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
    		    <div class="card profile-card-1 wow animated flipInX" data-wow-delay="2s">
                    <div class="card-content">
                        <img src="https://scontent.faep8-1.fna.fbcdn.net/v/t31.0-8/p720x720/741110_103233436519390_1062286652_o.jpg?_nc_cat=110&_nc_sid=85a577&_nc_ohc=2P6k5qGgVpsAX9xBGN3&_nc_ht=scontent.faep8-1.fna&_nc_tp=6&oh=275fbc3286ef9846d27db34b68a67672&oe=5ECF29E2"  alt="profile-image" class="profile"/>
                        <h2 class="mt-2">GARCÍA RODRIGO<small><img src="img/comilla.png" height="30" alt=""> Han desarrollado mi página web , en la cual pude compartir mis guias y como podes lograr dinero desde casa , haciendo trading <img src="img/comilla.png" height="30" alt=""></small></h2>
                    </div>
                </div>
    		</div>
        </div>
    </div>
    <?php
        include 'pie-pagina.php';
    ?>

    <script>
       $(document).ready(function(){       
        var scroll_start = 0;
        var startchange = $('.titulo');
        var offset = startchange.offset();
            if (startchange.length){
        $(document).scroll(function() { 
            scroll_start = $(this).scrollTop();
            if(scroll_start > offset.top-50) {
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
            } else {
                $('.navbar').css('background-color', 'transparent');
                $("#logoimg").attr("src", "img/logo-white.png");
                $(".nav-link").css("color", "white");
                $("#homeimg").attr("src", "img/home-white.png");
                $("#nosotrosimg").attr("src", "img/nosotros-white.png");
                $("#serviciosimg").attr("src", "img/servicio-white.png");
                $("#portfolioimg").attr("src", "img/portfolio-white.png");
                $("#contactoimg").attr("src", "img/contacto-white.png");
                $('.navbar').css('box-shadow', 'none');
            }
        });
            }
        });
    </script>
</body>
</html>