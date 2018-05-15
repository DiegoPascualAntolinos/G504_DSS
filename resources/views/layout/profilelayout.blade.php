<!DOCTYPE html>
 
<html lang="en">
 
 <head>
 
   @include('layout.profilePartials.head')
 
 </head>
 
 <body>
 
  @include('layout.partials.nav')

  <div class="main" id="perfil">

    <div class="sidenav" id="mySidebar">

      @include('layout.profilePartials.sidenav')

    </div>

    <div class="main" id="contenido">

      @yield('content')
      
    </div>

  </div>

  @include('layout.profilePartials.footer')
 
  @include('layout.profilePartials.footer-scripts')
 
 </body>
 
</html>
