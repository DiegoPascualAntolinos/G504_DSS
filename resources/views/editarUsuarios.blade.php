@extends('layout.mainlayout')
<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


@section('content')

<div class= "container">
    <div class="container container-centered">
<h1> Editar usuario </h1>
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

<form action="{{ route('update_user', ['usuario' => $usuario->id]) }}" method="POST">

{{ csrf_field() }}

{{ method_field('PUT') }}

  
    <div class="form-group"> <!-- dni -->
        <label for="dni" class="control-label">DNI</label>
        <input type="string" class="form-control" id="dni" name="dni" placeholder="{{ $cliente->dni }}">
    </div>    

    <div class="form-group"> <!-- nombre -->
        <label for="nombre" class="control-label">Nombre</label>
        <input type="string" class"form-control" id="nombre" name="nombre"  placeholder="{{ $cliente->nombre }}"  type="text">
    </div>  



    <div class="form-group"> <!-- direccion -->
        <label for="direccion" class="control-label">Dirección</label>
        <input type="string" class="form-control" id="direccion" name="direccion" placeholder="{{ $cliente->direccion }}">
    </div>

    <div class="form-group"> <!-- email -->
        <label for="email" class="control-label">Email</label>
        <input type="string" class="form-control" id="email" name="email" placeholder="{{ $cliente->email }}">
    </div>

    <div class="form-group"> <!-- telefono -->
        <label for="telefono" class="control-label">Teléfono</label>
        <input type="string" class="form-control" id="telefono" name="telefono" placeholder="{{ $cliente->telefono }}">
    </div>

    <div class="form-group"> <!-- contraseña -->
        <label for="contraseña" class="control-label">Contraseña</label>
        <input type="string" class="form-control" id="contraseña" name="contraseña" placeholder="{{ $cliente->contraseña }}">
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