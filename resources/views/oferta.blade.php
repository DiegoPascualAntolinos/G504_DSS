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
              </tr>
            @endforeach
            {{ $offers->links() }}
            </tbody>
            </table>
</div>
@endsection
