<!DOCTYPE html>
 
<html lang="en">
 
 <head>
 
   @include('layout.profilePartials.head')
 
 </head>
 
 <body>
 
@include('layout.profilePartials.nav')
 
@include('layout.profilePartials.sidenav')

<div class="main">
@yield('content')
</div>

@include('layout.profilePartials.footer')
 
@include('layout.profilePartials.footer-scripts')
 
 </body>
 
</html>
