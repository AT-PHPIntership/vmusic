<!DOCTYPE HTML>
<html>
	<head>
		@include('frontend.layouts.partials._header')
	</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
    	<!-- left-side -->
      	@include('frontend.layouts.partials._sidebar')
      	<!-- //end-left-sider -->

      	<!-- sign-up -->
		@include('frontend.layouts.partials._signup')
		<!-- //end-sig-up -->

		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			@include('frontend.layouts.partials._menutop')
			<!-- //header-end -->

			<!-- page-wrapper -->
			<div id="page-wrapper">
				@yield('content')
			</div>
		</div>
		<div class="footer">
			@include('frontend.layouts.partials._footer')
		</div>
      	<!-- main content end-->
   </section>
   @include('frontend.layouts.partials._javascript')
</body>
</html>