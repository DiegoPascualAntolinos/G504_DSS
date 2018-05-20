
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/main">DSStinos</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/vuelos">Vuelos</a></li>
      <li class="active"><a href="/oferta">Ofertas</a></li>
      <li class="active"><a href="/hoteles">Hoteles</a></li>
      <li class="active"><a href="/imagenes">Galería</a></li>
      
      </ul>
      <ul class= "nav navbar-nav navbar-right">
     
      <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            &nbsp; &nbsp;
                        @else

                            @if(Auth::user()['id'] == 1)                        
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                        {{ Auth::user()->nombre }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">Logout</a>
                                            <a href="/admin">Admin</a> 
                                            
                                            <a href="/profile">Mi perfil</a>
                                            
                                        

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @else
                            <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                        {{ Auth::user()->nombre }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">Logout</a>
                                            
                                            <a href="/profile/{{Auth::user()['id']}}">Mi perfil</a>
                                            
                                        

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


     
    </div>
  </div>
</nav>