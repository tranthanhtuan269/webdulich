@extends('layouts.theme')

@section('title', 'dulich.gmon.vn')

@section('content')
<?php 
	$siteConfig = \DB::table('site_configs')->pluck('text', 'name');
?>
<!-- Breadcrumb -->
<div class="breadcrumbs overlay" data-stellar-background-ratio="0.7">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul class="list">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li><a href="{{ url('/') }}/contact-us">Contact</a></li>
				</ul>
				<h2>Contact Us</h2>
			</div>
		</div>
	</div>
</div>
<!--/ End Breadcrumb -->

<!-- Start Contact -->
<section id="contact-us" class="contact-us section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title-line center">
					<p>our information</p>
					<h2>Contact <span>Us</span></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- Contact Form -->
			<div class="col-lg-8 offset-lg-2 col-12">
				<form class="form" method="post" action="mail/mail.php">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<input type="text" name="name" placeholder="Name" required="required">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<input type="email" name="email" placeholder="Email" required="required">
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<input type="text" name="subject" placeholder="Subject" required="required">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="message" rows="8" placeholder="Your Message" ></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group button">	
								<button type="submit" class="btn primary">Send Message</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<!--/ End Contact Form -->
			<div class="col-lg-12">
				<div class="contact">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<!-- Single Contact -->
							<div class="single-contact">
								<img src="{{ url('/') }}/public/images/location-icon.png" alt="#">
								<h4>Our Location</h4>
								<p>87 Rue Jeanne St, House 20, Block E, Nancy Middlesex, London</p>
							</div>
							<!--/ End Single Contact -->
						</div>
						<div class="col-lg-4 col-md-4 col-12">
							<!-- Single Contact -->
							<div class="single-contact">
								<img src="{{ url('/') }}/public/images/call-icon.png" alt="#">
								<h4>Contact Us</h4>
								<p>Telephone: +012 345 678990</p>
								<p><a href="mailto:info@yourwebsite.com">Email: info@yourwebsite.com</a></p>
							</div>
							<!--/ End Single Contact -->
						</div>
						<div class="col-lg-4 col-md-4 col-12">
							<!-- Single Contact -->
							<div class="single-contact">
								<img src="{{ url('/') }}/public/images/clock-icon.png" alt="#">
								<h4>Working Times</h4>
								<p>Monday - Friday: 9:00AM -19:00PM<span>Sunday Close</span></p>
							</div>
							<!--/ End Single Contact -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Contact -->

<!-- Map Section -->
<div class="map-section">
	<div id="myMap"></div>
</div>
<!--/ End Map Section -->
@endsection