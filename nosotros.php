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
    <title>Nosotros - WEBIDEA</title>

    <script>
        new WOW().init();
    </script>
</head>
<body>
    <?php
        include 'menu.php';
    ?>
    <div class="container-fluid cont-nosotros">
        <div class="row">
            <div class="col-8 offset-2 cont-presentacion text-center">
                <h1 class="audiowide titulo mb-4 wow animated fadeInUp">¿Quienes somos?</h1>
                <div class="wow animated fadeIn delay-1s">
                    <h2 class="mont-200 text-white mb-4">Somos un grupo de desarrolladores listos para darte una solución digital, explicanos tu idea y trabajando a la par la hacemos una realidad</h2>
                    <button class="d-block m-auto btn-conocer-mas btn btn-lg">Conocer un poco más</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-5 titulo animated zoomIn mont-200">Forma de trabajo</h1>
            </div>
            <div class="col-md-4 mt-5 mb-5 animated fadeIn slower">
                    <img src="img/idea.png" height="100" width="100" class="d-block m-auto" alt="">
                    <h2 class="text-center mt-4 mont-400">Analisis</h2>
                    <p class="text-center mt-3">Nos encargamos de recolectar toda la información brindada por nuestros clientes, para poder realizar un análisis profundo del problema y encontrar un a solucion efectiva.</p>
            </div>
            <div class="col-md-4 mt-5 mb-5 animated fadeIn slower">
                    <img src="img/desarrollo.png" height="100" width="100" class="d-block m-auto" alt="">
                    <h2 class="text-center mt-4 mont-400">Desarrollo</h2>
                    <p class="text-center mt-3">En esta etapa se empieza el desarrollo de la solución, la cual podra ser visualizada de forma online y se seguirá en contacto en todo momento con el cliente atendiendo sus requerimientos.</p>
            </div>
            <div class="col-md-4 mt-5 mb-5 animated fadeIn slower">
                    <img src="img/finalizar.png" height="100" width="100" class="d-block m-auto" alt="">
                    <h2 class="text-center mt-4 mont-400">Finalización</h2>
                    <p class="text-center mt-3">Se realizará un testeo de la solución desarrollada, para comprobar su correcto funcionamiento para luego finalizar con la entrega.</p>
            </div>
        </div>
    </div>
    <div class="chat">
        <div class="col mt-2 mb-4">
            <button class="float-right btn-cerrar btn"><i class="fas fa-chevron-left fa-lg"></i></button>
        </div>
        <div class="col usuario-chat">
            <img src="img/logo.png" class="d-block m-auto" height="30" width="100" alt="">
        </div>
        <div class="col cont-mensaje">
            <h4 class="text-center mont-200">¡Háblanos ahora!</h4>
            <button class="btn d-block m-auto">Enviar mensaje</button>
        </div>
    </div>
    <a class="boton-contacto shadow" href="https://wa.me/525551532831" target="_blank"><img width="50" height="50" src="img/whatsapp.png" alt=""></a>
    <?php
        include 'pie-pagina.php';
    ?>
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