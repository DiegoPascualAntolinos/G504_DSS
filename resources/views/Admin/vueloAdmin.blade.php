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
            background: #efeded ; 
            border: 2px solid #BBB; 
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
<h1> Vuelos destacados </h1>
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

<div id="contenedor">
				<div class="centro"></div>
				<div id="contenedor-izq">
  
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
    </div>
    </div>
    <hr></hr>
</form>

<form action="/vuelos" method="GET" role="search">
    <div class="input-group col-md-12">
        <input type="text" class="form-control input-lg" placeholder="Buscar" name="q">
        <span class="input-group-btn">
            <button class="btn btn-info btn-lg" type="submit">
                <i class="glyphicon glyphicon-search"></i>
            </button>
        </span>
    </div>
    <hr></hr>

</form>

</body>

@endsection