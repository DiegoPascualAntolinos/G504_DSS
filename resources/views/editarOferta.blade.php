@extends('layout.mainlayout')
<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


@section('content')

<div class= "container">
    <div class="container container-centered">
<h1> Editar oferta </h1>
<hr>

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

<form action="{{ route('update_offer', ['oferta' => $oferta->id]) }}" method="POST">

{{ csrf_field() }}

{{ method_field('PUT') }}

  
    <div class="form-group"> <!-- precio -->
        <label for="precio" class="control-label">Precio</label>
        <input type="double" class="form-control" id="precio" name="precio" placeholder="{{ $oferta->precio }}">
    </div>    

    <div class="form-group"> <!-- fecha inicio -->
        <label for="nombre" class="control-label">Nombre</label>
        <input type="string" class"form-control" id="nombre" name="nombre"  placeholder="{{ $oferta->nombre }}"  type="text">
    </div>  



    <div class="form-group"> <!-- fechaViaje -->
        <label for="fechaViaje" class="control-label">Fecha viaje</label>
        <input type="date" class="form-control" id="fechaViaje" name="fechaViaje" placeholder="{{ $oferta->fechaViaje }}">
    </div>

    <div class="form-group"> <!-- origen -->
        <label for="origen" class="control-label">Origen</label>
        <input type="string" class="form-control" id="origen" name="origen" placeholder="{{ $oferta->origen }}">
    </div>

    <div class="form-group"> <!-- destino -->
        <label for="destino" class="control-label">Destino</label>
        <input type="string" class="form-control" id="destino" name="destino" placeholder="{{ $oferta->destino }}">
    </div>

    <div class="form-group"> <!-- descripcion -->
        <label for="descripcion" class="control-label">Descripción</label>
        <input type="string" class="form-control" id="descripcion" name="descripcion" placeholder="{{ $oferta->descripcion }}">
    </div>

    <div class="form-group"> <!-- fechaFinOferta -->
        <label for="fechaFinOferta" class="control-label">Fecha fin oferta</label>
        <input type="date" class="form-control" id="fechaFinOferta" name="fechaFinOferta" placeholder="{{ $oferta->fechaFinOferta }}">
    </div>

    <div class="form-group"> <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>     
    
</form>



<div class="item">
      <img class="img-responsive" src="http://www.cosasdecoches.com/wp-content/uploads/2016/07/Viajar-por-Europa.jpg" alt="New York"
      HSPACE = "61" VSPACE="50">
    </div>


@endsection