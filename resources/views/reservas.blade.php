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

<form action="{{ route('store_offer') }}" method="POST">

{{ csrf_field() }}

     <div class="form-group"> <!-- email -->
        <label for="email" class="control-label">Email</label>
        <input type="string" class="form-control" id="full_name_id" name="email" placeholder="dsstino@gmail.com">
    </div>   


    <div class="form-group"> <!-- fecha inicio -->
        <label for="fechaViaje" class="control-label">Fecha Salida  </label>
        <input type="date" class"form-control" id="full_name_inicio" name="fechaViaje"  placeholder="DD/MM/AAAA"  type="text">
    </div>  

    <div class="form-group"> <!-- fecha vuelta -->
        <label for="fechaFinOferta" class="control-label">Fecha Llegada</label>
        <input type = "date" class"form-control" id="full_name_fin" name="fechaFinOferta"  placeholder="DD/MM/AAAA" type="text">
    </div>  
    
    
    <div class="form-group"> <!-- precio -->
        <label for="precio" class="control-label">Cantidad de reservas</label>
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

    </div>

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
            @foreach($reservation as $reservation)
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




@endsection
