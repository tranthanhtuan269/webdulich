@extends('layouts.theme')

@section('content')
<!-- Breadcrumb -->
<div class="breadcrumbs overlay" data-stellar-background-ratio="0.7">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul class="list">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li><a href="{{ url('/') }}/services/">Services</a></li>
					<li><a href="{{ url('/') }}/services/view/{{ $service->id }}">Service Single</a></li>
				</ul>
				<h2>Services Single Page</h2>
			</div>
		</div>
	</div>
</div>
<!--/ End Breadcrumb -->

<!-- Service Single -->
<section id="services" class="services single section archive">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-12">
				<!-- single service -->
				<div class="single-service">
					<img src="{{ url('/') }}/public/images/{{ $service->image }}" alt="{{ $service->name }}">
					<h2><a href="{{ url('/') }}/services/view/{{ $service->id }}">{{ $service->name }}</a></h2>
					<div class="content">
						<?php echo $service->content; ?>
					</div>
				</div>
				<!--/ End single service -->
			</div>
			<div class="col-lg-4 col-12">
				<!-- Trip Sidebar -->
				<div class="sidebar-main">
					<!-- Trip Categories -->
					<div class="single-widget categories">
						<h2>Categories</h2>
						<ul>
							<li><a href="#">Estern Europe Tour<span>(6)</span></a></li>
							<li><a href="#">Australian Tour<span>(3)</span></a></li>
							<li><a href="#">Treasure of Europe<span>(7)</span></a></li>
							<li><a href="#">Classic Thailand Tour<span>(8)</span></a></li>
							<li><a href="#">Triangle of Europe<span>(3)</span></a></li>
							<li><a href="#">Maldives Beach<span>(2)</span></a></li>
						</ul>
					</div>
					<!--/ End Trip Categories -->
					<!-- Other Trips -->
					<div class="single-widget other-trips">
						<h2>More Trips</h2>
						<div class="trips">
							<!-- Single Trip -->
							<div class="signle-trip">
								<img src="http://via.placeholder.com/100x100" alt="#">
								<div class="text">
									<h4><a href="#">Estern Europe Tour</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur </p>
								</div>
							</div>
							<!--/ End Single Trip -->
							<!-- Single Trip -->
							<div class="signle-trip">
								<img src="http://via.placeholder.com/100x100" alt="#">
								<div class="text">
									<h4><a href="#">Middle East Tour</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur </p>
								</div>
							</div>
							<!--/ End Single Trip -->
							<!-- Single Trip -->
							<div class="signle-trip">
								<img src="http://via.placeholder.com/100x100" alt="#">
								<div class="text">
									<h4><a href="#">Awesome London Tour</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur </p>
								</div>
							</div>
							<!--/ End Single Trip -->
						</div>
					</div>
					<!--/ End Other Trips -->
				</div>
				<!--/ End Trip Sidebar -->
			</div>
		</div>
	</div>
</section>
<!--/ End Services -->
@endsection