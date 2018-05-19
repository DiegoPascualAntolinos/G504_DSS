@extends('layout.mainlayout')
<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


@section('content')

<div class= "container">
    <div class="container container-centered">
<h1> ¿Preparado para elegir hotel? </h1>
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

<form action="{{ route('store_hotel') }}" method="POST">

{{ csrf_field() }}
  
</form>

<form action="/hoteles" method="GET" role="search">
    <div class="input-group col-md-12">
        <input type="text" class="form-control input-lg" placeholder="Buscar" name="q">
        <span class="input-group-btn">
            <button class="btn btn-info btn-lg" type="submit">
                <i class="glyphicon glyphicon-search"></i>
            </button>
        </span>
    </div>
</form>
<p>
<div class = "container">
    <table id = "example" data-toggle="table" class="table table-hover">

            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Plazas disponibles</th>
               
              </tr>
            </thead>
              <tbody>
            @foreach($hotels as $hotel)
              <tr>
              <td> {{ $hotel->id }} </td>
              <td> {{ $hotel->nombre }} </td>
              <td> {{ $hotel->direccion }} </td>
              <td> {{ $hotel->telefono }} </td>
              <td> {{ $hotel->plazasDisponibles }} </td>

              <td>
                </form>
               </td>
               </tr>
              </tr>

            @endforeach
            {{ $hotels->links() }}
            </tbody>
            </table>
</div>




@endsection