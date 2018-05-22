@extends('layout.mainlayout')
<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


@section('content')

<div class= "container">
    <div class="container container-centered">
<h1> ¡Reserva ya! </h1>
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

<form action="{{ route('store_reservation') }}" method="POST">

{{ csrf_field() }}

     <div class="form-group"> <!-- email -->
        <label for="email" class="control-label">Email</label>
        <input type="string" class="form-control" id="full_name_id" name="email" placeholder="dsstino@gmail.com">
    </div>  

    <div class="form-group"> <!-- id_flight -->
        <label for="id_flight" class="control-label">ID_Flight</label>
        <input type="string" class="form-control" id="id_flight" name="id_flight" placeholder="">
    </div>

    <div class="form-group"> <!-- fecha inicio -->
        <label for="fechaSalida" class="control-label">Fecha Salida  </label>
        <input type="date" class"form-control" id="full_name_inicio" name="fechaSalida"  placeholder="DD/MM/AAAA"  type="text">
    </div>  

    <div class="form-group"> <!-- fecha vuelta -->
        <label for="fechaLlegada" class="control-label">Fecha Llegada</label>
        <input type = "date" class"form-control" id="full_name_fin" name="fechaLlegada"  placeholder="DD/MM/AAAA" type="text">
    </div>  
    
    
    <div class="form-group"> <!-- precio -->
        <label for="cantidad" class="control-label">Cantidad de reservas</label>
        <input type="double" class="form-control" id="precio" name="cantidad" placeholder="#####">
    </div>    
    
    <div class="form-group"> <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Crear</button>
    </div>     
    
</form>

<br/>
<br/>

<form action="/reservas" method="GET" role="search">
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
    <table id = "example" data-toggle="table" class="table table-striped table-bordered tablesorter">

            <thead>
              <tr>
                <th>ID</th>
                <th>Fecha Salida</th>
                <th>Fecha Llegada</th>
                <th>Cantidad reservas</th>
              </tr>
            </thead>
              <tbody>
            @foreach($reservations as $reservation)
              <tr>
              <td> {{ $reservation->id }} </td>
              <td> {{ $reservation->fechaSalida }} </td>
              <td> {{ $reservation->fechaLlegada }} </td>
              <td> {{ $reservation->cantidad }} </td>
              </tr>
            @endforeach

            {{ $reservations->links() }}
            </tbody>
            </table>
</div>

@endsection