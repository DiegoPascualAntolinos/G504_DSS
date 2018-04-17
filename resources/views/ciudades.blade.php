@extends('layout.mainlayout')
<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


@section('content')

<div class= "container">
    <div class="container container-centered">
<h1> Las mejores ciudades para visitar </h1>
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

<form action="{{ route('store_city') }}" method="POST">

{{ csrf_field() }}
  
    
<div class="form-group"> <!-- pais -->
        <label for="pais" class="control-label">País</label>
        <input type="string" class="form-control" id="pais" name="pais" placeholder="Introduce el país">
    </div>

      

<div class="form-group"> <!-- provincia -->
        <label for="provincia" class="control-label">Provincia</label>
        <input type="string" class="form-control" id="provincia" name="provincia" placeholder="Introduce la provincia">
    </div>

      
<div class="form-group"> <!-- ciudad -->
        <label for="ciudad" class="control-label">Ciudad</label>
        <input type="string" class="form-control" id="ciudad" name="ciudad" placeholder="Introduce la ciudad">
    </div>       


    <div class="form-group"> <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Crear</button>
    </div>     
    
</form>


<div class = "container">
    <table id = "example" data-toggle="table" class="table table-striped table-bordered tablesorter">

            <thead>
              <tr>
                <th>ID</th>
                <th>País</th>
                <th>Provincia</th>
                <th>Ciudad</th>
              </tr>
            </thead>
              <tbody>
            @foreach($cities as $city)
              <tr>
              <td> {{ $city->id }} </td>
              <td> {{ $city->pais }} </td>
              <td> {{ $city->provincia }} </td>
              <td> {{ $city->ciudad }} </td>
              </tr>
            @endforeach
            {{ $cities->links() }}
            </tbody>
            </table>
</div>

<div class="item">
      <img class="img-responsive" src="http://www.cosasdecoches.com/wp-content/uploads/2016/07/Viajar-por-Europa.jpg" alt="New York"
      HSPACE = "61" VSPACE="50">
    </div>


@endsection