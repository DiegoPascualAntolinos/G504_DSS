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

<form action="{{ route('update_offerAdmin', ['oferta' => $oferta->id]) }}" method="POST">

{{ csrf_field() }}

{{ method_field('PUT') }}

  

<body>


<div id="contenedor">
				<div class="centro"></div>
				<div id="contenedor-izq">

     <div class="form-group"> <!-- email -->
        <label for="email" class="control-label">Email</label>
        <input type="string" class="form-control" id="full_name_id" name="email" placeholder="dsstino@gmail.com">
    </div>   


    <div class="form-group"> <!-- titulo -->
        <label for="titulo" class="control-label">Titulo Viaje</label>
        <input type="string" class="form-control" id="full_name_id" name="titulo" placeholder="Introduce un título para el viaje">
    </div>    

    <div class="form-group"> <!-- fecha inicio -->
        <label for="fechaViaje" class="control-label">Fecha inicio</label>
        <input type="date" class"form-control" id="full_name_inicio" name="fechaViaje"  placeholder="DD/MM/AAAA"  type="text">
    </div>  

    <div class="form-group"> <!-- fecha vuelta -->
        <label for="fechaFinOferta" class="control-label">Fecha vuelta</label>
        <input type = "date" class"form-control" id="full_name_fin" name="fechaFinOferta"  placeholder="DD/MM/AAAA" type="text">
    </div>  
                            
    <div class="form-group"> <!-- origen -->
        <label for="origen" class="control-label">¿De dónde sales?</label>
        <input type="string" class="form-control" id="origen" name="origen" placeholder="Introduce el origen">                
    </div>
    
             
    <div class="form-group"> <!-- destino -->
        <label for="destino" class="control-label">¿A dónde vas?</label>
        <input type="string" class="form-control" id="destino" name="destino" placeholder="Introduce el destino">
                          
    </div>

    <div class="form-group"> <!-- precio -->
        <label for="precio" class="control-label">Precio total (todo incluido)</label>
        <input type="double" class="form-control" id="precio" name="precio" placeholder="#####">
    </div>

    <div class="form-group"> <!-- descripción -->
        <label for="descripcion" class="control-label">Descripción</label>
        <input type="string" class="form-control" id="descripcion" name="descripcion" style="WIDTH: 632px; HEIGHT: 150px" placeholder="Cuéntanos">
    </div> 
    </div>
    </div>
    <hr></hr>        


@endsection