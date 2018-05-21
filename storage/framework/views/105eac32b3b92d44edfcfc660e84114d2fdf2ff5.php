
<div class="profile-userpic" >
					<img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
					<img src="/img/avatar/<?php echo e(Auth::user()->avatar); ?>" width="120px" height="120px" class="img-circle" alt="Cinque Terre"> 
					</div>
					<div class="profile-usertitle-job">
					<?php echo e(Auth::user()->nombre); ?>

					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="/profile/<?php echo e(Auth::user()['id']); ?>">
							<i class="glyphicon glyphicon-home"></i>
							Inicio </a>
						</li>
						<li>
							<a href="/profileSettings/<?php echo e(Auth::user()['id']); ?>">
							<i class="glyphicon glyphicon-cog"></i>
							Ajustes </a>
						</li>
						<li>
							<a href="/profileComments/<?php echo e(Auth::user()['id']); ?>">
							<i class="glyphicon glyphicon-comment"></i>
							Comentarios</a>
						</li>
                        <li>
							<a href="/profileOffer/<?php echo e(Auth::user()['id']); ?>">
							<i class="glyphicon glyphicon-plus"></i>
							Oferta</a>
						</li>
                       
					</ul>
				</div>