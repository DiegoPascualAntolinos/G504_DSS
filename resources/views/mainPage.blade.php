@extends('layout.mainlayout')
<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


@section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img class="img-responsive" src="https://www.rentokil.com/blog/wp-content/uploads/2016/03/how-to-prevent-bed-bugs-when-travelling-v2.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img class="img-responsive" src="http://www.travelloapp.com/wp-content/uploads/2017/06/my.infinity.wanders-copy.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img class="img-responsive" src="https://cms.hostelworld.com/hwblog/wp-content/uploads/sites/2/2017/09/iStock_000086129025_Medium.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="jumbotron jumbotron-fluid">
  <div class="container">

    <h1 class="display-4">¡BIENVENIDO!</h1>
    <p class="lead">
    <br>
    ¿Cuándo fue la última vez que hiciste algo por primera vez? La finalidad de DSStino es hacerte soñar despierto. ¡Solamente imaginalo! Nosotros lo haremos realidad, te lo prometo.
    <br>
    <br>
    <br>
    Feliz Viaje. Equipo Dsstinos</p>

  </div>
</div>
<div class="container">

  <div class="row align=center">
  
            <div class="col-xs-6 col-lg-4">
              <h2>Laura, Ivan y Diego</h2>
              <p>"Una manera de viajar única. El hotel era ideal, un 4 estrellas y en el centro de la ciudad. Lo recomiendo 100%. Me ha gustado mucho. </p>
              
              <div class="item">
      <img class="item" src="" alt="New York" HSPACE ="0" VSPACE="15">
              </div>
              
              <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Eduardo y Sara</h2>
              <p>Experiencia inolvidable como relago de cumpleaños. Trato muy cercano, serio y muy profesional. Repetiremos seguro. </p>
              <div class="item">
      <img class="img-responsive" src="" alt="New York"  HSPACE ="0" VSPACE="15">
      </div>
      
            
              <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
            </div><!--/.col-xs-6.col-lg-4-->




            <div class="col-xs-6 col-lg-4">
            <h2>Raquel y Marina</h2>
              <p>La ciudad nos encantó, y a pensar de que hacía mucho frío, pudimos disfrutar y ver todo lo que queríamos. </p>

              <div class="item">
      <img class="img-responsive" src="http://www.mexicoenfotos.com/MX12182452247429.jpg" alt="New York" HSPACE = "0" VSPACE="15">


              <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
            </div><!--/.col-xs-6.col-lg-4-->





            </div>

            <div class="col-xs-6 col-lg-4">
              <h2>Fran, Rocio, Raquel y Laura</h2>
              <p>Fue una experiencia increíble, estamos deseando repetir con DSStinos. ¡Mil gracias por todo! </p>


              <div class="item">
      <img class="img-responsive" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQl1dvAg2zAKAuTnDGCPI-8uSyIkPwF4jKKr5xFSxeYVAbryRe3tw" alt="New York" HSPACE = "0" VSPACE="15">
    </div>


              <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
            </div><!--/.col-xs-6.col-lg-4-->

            <div class="col-xs-6 col-lg-4">
            <h2>Joaquin, Alba, Laia y Roberto</h2>
              <p>¡Con ganas de cargar las tarjetas de crédito para hacer otro! </p>

              <div class="item">
      <img class="img-responsive" src="http://www.almuerzodenegocios.com/wp-content/uploads/2015/09/Turistas-Jovenes.jpg" alt="New York" HSPACE = "0" VSPACE="15">
    </div>


              <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
        
          

            <div class="col-xs-6 col-lg-4">
            <h2>Ángela y Javi</h2>
              <p>¡Una experiencia única y romántica! Sin duda una luna de miel indescriptible. </p>

              <div class="item">
      <img class="img-responsive" src="https://img.culturacolectiva.com/featured/2017/12/20/1513824874527/viajes-portada-medium.png" alt="New York" HSPACE = "0" VSPACE="15">


              <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
        
          

  </div>

</div>

@endsection
