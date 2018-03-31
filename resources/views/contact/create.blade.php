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
					<h2>Liên hệ với chúng tôi</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- Contact Form -->
			<div class="col-lg-8 offset-lg-2 col-12">
				{{ Form::open(['route' => 'contact.store']) }}
                    @if($errors->any())
		   				<div class="form-group">
							<label for="message" class="col-sm-offset-2 col-sm-10 text-danger">{{ $errors->first() }} </label>
						</div>
					@endif
					@if(session()->has('message'))
					    <div class="alert alert-success">
					        {{ session()->get('message') }}
					    </div>
					@endif
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
								<button type="submit" class="btn primary">Gửi email</button>
							</div>
						</div>
					</div>
				{!! Form::close() !!}
			</div>
			<!--/ End Contact Form -->
		</div>
	</div>
</section>
<!--/ End Contact -->
@if(false)
<!-- Map Section -->
<div class="map-section">
	<div id="myMap"></div>
</div>
<!--/ End Map Section -->
@endif
@endsection