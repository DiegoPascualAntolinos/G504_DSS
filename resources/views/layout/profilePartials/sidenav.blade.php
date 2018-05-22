
<div class="profile-userpic" >
					<img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
					<img src="/img/avatar/{{Auth::user()->avatar}}" width="120px" height="120px" class="img-circle" alt="Cinque Terre"> 
					</div>
					<div class="profile-usertitle-job">
					{{Auth::user()->nombre}}
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="/profile/{{Auth::user()['id']}}">
							<i class="glyphicon glyphicon-home"></i>
							Inicio </a>
						</li>
						<li>
							<a href="/profileSettings/{{Auth::user()['id']}}">
							<i class="glyphicon glyphicon-cog"></i>
							Ajustes </a>
						</li>
						<li>
							<a href="/profileComments/{{Auth::user()['id']}}">
							<i class="glyphicon glyphicon-comment"></i>
							Comentarios</a>
						</li>
                        <li>
							<a href="/profileOffer/{{Auth::user()['id']}}">
							<i class="glyphicon glyphicon-plus"></i>
							Oferta</a>
						</li>
                       
					</ul>
				</div>