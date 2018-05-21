
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/main">DSStinos</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/vuelos">Vuelos</a></li>
      <li class="active"><a href="/oferta">Ofertas</a></li>
      <li class="active"><a href="/hoteles">Hoteles</a></li>
      <li class="active"><a href="/ciudades">Ciudades</a></li>
      <li class="active"><a href="/reservas">¡Reserva!</a></li>
      <li><a href="/imagenes">Galería</a></li>
      
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
                       <?php if(auth()->guard()->guest()): ?>
                           <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                           <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                           &nbsp; &nbsp;
                       <?php else: ?>

                           <?php if(Auth::user()['id'] == 1): ?>                        
                               <li class="dropdown">
                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                       <?php echo e(Auth::user()->nombre); ?> <span class="caret"></span>
                                   </a>

                                   <ul class="dropdown-menu">
                                       <li>
                                           <a href="<?php echo e(route('logout')); ?>"
                                               onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">Logout</a>
                                           <a href="/admin">Admin</a> 
                                           
                                        
                                           
                                       

                                           <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                               <?php echo e(csrf_field()); ?>

                                           </form>
                                       </li>
                                   </ul>
                               </li>
                           <?php else: ?>
                           <li class="dropdown">
                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                       <?php echo e(Auth::user()->nombre); ?> <span class="caret"></span>
                                   </a>

                                   <ul class="dropdown-menu">
                                       <li>
                                           <a href="<?php echo e(route('logout')); ?>"
                                               onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">Logout</a>
                                           
                                           <a href="/profile/<?php echo e(Auth::user()['id']); ?>">Mi perfil</a>
                                           
                                       

                                           <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                               <?php echo e(csrf_field()); ?>

                                           </form>
                                       </li>
                                   </ul>
                               </li>
                           <?php endif; ?>
                       <?php endif; ?>
                   </ul>
               </div>
           </div>
</nav>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>


     
    </div>
  </div>
</nav>
