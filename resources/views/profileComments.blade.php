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


@if($comments->count() == 0)

<div id="jumbotronWrapper">
    <div class="jumbotron jumbotron-fluid" id= "jumb">
    <div class="row">
        <div class="col-sm-10"> <h1> ¡No tienes aún ningún comentario! <h1> </div>
    </div>
</div>

@else

<div id="jumbotronWrapper">
@foreach($comments as $comment)
    <div class="jumbotron jumbotron-fluid" id= "jumb">
    
    
    <div class="row">
        <div class="col-sm-11"> <h1> Número de comentario: {{$comment->id}} <h1> </div>
        
    </div>
    
    <div class="col-sm-10">{{$comment->text}} </div>
    
    </div>
    @endforeach
</div>
@endif
@endsection