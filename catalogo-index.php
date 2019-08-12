<?php
 $nombre = $_GET['numeroDeCategoria'];
if($nombre == '1'){
    $nombre='categorias/productos-ventiladoresMecanicosG.html';
}

echo '
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords"
        content="categorías ventiladores mecánicos ventiladores de cuidados intensivos y de traslado alta tecnología monitoreo de pacientes seguridad paciente quirófano resultados de operación neonatología productos material quirúrgico y consumibles medicina interna y general prevenir y diagnosticar tomas murales necesidades del hospital CEYE esterilidad en quirófanos">

    <meta name="description"
        content="Grupo Biomédico Azteca cuenta con productos de las sigs. categorías: ventiladores mecánicos, neonatología, monitoreo de pacientes, medicina interna y general...">

    <!--Meta de open graph-->
    <meta property="og:title" content="Catálogo | Grupo Biomédico Azteca">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.grupobiomedicoazteca.com.mx/catalogo.html">
    <meta property="og:image" content="https://www.grupobiomedicoazteca.com.mx/img-GBA/logogba-s.png">

    <title>Catálogo | Grupo Biomédico Azteca</title>
    <link rel="shortcut icon" href="img-GBA/GBALOGO.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />

    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">

    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">

    <!-- Iconfont CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css" media="all" />
    <!--iconos-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Main style CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="assets/img/favcion1.png" /><!-- ICONO *****************************-->
    <!--iconos de fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body data-spy="scroll" data-target=".header" data-offset="50">
    <!-- Page loader -->
    <div id="preloader"></div>

    <!-- header section start -->
    <div class="head">

    </div>
    <!-- header section end -->

    <!--video de encabezado-->
    <video autoplay muted loop black id="myVideo-catalogo">
        <source src="img-GBA/Grupo-Biomedic-Azteca-Body.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <!--fin de video de encabezado-->

    <!-- imagen de encabezado area start -->
    <section class="hero-area-catalogo" >
        <div class="header-RC d-flex align-items-center bd-highlight">
            <div class="container text-white  p-2 bd-highlight areaEncabezado">
                <h5 class="text-white">
                    <a href="index.html" class="text-white">
                        Inicio
                    </a>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                        Catálogo
                </h5>
            </div>
        </div>
    </section><!-- imagen de encabezado area end -->

    <!-- etiqueta de encabezado area start-->
    <div class="header-R d-flex align-items-center bd-highlight mostrarEncabezado" style="margin-top: -620px;">
        <div class="container text-white  p-2 bd-highlight areaEncabezado">
            <h5 class="text-white">
                <a href="index.html" class="text-white">
                    Inicio
                </a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                Catálogo
            </h5>
        </div>
    </div> 
    <!-- etiqueta de encabezado area end -->

    <!--inicio del cuerpo de catalogos-->
    <div id="productos" class="products" style="padding-bottom: 0px;"> 
    ';
    
    echo file_get_contents($nombre);

    echo '
    </div>
    <!--fin del cuerpo de catalogos-->

    <!--inicio de los productos del catalogo-->
    <div id="productosIDS">
      
        
    </div>
    <!--fin de los productos del catalogo-->

    <!-- footer section start -->
    <div class="foot">

    </div>
    <!-- footer section end -->

    <!--icono de scroll-->
    <a href="#" class="scrollToTop">
        <i class="icofont icofont-arrow-up"></i>
    </a>
    <!--fin de icono de scroll-->

    <!-- jquery main JS -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Slick nav JS -->
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <!-- Slick JS -->
    <script src="assets/js/slick.min.js"></script>
    <!-- owl carousel JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Popup JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter JS -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Counterup waypoints JS -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- YTPlayer JS -->
    <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
    <!-- jQuery Easing JS -->
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <!-- Custom map JS -->
    <script src="assets/js/custom-map.js"></script>
    <!-- WOW JS -->
    <script src="assets/js/wow-1.3.0.min.js"></script>
    <!-- Switcher JS -->
    <script src="assets/js/switcher.js"></script>
    <!-- main JS -->
    <script src="assets/js/main.js"></script>


    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap-4.1.2/popper.js"></script>
    <script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/progressbar/progressbar.min.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/custom.js"></script>

    <script>
        $(".foot").load("ajaxFooter.php");
        $(".head").load("ajaxHeader.php");
    </script>

    <script>
        $("a[id^=productos-]").click(function (e) {
            e.preventDefault();//para quitar lo del # del href
            idDiv = $(this).attr("id");//toma el id del div
            console.log(idDiv);

            var catalogos = document.getElementById("productos");// cambiar a display none en style
            catalogos.style.display = "none";

            $("#productosIDS").load("categorias/" + idDiv + ".php");
        });
    </script>

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "url": "https://grupobiomedicoazteca.com.mx/",
          "logo": "https://www.grupobiomedicoazteca.com.mx/img-GBA/logogba-s.png",
          "contactPoint": [{
            "@type": "ContactPoint",
            "telephone": "+44-5523370134",
            "contactType": "customer service"
          }]
        }
    </script>
</body>

</html>


';

?>