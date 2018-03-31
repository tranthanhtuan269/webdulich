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
					<h2>Các điều khoản và điều kiện</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- Contact Form -->
			<div class="col-lg-8 offset-lg-2 col-12">
				<?php echo \App\SiteConfig::where('name', 'page_terms_and_conditions')->first()->text; ?>
			</div>
			<!--/ End Contact Form -->
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