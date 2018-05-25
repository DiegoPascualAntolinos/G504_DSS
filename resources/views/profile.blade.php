@extends('layout.profilelayout')
<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


@section('content')

@if($offers->count() == 0)

<div id="jumbotronWrapper">
    <div class="jumbotron jumbotron-fluid" id= "jumb">
    <div class="row">
        <div class="col-sm-10"> <h1>¡Haz una oferta! <h1> </div>
    </div>
</div>

@else

<div id="jumbotronWrapper">
@foreach($offers as $offer)
    <div class="jumbotron jumbotron-fluid" id= "jumb">
    
    
    <div class="row">
        <div class="col-sm-3" id="fechas-perfil"> <h2> Oferta número: {{ $offer->id }} <h2> </div>
        <div class="col-sm-3" id="fechas-perfil">La fecha de salida:  {{$offer->fechaSalida}} </div>
        <div class="col-sm-3" id="fechas-perfil">La fecha de llegada: {{$offer->fechaLlegada}} </div>
    </div>
    
    <div class="col-sm-2">  </div>
     
    </div>
   @endforeach
</div>
@endif

@endsection