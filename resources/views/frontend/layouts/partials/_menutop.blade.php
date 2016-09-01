<!-- header-starts -->
<div class="header-section">
	<!--toggle button start-->
	<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
	<!--toggle button end-->
	<!--notification menu start -->
	<div class="menu-right">
		<div class="profile_details">		
			<div class="col-md-4 serch-part">
				<div id="sb-search" class="sb-search sb-search-open">
					<form action="#" method="post">
						<input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
						<input class="sb-search-submit" type="submit" value="">
						<span class="sb-icon-search"> </span>
					</form>
				</div>
			</div>
			
			<div class="col-md-4 player">
				<div class="audio-player">
					<audio id="audio-player"  controls="controls">
						<source src="#" type="audio/ogg"></source>
					</audio>
				</div>
				
				<!--//-->
				<ul class="next-top">
					<li><a class="ar" href="#"> <img src="frontend/images/arrow.png" alt=""/></a></li>
					<li><a class="ar2" href="#"><img src="frontend/images/arrow2.png" alt=""/></i></a></li>
				</ul>	
			</div>
		        @if(Auth::check())
		        <div class="col-md-4 login-pop">
					<div id="loginpop">
						<a class="top-sign" href="{{ route('logout') }}"><i class="fa fa-sign-in"></i>
						</a>
					</div>
				</div>
				@else
				<div class="col-md-4 login-pop">
					<div id="loginpop"> <a href="#" id="loginButton"><span>{{ trans('users.signin') }} <i class="arrow glyphicon glyphicon-chevron-right"></i></span></a><a class="top-sign" href="#" data-toggle="modal" data-target="#myModal5"><i class="fa fa-sign-in"></i></a>
						@include('frontend.layouts.partials._signin')
					</div>
				</div>
				@endif
			<div class="clearfix"> </div>
		</div>
		<!-------->
	</div>
	<div class="clearfix"></div>
</div>
<!--notification menu end -->
<!-- //header-ends -->