@extends('layout.mainlayout')
@section('content')
<div class="container">
    <h1>Opiniones</h1>
    <div class="col-md-8 col-md-offset-2">
        @foreach ($comentarios as $comentario)
        <div class="forum-post" style="margin-top:2%">
            <div class="post box">
            <div class="media">
                @foreach ($usuarios as $usuario)
                    @if($usuario->id == $comentario->user_id)
                        <h3 style="margin-top:0px">{{$usuario->nombre}}
                        @break
                    @endif
                @endforeach
                    @if(Auth::user()['id'] ==  $comentario->user_id || Auth::user()['id'] == 1)
                        <a class="btn" href="/comentarios/{{$comentario->id}}">Borrar Comentario</a>
                    @endif
                    </h3>
                <span><i class="glyphicon glyphicon-time"></i>{{$comentario->created_at}}</span>
                <p style="margin-top:2%">{{$comentario->text}}</p>
            </div>
            </div>
        </div>
        @endforeach
        <div class="row row-centered">
        {{$comentarios->links()}}
        </div>
            <div class="row">
                <h2>Dejar una opinion</h2>
            </div>
            @if(Auth::check())
            <form method="POST">
            {!! csrf_field() !!}
            <div class="row">
                <textarea style="margin-bottom:2%" name="comentario" maxlength="500" cols="88" rows="6"></textarea>
            </div>
            <div class="row row-centered">
                <button type="sumbit">Enviar</button>
                @if ($errors->has('comentario'))
                                    <span class="help-block error_text">
                                        <strong>{{ $errors->first('comentario') }}</strong>
                                    </span>
                                @endif
            </div>
            </form>
            @else
            <div class="row" style="margin-bottom:4%,margin-top:2%">
                <p>Has de estar registrado para poder comentar. <a href="login">Inicia Sesion</a> o <a href="register">Regístrate</a> </p>    
            <div>
            </div>
            </div>
            @endif
    </div>
</div>
@endsection