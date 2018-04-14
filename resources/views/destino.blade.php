@extends('layout.mainlayout')
<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


@section('content')

<div class= "container">
    <div class="container container-centered">
<h1> Si no es ahora, ¿cuándo? </h1>

<h1> 
</div> 

@if(count($errors) > 0)

<div class="alert alert-danger">

    <ul>

        @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif

<form action="{{ route('store_offer') }}" method="POST">

{{ csrf_field() }}

     <div class="form-group"> <!-- email -->
        <label for="email" class="control-label">Email</label>
        <input type="string" class="form-control" id="full_name_id" name="email" placeholder="dsstino@gmail.com">
    </div>   


    <div class="form-group"> <!-- titulo -->
        <label for="titulo" class="control-label">Titulo Viaje</label>
        <input type="string" class="form-control" id="full_name_id" name="titulo" placeholder="Una experiencia inolvidable">
    </div>    

    <div class="form-group"> <!-- fecha inicio -->
        <label for="fechaViaje" class="control-label">Fecha inicio</label>
        <input type="date" class"form-control" id="full_name_inicio" name="fechaViaje"  placeholder="DD/MM/AAAA"  type="text">
    </div>  

    <div class="form-group"> <!-- fecha vuelta -->
        <label for="fechaFinOferta" class="control-label">Fecha vuelta</label>
        <input type = "date" class"form-control" id="full_name_fin" name="fechaFinOferta"  placeholder="DD/MM/AAAA" type="text">
    </div>  
                            
    <div class="form-group"> <!-- origen Button -->
        <label for="origen" class="control-label">¿De dónde sales?</label>
        <select class="form-control" id="origen" name="origen">
        <option value="Tirania">Albania, Tirania</option>
            <option value="Berlín">Alemania, Berlín</option>
            <option value="Andorra La Bella">Andorra, Andorra la bella</option>
            <option value="Viena">Austria, Viena</option>
            <option value="Minsk">Bielorrusia, Minsk</option>
            <option value="Bruselas">Bélgica, Bruselas</option>
            <option value="Sarajevo">Bosnia-Herzegovina, Sarajevo</option>
            <option value="Sofía">Bulgaria, Sofía</option>
            <option value="Zangreb">Croacia, Zangreb</option>
            <option value="Copenhague">Dinamarca, Copenhague</option>
            <option value="Bratislava">Eslovaquia, Bratislava</option>
            <option value="Liubliana">Eslovenia, Liubliana</option>
            <option value="Madrid">España, Madrid</option>
            <option value="Barcelona">España, Barcelona</option>
            <option value="Sevilla">España, Sevilla</option>
            <option value="Granada">España, Granada</option>
            <option value="Alicante">España, Alicante</option>
            <option value="Helsinki">Finlandia, Helsinki</option>
            <option value="París">Francia, París</option>
            <option value="Atenas">Grecia, Atenas</option>
            <option value="Budapest">Hungría, Budapest</option>
            <option value="Dublín">Irlanda, Dublín</option>
            <option value="Reikiavik">Islandia, Reikiavik</option>
            <option value="Roma">Italia, Roma</option>
            <option value="Riga">Letonia, Riga</option>
            <option value="Vilna">Lituania, Vilna</option>
            <option value="Luxemburgo">Luxemburgo, Luxemburgo</option>
            <option value="Skopje">Macedonia, Skopje</option>
            <option value="La Valetta">Malta, La Valetta</option>
            <option value="Chisinau">Moldova, Chisinau</option>
            <option value="Mónaco-Vile">Mónaco, Mónaco-Vile</option>
            <option value="Oslo">Noruega, Oslo</option>
            <option value="Amsterdam">Países Bajos, Amsterdam</option>
            <option value="Varsovia">Polonia, Varsovia</option>
          
        </select>                    
    </div>
    
             
    <div class="form-group"> <!-- destino Button -->
        <label for="destino" class="control-label">¿A dónde vas?</label>
        <select class="form-control" id="destino" name="destino">
            <option value="Tirania">Albania, Tirania</option>
            <option value="Berlín">Alemania, Berlín</option>
            <option value="Andorra La Bella">Andorra, Andorra la bella</option>
            <option value="Viena">Austria, Viena</option>
            <option value="Minsk">Bielorrusia, Minsk</option>
            <option value="Bruselas">Bélgica, Bruselas</option>
            <option value="Sarajevo">Bosnia-Herzegovina, Sarajevo</option>
            <option value="Sofía">Bulgaria, Sofía</option>
            <option value="Zagreb">Croacia, Zangreb</option>
            <option value="Copenhague">Dinamarca, Copenhague</option>
            <option value="Bratislava">Eslovaquia, Bratislava</option>
            <option value="Liubliana">Eslovenia, Liubliana</option>
            <option value="Madrid">España, Madrid</option>
            <option value="Barcelona">España, Barcelona</option>
            <option value="Sevilla">España, Sevilla</option>
            <option value="Granada">España, Granada</option>
            <option value="Alicante">España, Alicante</option>
            <option value="Helsinki">Finlandia, Helsinki</option>
            <option value="París">Francia, París</option>
            <option value="Atenas">Grecia, Atenas</option>
            <option value="Budapest">Hungría, Budapest</option>
            <option value="Dublín">Irlanda, Dublín</option>
            <option value="Reikiavik">Islandia, Reikiavik</option>
            <option value="Roma">Italia, Roma</option>
            <option value="Riga">Letonia, Riga</option>
            <option value="Vilna">Lituania, Vilna</option>
            <option value="Luxemburgo">Luxemburgo, Luxemburgo</option>
            <option value="Skopje">Macedonia, Skopje</option>
            <option value="La Valetta">Malta, La Valetta</option>
            <option value="Chisinau">Moldova, Chisinau</option>
            <option value="Mónaco-Vile">Mónaco, Mónaco-Vile</option>
            <option value="Oslo">Noruega, Oslo</option>
            <option value="Amsterdam">Países Bajos, Amsterdam</option>
            <option value="Varsovia">Polonia, Varsovia</option>
        </select>                    
    </div>

    <div class="form-group"> <!-- precio -->
        <label for="precio" class="control-label">Precio total (todo incluido)</label>
        <input type="double" class="form-control" id="precio" name="precio" placeholder="#####">
    </div>        
    
    <div class="form-group"> <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>     
    
</form>


<div class="item">
      <img class="img-responsive" src="http://www.cosasdecoches.com/wp-content/uploads/2016/07/Viajar-por-Europa.jpg" alt="New York"
      HSPACE = "61" VSPACE="50">
    </div>

        <div
            id="map1"
            class="geo-map"
            data-latitude="40.396764"
            data-longitude="-3.669434"
            data-avoid-highway="20"
            style="width:350px;height:400px;">
        </div>  

            <div class="insurance wrapper alert alert-info no-icon clearfix">
    <i class="bbc-icon2-info u-darkBlue size30 pull-left no-margin-left" aria-hidden="true"></i>
    <h2 class="margin-half-bottom u-darkBlue">Suéñalo, vívelo y recuérdalo. Juntos escaparemos de la realidad.</h2>
    <ul class="u-gray">
        <li class="line20">Experiencias inolvidables con DSStinos. Únete a nosotros. </li>
        <li class="line20">Profesionales con perfiles certificados.</li>
        <li class="line20">Seguro adicional sin coste en colaboración con DSS</li>
    </ul>
    </div>
</div>





@endsection
