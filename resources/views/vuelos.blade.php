@extends('layout.mainlayout')
<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


@section('content')

<div class= "container">
    <div class="container container-centered">
<h1> Vuelos baratos </h1>
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

<form action="{{ route('store_flight') }}" method="POST">

{{ csrf_field() }}

  
    <div class="form-group"> <!-- precio -->
        <label for="precio" class="control-label">Precio</label>
        <input type="string" class="form-control" id="precio" name="precio" placeholder="Introduce el precio">
    </div>    

    <div class="form-group"> <!-- fecha inicio -->
        <label for="fechaVuelo" class="control-label">Fecha vuelo</label>
        <input type="date" class"form-control" id="full_name_inicio" name="fechaVuelo"  placeholder="DD/MM/AAAA"  type="text">
    </div>  



    <div class="form-group"> <!-- plazas -->
        <label for="plazasDisponibles" class="control-label">Plazas disponibles</label>
        <input type="double" class="form-control" id="plazasDisponibles" name="plazasDisponibles" placeholder="Introduce las plazas disponibles">
    </div>

    <div class="form-group"> <!-- pais -->
        <label for="pais" class="control-label"> País origen</label>
        <input type="string" class="form-control" id="pais" name="pais" placeholder="Introduce el país de origen">
    </div>

    <div class="form-group"> <!-- provincia -->
        <label for="provincia" class="control-label">Provincia origen</label>
        <input type="string" class="form-control" id="provincia" name="provincia" placeholder="Introduce la provincia de origen">
    </div>

    <div class="form-group"> <!-- ciudad -->
        <label for="ciudad" class="control-label">Ciudad origen</label>
        <input type="string" class="form-control" id="ciudad" name="ciudad" placeholder="Introduce la ciudad de origen">
    </div>

    <div class="form-group"> <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Crear</button>
    </div>     
    
</form>


<div class = "container">
    <table id = "example" data-toggle="table" class="table table-hover">

            <thead>
              <tr>
                <th>ID</th>
                <th>Precio</th>
                <th>Fecha vuelo</th>
                <th>Plazas Disponibles</th>
              </tr>


            </thead>
              <tbody>
            @foreach($flights as $flight)
              <tr>
              <td> {{ $flight->id }} </td>
              <td> {{ $flight->precio }} </td>
              <td> {{ $flight->fechaVuelo }} </td>
              <td> {{ $flight->plazasDisponibles }} </td>
              </td>

              <td>
              <a href="{{ route('edit_flight', ['flight' => $flight->id]) }}" class="btn btn-warning">Modificar</a>
              <p>
              <form action="{{route('delete_flight', ['flight' => $flight->id]) }}"method = "POST">

              {{ csrf_field() }}
              {{ method_field('DELETE') }}

              <button type="submit" class='btn btn-danger'>Delete</button>

              </form>
               </td>
               </tr>
            @endforeach
            {{ $flights->links() }}
            </tbody>
            </table>
</div>







<div class="item">
      <img class="img-responsive" src="http://www.cosasdecoches.com/wp-content/uploads/2016/07/Viajar-por-Europa.jpg" alt="New York"
      HSPACE = "61" VSPACE="50">
    </div>


@endsection