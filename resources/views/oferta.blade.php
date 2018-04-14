@extends('layout.mainlayout')
<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


@section('content')

@section('content')
<div class = "container">
    <table id = "example" data-toggle="table" class="table table-striped table-bordered tablesorter">

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
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
              <tbody>
            @foreach($clase as $elegido)
              <tr>
               <td> {{$i = $elegido->id}} </td>
              <td> {{$elegido->nombre}} </td>
              <td> {{$elegido->fechaViaje}} </td>
              <td> {{$elegido->fechaFinOferta}} </td>
              <td> {{$elegido->origen}} </td>
              <td> {{$elegido->destino}} </td>
              <td> {{$elegido->descripcion}} </td>
              <td> {{$elegido->precio}} </td>
              </tr>
            @endforeach
            </tbody>
            {{$clase->links()}}
            </table>
</div>
@endsection
