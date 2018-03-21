<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
	<title>@yield('title')</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	
	<!-- StyleSheet -->
    <link rel="stylesheet" href="{{ url('/') }}/public/css/nice-select.css">
	<link rel="stylesheet" href="{{ url('/') }}/public/css/bootstrap.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/css/datepicker.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/css/jquery-ui.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/css/magnific-popup.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/css/font-awesome.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/css/owl-carousel.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/css/slicknav.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/css/animate.css">
	
	<!-- TravelTrek StyleSheet -->
	<link rel="stylesheet" href="{{ url('/') }}/public/css/reset.css">
	<link rel="stylesheet" href="{{ url('/') }}/public/css/style.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/css/responsive.css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="js">

	<?php 
		$siteConfig = \DB::table('site_configs')->pluck('text', 'name');
		$categories = \DB::table('categories')->select('id', 'name')->where('active', 1)->get();
		$services = \DB::table('services')->select('id', 'name')->where('active', 1)->get();
	?>
	
	<!-- Preloader -->
	<div class="cp-preloader">
		<div class="cp-preloader__box">
			<div class="cp-preloader-inner">
				<div class="icon">
					<i class="fa fa-plane"></i>
				</div>
			</div>
		</div>
	</div>
	<!-- End Preloader -->

	<!-- Header Area -->
	<header id="site-header" class="site-header">
		<!-- Start Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
						<!-- Text -->
						<p>Welcome To {{ $siteConfig['site_name'] }} Website</p>
						<!--/ End Text -->
                    </div>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Social -->
						<ul class="social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
						<!--/ End Social -->
                    </div>
				</div>
            </div>
        </div>
		<!--/ End Topbar -->
		<!-- Middle Header -->
		<div class="middle-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.html"><img src="{{ url('/') }}/public/images/logo.png" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-9 col-md-9 col-12">
						<!-- Header Widget -->
						<div class="header-widget">
							<!-- Single Widget -->
							<div class="single-widget">
								<img src="{{ url('/') }}/public/images/location-icon.png" alt="#">
								<h4>{{ $siteConfig['address1'] }}</h4>
								<p>{{ $siteConfig['address2'] }}</p>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget">
								<img src="{{ url('/') }}/public/images/call-icon.png" alt="#">
								<h4>{{ $siteConfig['phone1'] }}</h4>
								<p>{{ $siteConfig['phone2'] }}</p>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget">
								<img src="{{ url('/') }}/public/images/clock-icon.png" alt="#">
								<h4>{{ $siteConfig['open_time'] }}</h4>
								<p>{{ $siteConfig['close_time'] }}</p>
							</div>
							<!--/ End Single Widget -->
						</div>
						<!--/ End Header Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Middle Header -->
		<!-- Header Bottom -->
		<div class="header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- Main Menu -->
						<div class="main-menu">
							<nav class="navigation">
								<ul class="nav menu">
									<li class="active"><a href="{{ url('/') }}">Home</a>
									</li>
									<li><a href="#">Trip package<i class="fa fa-angle-down"></i></a>
										<ul class="dropdown">
											@foreach($categories as $category)
											<li><a href="{{ url('/') }}/category/{{ $category->id }}">{{ $category->name }}</a></li>
											@endforeach
										</ul>
									</li>
									<li><a href="#">Services<i class="fa fa-angle-down"></i></a>
										<ul class="dropdown">
											@foreach($services as $service)
											<li><a href="{{ url('/') }}/service/{{ $service->id }}">{{ $service->name }}</a></li>
											@endforeach
										</ul>
									</li>
									@if(false)
									<li><a href="#">Pages<i class="fa fa-angle-down"></i></a>
										<ul class="dropdown">
											<li><a href="about.html">About Us</a></li>
											<li><a href="destinations.html">Destinations</a></li>
											<li><a href="team.html">Team</a></li>
											<li><a href="testimonials.html">Testimonials</a></li>
											<li><a href="faq.html">Faq</a></li>
											<li><a href="404.html">404 Page</a></li>
										</ul>
									</li>
									@endif
									<li><a href="#">Blogs<i class="fa fa-angle-down"></i></a>
										<ul class="dropdown">
											@foreach($categories as $category)
											<li><a href="{{ url('/') }}/category/{{ $category->id }}">{{ $category->name }}</a></li>
											@endforeach
										</ul>
									</li>
									<li><a href="{{ url('/') }}/contacts/create">Contact Us</a></li>
								</ul>
							</nav>
						</div>
						<!--/ End Main Menu -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Bottom -->
    </header>
	<!--/ End Header Area -->
	
	@yield('content')
	@if(false)
	<!-- Clients -->
	<div id="clients" class="clients section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="clients-slider">
						<!-- Single Clients -->
						<div class="single-clients">
							<a href="#" target="_blank"><img src="http://via.placeholder.com/220x60" alt="#"></a>
						</div>
						<!--/ End Single Clients -->
						<!-- Single Clients -->
						<div class="single-clients active">
							<a href="#" target="_blank"><img src="http://via.placeholder.com/220x60" alt="#"></a>
						</div>
						<!--/ End Single Clients -->
						<!-- Single Clients -->
						<div class="single-clients">
							<a href="#" target="_blank"><img src="http://via.placeholder.com/220x60" alt="#"></a>
						</div>
						<!--/ End Single Clients -->
						<!-- Single Clients -->
						<div class="single-clients">
							<a href="#" target="_blank"><img src="http://via.placeholder.com/220x60" alt="#"></a>
						</div>
						<!--/ End Single Clients -->
						<!-- Single Clients -->
						<div class="single-clients">
							<a href="#" target="_blank"><img src="http://via.placeholder.com/220x60" alt="#"></a>
						</div>
						<!--/ End Single Clients -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Clients -->
	@endif
	<!-- Footer -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-widget">
							<h2>Company</h2>
							<ul>
								<li><a href="about.html">About Our Company</a></li>
								<li><a href="services.html">Our Services</a></li>
								<li><a href="testimonials.html">Testimonials</a></li>
								<li><a href="contact.html">Work with Us</a></li>
							</ul>
						</div>
						<!--/ End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-widget">
							<h2>Reservation</h2>
							<ul>
								<li><a href="#">Terms and Conditions</a></li>
								<li><a href="#">Copyright</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Disclaimer</a></li>
							</ul>
						</div>
						<!--/ End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-widget gallery">
							<h2>Gallery Image</h2>
							<ul class="list">
								<li><a href="http://via.placeholder.com/800x450" data-fancybox="photo"><img src="http://via.placeholder.com/800x450" alt="#"></a></li>
								<li><a href="http://via.placeholder.com/800x450" data-fancybox="photo"><img src="http://via.placeholder.com/800x450" alt="#"></a></li>
								<li><a href="http://via.placeholder.com/800x450" data-fancybox="photo"><img src="http://via.placeholder.com/800x450" alt="#"></a></li>
								<li><a href="http://via.placeholder.com/800x450" data-fancybox="photo"><img src="http://via.placeholder.com/800x450" alt="#"></a></li>
								<li><a href="http://via.placeholder.com/800x450" data-fancybox="photo"><img src="http://via.placeholder.com/800x450" alt="#"></a></li>
								<li><a href="http://via.placeholder.com/800x450" data-fancybox="photo"><img src="http://via.placeholder.com/800x450" alt="#"></a></li>
							</ul>
						</div>
						<!--/ End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-widget about">
							<img src="{{ url('/') }}/public/images/logo2.png" alt="#">
							<p>At Revirta, we hire US-based, detail-oriented people who strive to provide our clients with the best assistance.</p>
						</div>
						<!--/ End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Footer Top -->
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bottom-inner">
							<div class="row">
								<div class="col-lg-8 col-md-8 col-12">
									<!-- Copyright -->
									<div class="copyright"> 
										<p>Copyright &#9400; 2018 by <a href="#">{{ $siteConfig['copyright'] }}.</a> All Right Reserved</p>
									</div>
									<!--/ End Copyright -->
								</div>
								<div class="col-lg-4 col-md-4 col-12">
									<!-- Social -->
									<ul class="social">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
									<!--/ End Social -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Footer Bottom -->
	</footer>
	<!--/ End footer -->
 
	<!-- Jquery -->
    <script src="{{ url('/') }}/public/js/jquery.min.js"></script>
    <script src="{{ url('/') }}/public/js/jquery-migrate-3.0.0.js"></script>
	<script src="{{ url('/') }}/public/js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="{{ url('/') }}/public/js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="{{ url('/') }}/public/js/bootstrap.min.js"></script>
	<!-- Bootstrap Datepicker JS -->
	<script src="{{ url('/') }}/public/js/bootstrap-datepicker.js"></script>
	<!-- Steller JS -->
	<script src="{{ url('/') }}/public/js/steller.js"></script>
	<!-- Fancybox JS -->
	<script src="{{ url('/') }}/public/js/facnybox.min.js"></script>
	<!-- Circle Progress JS -->
	<script src="{{ url('/') }}/public/js/circle-progress.min.js"></script>
	<!-- Slicknav JS -->
	<script src="{{ url('/') }}/public/js/slicknav.min.js"></script>
	<!-- Niceselect JS -->
	<script src="{{ url('/') }}/public/js/niceselect.js"></script>
	<!-- Owl Carousel JS -->
	<script src="{{ url('/') }}/public/js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="{{ url('/') }}/public/js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="{{ url('/') }}/public/js/waypoints.min.js"></script>
	<!-- Wow Min JS -->
	<script src="{{ url('/') }}/public/js/wow.min.js"></script>
	<!-- Jquery Counterup JS -->
	<script src="{{ url('/') }}/public/js/jquery-counterup.min.js"></script>
	<!-- Ytplayer JS -->
	<script src="{{ url('/') }}/public/js/ytplayer.min.js"></script>
	<!-- ScrollUp JS -->
	<script src="{{ url('/') }}/public/js/scrollup.js"></script>
	<!-- Easing JS -->
	<script src="{{ url('/') }}/public/js/easing.js"></script>
	<!-- Google Map JS -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM"></script>	
	<script src="{{ url('/') }}/public/js/gmap.min.js"></script>
	<!-- Active JS -->
	<script src="{{ url('/') }}/public/js/active.js"></script>
	<script type="text/javascript">
		// setTimeout(function(){
		//    window.location.reload(1);
		// }, 5000);
	</script>
</body>
</html>