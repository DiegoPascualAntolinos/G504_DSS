@extends('layout.mainlayout')
<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


@section('content')
    <div class="container">
            $table->increments('id');
            $table->double('precio');
            $table->string('nombre');
            $table->date('fechaViaje');
            $table->string('origen');
            $table->string('destino');
            $table->date('fechaFinOferta');
    </div>

  


@endsection