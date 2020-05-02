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
            <div class="col">dskdksdk</div>
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