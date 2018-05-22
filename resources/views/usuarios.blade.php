@extends('layout.mainlayout')
<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


@section('content')

<div class= "container">
    <div class="container container-centered">
<h1> Listado de usuarios.</h1>
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

<form action="{{ route('store_user') }}" method="POST">

{{ csrf_field() }}
  
</form>

<form action="/usuarios" method="GET" role="search">
    <div class="input-group col-md-12">
        <input type="text" class="form-control input-lg" placeholder="Buscar" name="q">
        <span class="input-group-btn">
            <button class="btn btn-info btn-lg" type="submit">
                <i class="glyphicon glyphicon-search"></i>
            </button>
        </span>
    </div>
</form>
<p>
<div class = "container">
    <table id = "example" data-toggle="table" class="table table-hover">

            <thead>
              <tr>
                <th>ID</th>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Email</th>
                <th>Teléfono</th>
               
              </tr>
            </thead>
              <tbody>
            @foreach($users as $user)
              <tr>
              <td> {{ $user->id }} </td>
              <td> {{ $user->dni }} </td>
              <td> {{ $user->nombre }} </td>
              <td> {{ $user->direccion }} </td>
              <td> {{ $user->email }} </td>
              <td> {{ $user->telefono }} </td>
             

              <td>

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
                        <form action="{{ route('delete_user',['user' => $user->id]) }}"method = "POST">
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
            {{ $users->links() }}
            </tbody>
            </table>
</div>

<div class="item">
      <img class="img-responsive" src="http://www.cosasdecoches.com/wp-content/uploads/2016/07/Viajar-por-Europa.jpg" alt="New York"
      HSPACE = "61" VSPACE="50">
    </div>


@endsection
