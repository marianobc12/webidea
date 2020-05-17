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
    <script src="js/funciones.js"></script>
    <link  rel="icon"   href="img/icon.png" type="image/png" />
    <title>Portfolio - WEBIDEA</title>

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

    <div class="chat animated jello" style="display:none;">
        <div class="row">
            <div class="col-12">
                <button onclick="cerrarChat()" class="float-right btn-cerrar btn"><i class="fas fa-chevron-left fa-lg"></i></button>
            </div>
        </div>
        <div class="row">
            <div class="col usuario-chat">
                <img src="img/logo.png" class="d-block m-auto" height="30" width="100" alt="">
            </div>
        </div>
        <div class="col cont-mensaje">
            <h4 class="text-center mont-200">¡Háblanos ahora!</h4>
            <button class="btn d-block m-auto">Enviar mensaje</button>
        </div>
    </div>
    <a class="boton-contacto shadow" onclick="abrirChat()"  target="_blank"><img width="50" height="50" src="img/whatsapp.png" alt=""></a>
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