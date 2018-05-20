@extends('layout.mainlayout')
<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


<style>


body{
    background: #ddd
}

.container-centered{
    margin-top: 5%;
    margin-bottom: 5%;
    width: 500px;
}

.carousel-inner > .item > img {
        margin: 0 auto;
        width:640px;
        height:360px;
}

.row .col-md-8{
    padding-top: 5%;
    padding-bottom: 5%;
}

.btn-aux{
    position: absolute;
}

.col-lg-4 {
    width: 25%;
}

.row-centered {
    text-align:center;
}

.drop-mod2 {
    margin-left: 23%;
    top: auto;
}

.center-home{
    height: 100%;
    width: 100%;
}

.img-slider{
    width: 100%;
    height: 500px;
}

.btn-tabla{
    color: #333;
    padding-left: 5px;
    padding-right: 5px;
    padding-bottom: 5px;
    font-weight: unset;
}

.hide-bullets {
    list-style:none;
    margin-left: -40px;
    margin-top:1px;
}

.galery{
    height: 114px;
    width: 114px;
    margin-bottom: 10%;

}

.container-galeria{
    margin-top: 10%;
}

.row-padded{
    padding-bottom: 4%;
}

.marg-down{
    margin-bottom: 5%;
    font-size: 20px;
}

.col-centered{
    text-align: center;
}

.container-centered-xl{
    padding-top: 2%;
    padding-bottom: 2%;
    padding-left: 1%;
    padding-right: 1%;
}

</style>


@section('content')

<div class="container container-galeria">
    <div id="main_area">
       
        <div class="row">
            <div class="col-sm-6" id="slider-thumbs">
                <ul class="hide-bullets">
                    <li class="col-sm-3">
                        <a id="carousel-selector-0">
                            <img class="galery" src="/img/imagen1.png">
                        </a>
                    </li>

                    <li class="col-sm-3">
                        <a id="carousel-selector-1"><img class="galery" src="/img/imagen2.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a id="carousel-selector-2"><img class="galery" src="/img/imagen3.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a  id="carousel-selector-3"><img class="galery" src="/img/imagen4.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a id="carousel-selector-4"><img class="galery" src="/img/imagen5.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a id="carousel-selector-5"><img class="galery" src="/img/imagen6.jpg"></a>
                    </li>
                    <li class="col-sm-3">
                        <a id="carousel-selector-6"><img class="galery" src="/img/imagen7.jpeg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a id="carousel-selector-7"><img class="galery" src="/img/imagen8.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a id="carousel-selector-8"><img class="galery" src="/img/imagen9.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a id="carousel-selector-9"><img class="galery" src="/img/imagen10.jpeg"></a>
                    </li>
                   
                    <li class="col-sm-3">
                        <a id="carousel-selector-9"><img class="galery" src="/img/imagen11.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a id="carousel-selector-9"><img class="galery" src="/img/imagen12.jpg"></a>
                    </li>
                   <br></br>
        
                </ul>
            </div>
            <div class="col-sm-6">
                <div class="col-xs-12" id="slider">
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                         
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                        <img src="/img/imagen1.png"></div>

                                    <div class="item" data-slide-number="1">
                                        <img src="/img/imagen2.jpg"></div>

                                    <div class="item" data-slide-number="2">
                                        <img  src="/img/imagen3.jpg"></div>

                                    <div class="item" data-slide-number="3">
                                        <img  src="/img/imagen4.jpg"></div>

                                    <div class="item" data-slide-number="4">
                                        <img  src="/img/imagen5.jpg"></div>

                                    <div class="item" data-slide-number="5">
                                        <img  src="/img/imagen6.jpg"></div>
                                    
                                    <div class="item" data-slide-number="6">
                                        <img  src="/img/imagen7.jpeg"></div>
                                    
                                    <div class="item" data-slide-number="7">
                                        <img src="/img/imagen8.jpg"></div>
                                    
                                    <div class="item" data-slide-number="8">
                                        <img  src="/img/imagen9.jpg"></div>
                                    
                                    <div class="item" data-slide-number="9">
                                        <img  src="/img/imagen10.jpeg"></div>
                                    
                                    <div class="item" data-slide-number="10">
                                        <img  src="/img/imagen11.jpg"></div>
                                
               
                                </div>
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <br></br>
                        </div>
                    </div>
                </div>
            </div>
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

