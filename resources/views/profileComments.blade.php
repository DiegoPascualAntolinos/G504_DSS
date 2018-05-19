@extends('layout.profilelayout')
<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


@section('content')

    <form action="/profile" method="GET" role="search">
    <div class="input-group col-md-12">
        <input type="text" class="form-control input-lg" placeholder="Buscar" name="q">
        <span class="input-group-btn">
            <button class="btn btn-info btn-lg" type="submit">
                <i class="glyphicon glyphicon-search"></i>
            </button>
        </span>
    </div>
</form>



<div id="jumbotronWrapper">
foreach
    <div class="jumbotron jumbotron-fluid" id= "jumb">
    
    
    <div class="row">
        <div class="col-sm-11"> <h1> Viaje a: {{}} TU casa <h1> </div>
        <div class="col-sm-1" id="fechas-perfil"><a href = "#"> <span class="glyphicon glyphicon-eye-open"> </span> </a></div>
        
    </div>
    
    <div class="col-sm-10">El comentario escrito </div>
    
    </div>
    endforeach
</div>

@endsection