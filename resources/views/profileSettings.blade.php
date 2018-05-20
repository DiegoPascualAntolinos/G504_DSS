@extends('layout.profilelayout')
<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


@section('content')

<div class="container" id="contenido">
    
<form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="first_name" class="col-lg-4 control-label">Foto de perfil:</label>
            <div class="col-lg-8">
                  <div class="input-group">
                    <span class="input-group-btn">
                      <span class="btn btn-default btn-file">
                          Browse… <input type="file" id="imgInp">
                      </span>
                      </span>
                      <input type="text" class="form-control" readonly>
                    </div>
                    <img id='img-upload'/>
                  </div>
          </div>
          <div class="form-group">
            <label for="first_name" class="col-lg-4 control-label">Nombre:</label>
            <div class="col-lg-8">
              <input  id="first_name" class="form-control" type="text" placeholder="Nuevo nombre">
            </div>
          </div>
          <div class="form-group">
            <label for="last_name" class="col-lg-4 control-label">DNI:</label>
            <div class="col-lg-8">
              <input  id="last_name" class="form-control" type="text" placeholder="Nuevo DNI">
            </div>
          </div>
          <div class="form-group">
            <label for="company" class="col-lg-4 control-label">Dirección:</label>
            <div class="col-lg-8">
              <input id="company" class="form-control" type="text" placeholder="Nuevo lugar">
            </div>
          </div>
          <div class="form-group">
            <label for="user_email" class="col-lg-4 control-label">Email:</label>
            <div class="col-lg-8">
              <input id="user_email" class="form-control" type="text" placeholder="Nuevo email">
            </div>
          </div>
          
          <div class="form-group">
            <label for="pass_repet" class="col-md-4 control-label">Telefono:</label>
            <div class="col-md-8">
              <input  id="pass_repet" class="form-control" type="text" placeholder="telefono">
            </div>
          </div>
          
          <div class="form-group">
            <label for="pass" class="col-md-4 control-label">Contraseña:</label>
            <div class="col-md-8">
              <input id="pass" class="form-control" type="password" placeholder="Nueva contraseña">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="Guardar cambios">
          </div>
        </form>
    


    

</div>
@endsection