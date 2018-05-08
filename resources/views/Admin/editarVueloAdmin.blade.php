@extends('layout.mainlayout')
<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


@section('content')

<head>

    <style>
        #contenedor { 
            width: 900px; 
            padding: 10px; 
            background:  #ffbeb3 ; 
            border: 3px solid #ff674d; 
            overflow: auto; 
            }

        #contenedor-izq { 
            width: 400px; 
            float: left; 
            }

        #contenedor-der-top { 
            width: 400px; 
            padding-left: 20px; 
            padding-top: 10px; 
            float: right; 
            }

    </style>





</head>

<body>



<div class= "container">
    <div class="container container-centered">
<h1> Editar vuelo </h1>
<hr>

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

<form action="{{ route('update_flightAdmin', ['vuelo' => $vuelo->id]) }}" method="POST">

{{ csrf_field() }}

{{ method_field('PUT') }}

  
<div id="contenedor">
				<div class="centro"></div>
				<div id="contenedor-izq">


    <div class="form-group"> <!-- precio -->
        <label for="precio" class="control-label">Precio</label>
        <input type="string" class="form-control" id="precio" name="precio" placeholder="{{ $vuelo->precio }}">
    </div>    

    <div class="form-group"> <!-- fecha inicio -->
        <label for="fechaVuelo" class="control-label">Fecha vuelo</label>
        <input type="date" class"form-control" id="full_name_inicio" name="fechaVuelo"  placeholder="{{ $vuelo->fechaVuelo }}"  type="text">
    </div>  



    <div class="form-group"> <!-- plazas -->
        <label for="plazasDisponibles" class="control-label">Plazas disponibles</label>
        <input type="double" class="form-control" id="plazasDisponibles" name="plazasDisponibles" placeholder="{{ $vuelo->plazasDisponibles }}">
    </div>

    <div class="form-group"> <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>  
    </div>
    </div>
    <hr></hr>   
    
</form>

</body>

@endsection