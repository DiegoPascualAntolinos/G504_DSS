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


<form>

    <div class="form-group"> <!-- Full Name -->
          <label for="full_name_id" class="control-label">Nombre</label>
         <input type="text" class="form-control" id="full_name_id" name="full_name" placeholder="Alejandro">
     </div>   

     <div class="form-group"> <!-- Full Name -->
        <label for="full_name_id" class="control-label">Email</label>
        <input type="text" class="form-control" id="full_name_id" name="full_name" placeholder="dsstino@gmail.com">
    </div>   


    <div class="form-group"> <!-- Full Name -->
        <label for="full_name_id" class="control-label">Titulo Viaje</label>
        <input type="text" class="form-control" id="full_name_id" name="full_name" placeholder="Una experiencia inolvidable">
    </div>    

    <div class="form-group"> <!-- Full Name -->
        <label for="full_name_inicio" class="control-label">Fecha inicio</label>
        <input class"form-control" id="full_name_inicio" name="FechaInicioOferta"  placeholder="DD/MM/AAAA"  type="text">
    </div>  

    <div class="form-group"> <!-- Full Name -->
        <label for="full_name_fin" class="control-label">Fecha inicio</label>
        <input class"form-control" id="full_name_fin" name="FechaFinOferta"  placeholder="DD/MM/AAAA" type="text">
    </div>  
                            
    <div class="form-group"> <!-- State Button -->
        <label for="state_id" class="control-label">¿De dónde sales?</label>
        <select class="form-control" id="state_id">
        <option value="AT">Albania, Tirania</option>
            <option value="AB">Alemania, Berlín</option>
            <option value="AA">Andorra, Andorra la bella</option>
            <option value="AV">Austria, Viena</option>
            <option value="BM">Bielorrusia, Minsk</option>
            <option value="BB">Bélgica, Bruselas</option>
            <option value="BS">Bosnia-Herzegovina, Sarajevo</option>
            <option value="BS">Bulgaria, Sofía</option>
            <option value="CZ">Croacia, Zangreb</option>
            <option value="DC">Dinamarca, Copenhague</option>
            <option value="EB">Eslovaquia, Bratislava</option>
            <option value="EL">Eslovenia, Liubliana</option>
            <option value="EM">España, Madrid</option>
            <option value="EB">España, Barcelona</option>
            <option value="ES">España, Sevilla</option>
            <option value="EG">España, Granada</option>
            <option value="EA">España, Alicante</option>
            <option value="FH">Finlandia, Helsinki</option>
            <option value="FP">Francia, París</option>
            <option value="GA">Grecia, Atenas</option>
            <option value="HB">Hungría, Budapest</option>
            <option value="ID">Irlanda, Dublín</option>
            <option value="IR">Islandia, Reikiavik</option>
            <option value="IR">Italia, Roma</option>
            <option value="LR">Letonia, Riga</option>
            <option value="LV">Lituania, Vilna</option>
            <option value="LL">Luxemburgo, Luxemburgo</option>
            <option value="MS">Macedonia, Skopje</option>
            <option value="ML">Malta, La Valetta</option>
            <option value="MC">Moldova, Chisinau</option>
            <option value="MM">Mónaco, Mónaco-Vile</option>
            <option value="NO">Noruega, Oslo</option>
            <option value="PA">Países Bajos, Amsterdam</option>
            <option value="PV">Polonia, Varsovia</option>
          
        </select>                    
    </div>
    
             
    <div class="form-group"> <!-- State Button -->
        <label for="state_id" class="control-label">¿A dónde vas?</label>
        <select class="form-control" id="state_id">
            <option value="AT">Albania, Tirania</option>
            <option value="AB">Alemania, Berlín</option>
            <option value="AA">Andorra, Andorra la bella</option>
            <option value="AV">Austria, Viena</option>
            <option value="BM">Bielorrusia, Minsk</option>
            <option value="BB">Bélgica, Bruselas</option>
            <option value="BS">Bosnia-Herzegovina, Sarajevo</option>
            <option value="BS">Bulgaria, Sofía</option>
            <option value="CZ">Croacia, Zangreb</option>
            <option value="DC">Dinamarca, Copenhague</option>
            <option value="EB">Eslovaquia, Bratislava</option>
            <option value="EL">Eslovenia, Liubliana</option>
            <option value="EM">España, Madrid</option>
            <option value="EB">España, Barcelona</option>
            <option value="ES">España, Sevilla</option>
            <option value="EG">España, Granada</option>
            <option value="EA">España, Alicante</option>
            <option value="FH">Finlandia, Helsinki</option>
            <option value="FP">Francia, París</option>
            <option value="GA">Grecia, Atenas</option>
            <option value="HB">Hungría, Budapest</option>
            <option value="ID">Irlanda, Dublín</option>
            <option value="IR">Islandia, Reikiavik</option>
            <option value="IR">Italia, Roma</option>
            <option value="LR">Letonia, Riga</option>
            <option value="LV">Lituania, Vilna</option>
            <option value="LL">Luxemburgo, Luxemburgo</option>
            <option value="MS">Macedonia, Skopje</option>
            <option value="ML">Malta, La Valetta</option>
            <option value="MC">Moldova, Chisinau</option>
            <option value="MM">Mónaco, Mónaco-Vile</option>
            <option value="NO">Noruega, Oslo</option>
            <option value="PA">Países Bajos, Amsterdam</option>
            <option value="PV">Polonia, Varsovia</option>
        </select>                    
    </div>

    <div class="form-group"> <!-- Zip Code-->
        <label for="zip_id" class="control-label">Precio total (todo incluido)</label>
        <input type="text" class="form-control" id="zip_id" name="zip" placeholder="#####">
    </div>        
    
    <div class="form-group"> <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>     
    
</form>


<div class="item">
      <img class="img-responsive" src="http://www.cosasdecoches.com/wp-content/uploads/2016/07/Viajar-por-Europa.jpg" alt="New York">
    </div>

        <div
            id="map1"
            class="geo-map"
            data-latitude="40.396764"
            data-longitude="-3.669434"
            data-avoid-highway="20"
            style="width:350px;height:400px;">
        </div>
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



@endsection
