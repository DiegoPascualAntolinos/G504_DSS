<html>
	<head>
	    <title>Mi proyecto de Web</title>
	</head>
	<body>
		<h1>¡Hola! Esto es lo que falta por hacer:</h1>
        <br>
        - Cambiar los colores del header <br>
		- Poner los apartados que se deseen en el header <br>
		- Hacer que el footer funcione <br>
		- Pagina de publicacion de viajes
		<a href = "https://mdbootstrap.com/css/colors/"> - Colores para el header </a> <br>
		<a href = "https://www.jquery-az.com/wwh/demo.php?ex=28.0_1"> - Estructura de las partes del header </a> <br>
		<a href = "https://mobirise.com/bootstrap-4-theme/footer-template.html"> - Un posible footer </a> <br>
		<a href = "https://mdbootstrap.com/components/bootstrap-footer/ "> - Otro posible footer </a> <br>
		<a href = "https://maxoffsky.com/code-blog/integrating-bootstrap-htmlcss-framework-web-applications/"> - Link útil para formularios de registro </a> <br>
	</body>
</html>

@extends('layout.mainlayout')
<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


@section('content')

<div class="container container-galeria">
    <div id="main_area">
        <!-- Slider -->
        <div class="row">
            <div class="col-sm-6" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <li class="col-sm-3">
                        <a id="carousel-selector-0">
                            <img class="galery" src="/images/galeriazero.jpeg">
                        </a>
                    </li>

                    <li class="col-sm-3">
                        <a id="carousel-selector-1"><img class="galery" src="/images/galeria1.jpeg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a id="carousel-selector-2"><img class="galery" src="/images/galeria2.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a  id="carousel-selector-3"><img class="galery" src="/images/galeria3.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a id="carousel-selector-4"><img class="galery" src="/images/galeria4.jpeg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a id="carousel-selector-5"><img class="galery" src="/images/galeria5.jpg"></a>
                    </li>
                    <li class="col-sm-3">
                        <a id="carousel-selector-6"><img class="galery" src="/images/galeria6.jpeg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a id="carousel-selector-7"><img class="galery" src="/images/galeria7.jpeg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a id="carousel-selector-8"><img class="galery" src="/images/galeria8.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a id="carousel-selector-9"><img class="galery" src="/images/galeria9.jpeg"></a>
                    </li>
                    <li class="col-sm-3">
                        <a id="carousel-selector-10"><img class="galery" src="/images/galeria10.jpeg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a id="carousel-selector-11"><img class="galery" src="/images/galeria11.jpg"></a>
                    </li>

        
                </ul>
            </div>
            <div class="col-sm-6">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                        <img src="/images/galeriazero.jpeg"></div>

                                    <div class="item" data-slide-number="1">
                                        <img src="/images/galeria1.jpeg"></div>

                                    <div class="item" data-slide-number="2">
                                        <img  src="/images/galeria2.jpg"></div>

                                    <div class="item" data-slide-number="3">
                                        <img  src="/images/galeria3.jpg"></div>

                                    <div class="item" data-slide-number="4">
                                        <img  src="/images/galeria4.jpeg"></div>

                                    <div class="item" data-slide-number="5">
                                        <img  src="/images/galeria5.jpg"></div>
                                    
                                    <div class="item" data-slide-number="6">
                                        <img  src="/images/galeria6.jpeg"></div>
                                    
                                    <div class="item" data-slide-number="7">
                                        <img src="/images/galeria7.jpeg"></div>
                                    
                                    <div class="item" data-slide-number="8">
                                        <img  src="/images/galeria8.jpg"></div>
                                    
                                    <div class="item" data-slide-number="9">
                                        <img  src="/images/galeria9.jpeg"></div>
                                    
                                    <div class="item" data-slide-number="10">
                                        <img  src="/images/galeria10.jpeg"></div>
                                    
                                    <div class="item" data-slide-number="11">
                                        <img  src="/images/galeria11.jpg"></div>
                                    
               
                                </div>
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Slider-->
        </div>

    </div>
</div>

<script>
jQuery(document).ready(function($) {

    $('#myCarousel').carousel({
            interval: 5000
    });

    //Handles the carousel thumbnails
    $('[id^=carousel-selector-]').click(function () {
    var id_selector = $(this).attr("id");
    try {
        var id = /-(\d+)$/.exec(id_selector)[1];
        console.log(id_selector, id);
        jQuery('#myCarousel').carousel(parseInt(id));
    } catch (e) {
        console.log('Regex failed!', e);
    }
});
    // When the carousel slides, auto update the text
    $('#myCarousel').on('slid.bs.carousel', function (e) {
                var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-'+id).html());
    });
});
</script>


@endsection