@extends('layout.profilelayout')
<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


@section('content')

<h5>
@if(count($errors) > 0)

<div class="alert alert-danger">

    <ul>

        @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif
</h5>

<div class="container" id="contenido">
    
<form class="form-horizontal"  method="POST" role="form">

{{ csrf_field() }}

          <div class="form-group">
            <label for="first_name" class="col-lg-4 control-label">Precio:</label>
            <div class="col-lg-8">
              <input name="precio" id="first_name" class="form-control" type="double" placeholder="Precio">
            </div>
          </div>

          <div class="form-group">
            <label for="last_name" class="col-lg-4 control-label">Nombre:</label>
            <div class="col-lg-8">
              <input name="nombre" id="last_name" class="form-control" type="string" placeholder="Nombre">
            </div>
          </div>

          <div class="form-group">
            <label for="company" class="col-lg-4 control-label">Fecha viaje:</label>
            <div class="col-lg-8">
              <input name="fechaViaje" id="company" class="form-control" type="date" placeholder="Fecha">
            </div>
          </div>

          <div class="form-group">
            <label for="user_email" class="col-lg-4 control-label">Origen</label>
            <div class="col-lg-8">
              <input name="origen" id="user_email" class="form-control" type="string" placeholder="Origen">
            </div>
          </div>
          
          <div class="form-group">
            <label for="pass_repet" class="col-md-4 control-label">Destino:</label>
            <div class="col-md-8">
              <input name="destino" id="pass_repet" class="form-control" type="string" placeholder="Destino">
            </div>
          </div>
          
          <div class="form-group">
            <label for="pass" class="col-md-4 control-label">Fecha fin oferta:</label>
            <div class="col-md-8">
              <input name="fechaFinOferta" id="pass" class="form-control" type="date" placeholder="Fin Oferta">
            </div>
          </div>
        
          <div class="form-group">
            <label for="pass" class="col-md-4 control-label">Descripcion</label>
            <div class="col-md-8">
              <textarea name="descripcion" class="form-control" rows="5" placeholder="¡Describe tu viaje!"></textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Enviar oferta">
          </div>
         

        </form>
    


    

</div>
@endsection