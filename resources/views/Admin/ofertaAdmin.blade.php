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
<h1> ¡Las mejores ofertas para nuestros clientes! </h1>
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

<form action="{{ route('store_offerAdmin') }}" method="POST">

{{ csrf_field() }}

<div id="contenedor">
				<div class="centro"></div>
				<div id="contenedor-izq">

     <div class="form-group"> <!-- email -->
        <label for="email" class="control-label">Email</label>
        <input type="string" class="form-control" id="full_name_id" name="email" placeholder="dsstino@gmail.com">
    </div>   


    <div class="form-group"> <!-- titulo -->
        <label for="titulo" class="control-label">Titulo Viaje</label>
        <input type="string" class="form-control" id="full_name_id" name="titulo" placeholder="Una experiencia inolvidable">
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

    <div class="form-group"> <!-- precio -->
        <label for="descripcion" class="control-label">Descripción</label>
        <input type="string" class="form-control" id="descripcion" name="descripcion" style="WIDTH: 632px; HEIGHT: 150px" placeholder="Cuéntanos">
    </div>         
    
    <div class="form-group"> <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Crear</button>
    </div>    

    </div>
    </div> 
    <hr></hr>
    
</form>

<div class = "container">
    <table id = "example" data-toggle="table" class="table table-hover">

            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha inicio</th>
                <th>Fecha fin</th>
                <th>Origen</th>
                <th>Destino</th>
                <th>Descripción</th>
                <th>Precio</th>
              </tr>
            </thead>
              <tbody>
            @foreach($offers as $offer)
              <tr>
              <td> {{ $offer->id }} </td>
              <td> {{ $offer->nombre }} </td>
              <td> {{ $offer->fechaViaje }} </td>
              <td> {{ $offer->fechaFinOferta }} </td>
              <td> {{ $offer->origen }} </td>
              <td> {{ $offer->destino }} </td>
              <td> {{ $offer->descripcion }} </td>
              <td> {{ $offer->precio }} </td>

              <td>


              <a href="{{ route('edit_offerAdmin', ['offer' => $offer->id]) }}" class="btn btn-warning">Modificar</a>
              <p>

              <div class="container">
  
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                    Delete
                </button>

                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    
                        <!-- Modal Header -->
                        <div class="modal-header">
                        <h4 class="modal-title">¿Estás seguro que deseas eliminar?</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        
                        <!-- Modal footer -->
                        <div class="modal-footer">
                        <form action="{{ route('delete_offer',['offer' => $offer->id]) }}"method = "POST">
                        {{ csrf_field() }}
                        {{method_field('DELETE')}}
                        
                        <button type="submit" class='btn btn-danger'>Sí</button>

                        </form>
                        <p>
                        </p>
                        <button type="button" class="btn btn-secundary" data-dismiss="modal">No</button>
                        </div>
                        
                    </div>
                    </div>
                </div>
  
            </div>

               </td>
               </tr>
              </tr>

            @endforeach
            {{ $offers->links() }}
            </tbody>
            </table>
</div>
<p></p>

</body>





@endsection