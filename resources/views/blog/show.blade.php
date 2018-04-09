@extends('layouts.theme')

@section('title', $blog->title)
@section('keywords', $blog->keywords)
@section('description', $blog->description)

@section('content')
<?php 
	const MAX_SIZE = 44;
	$cities = \DB::table('cities')->select('id', 'name')->where('active', 1)->get();
	$activities = \DB::table('activities')->select('id', 'name')->where('active', 1)->get();
	$durations = \DB::table('durations')->select('id', 'name')->where('active', 1)->get();
	$budgets = \DB::table('budgets')->select('id', 'name')->where('active', 1)->get();
	?>

	<!-- Breadcrumb -->
	<div class="breadcrumbs overlay" data-stellar-background-ratio="0.7">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- <ul class="list">
						<li><a href="index.html">Home</a></li>
						<li><a href="#">Blogs</a></li>
						<li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li>
					</ul>
					<h2>Blog Details Page</h2> -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Breadcrumb -->
	
	<!-- Blog Grid -->
	<section id="blog-area" class="blog-area archive classic single section">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-12">
					<div class="row">
						<div class="col-12">
							<!-- Single Blog -->
							<div class="single-blog">
								<div class="blog-head">
									<img src="{{ url('/') }}/public/images/{{ $blog->image }}" alt="{{ $blog->title }}">
								</div>
								<div class="blog-content">
									<h1><a href="{{ url('/') }}/blogs/{{ $blog->id }}/{{ $blog->slug }}">{{ $blog->title }}</a></h1>
									<div class="meta">{{ date('d-m-Y', strtotime($blog->updated_at)) }}</div>
									<?php 
										echo $blog->content;
										?>
								</div>
								@if(false)
								<div class="content-bottom">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-12">
											<!-- Tags -->
											<ul class="tags">
												<li class="tag-title">Tags:</li>
												<li><a href="#">Travel,</a></li>
												<li><a href="#">Europe</a></li>
											</ul>
											<!--/ End Tags -->
										</div>
										<div class="col-lg-6 col-md-6 col-12">
											@if(false)
											<!-- Social -->
											<ul class="social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
											<!--/ End Social -->
											@endif
										</div>
									</div>
								</div>
								@endif
							</div>
							<!--/ End Single Blog -->
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-12">
					<!-- Blog Sidebar -->
					<div class="sidebar-main">
						@if(false)
						<!-- Search -->
						<div class="single-widget search">
							<h2>Search</h2>
							<form class="form" action="#">
								<input type="text">
								<button type="submit">Search</button>
							</form>
						</div>
						<!--/ End Search -->
						@endif
						<!-- Categories -->
						<div class="single-widget categories">
							<h2>Chủ đề</h2>
							<ul class="categories-inner">
								@foreach($categories as $category)
								<li><a href="{{ url('/') }}/categories/{{ $category->id }}/{{ $category->slug }}">{{ $category->name }}</a></li>
								@endforeach
							</ul>
						</div>
						<!--/ End Categories -->
						@if(false)
						<!-- Other Trips -->
						<div class="single-widget other-trips">
							<h2>Other Trips</h2>
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
										<h4><a href="#">Estern Europe Tour</a></h4>
										<p>Lorem ipsum dolor sit amet, consectetur </p>
									</div>
								</div>
								<!--/ End Single Trip -->
								<!-- Single Trip -->
								<div class="signle-trip">
									<img src="http://via.placeholder.com/100x100" alt="#">
									<div class="text">
										<h4><a href="#">Estern Europe Tour</a></h4>
										<p>Lorem ipsum dolor sit amet, consectetur </p>
									</div>
								</div>
								<!--/ End Single Trip -->
							</div>
						</div>
						<!--/ End Other Trips -->
						@endif
						@if(false)
						<!-- Tags -->
						<div class="single-widget tags">
							<h2>Recent Tags</h2>
							<div class="tags">
								<ul>
									<li><a href="#">advice,</a></li>
									<li><a href="#">assistant,</a></li>
									<li><a href="#">employees,</a></li>
									<li><a href="#">employers,</a></li>
									<li><a href="#">life,</a></li>
									<li><a href="#">media,</a></li>
									<li><a href="#">organization,</a></li>
									<li><a href="#">quote,</a></li>
									<li><a href="#">research,</a></li>
									<li><a href="#">skills,</a></li>
									<li><a href="#">startup,</a></li>
									<li><a href="#">team,</a></li>
									<li><a href="#">tips,</a></li>
									<li><a href="#">train</a></li>
								</ul>
							</div>
						</div>
						<!--/ End Tags -->
						@endif
					</div>
					<!--/ End Blog Sidebar -->
				</div>
			</div>
		</div>
	</section>
	<!--/ End Blog Grid -->

	<!-- Clients -->
	<div id="clients" class="clients section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="clients-slider">
						@foreach($blogs as $b) 
							<div class="col-lg-12 col-12">
								<!-- Single Blog -->
								<div class="single-blog">
									<div class="blog-head">
										<img src="{{ url('/') }}/public/images/{{ $b->image }}" alt="{{ $b->title }}">
									</div>
									<div class="blog-content">
										<div><a href="{{ url('/') }}/blogs/{{ $b->id }}/{{ $b->slug }}">
										<?php
										if(strlen($b->title) > MAX_SIZE){
		                                    echo mb_strimwidth($b->title, 0, MAX_SIZE, '...');
		                                }else{
		                                    echo $b->title;
		                                }
		                                ?>
										</a></div>
									</div>
								</div>
								<!--/ End Single Blog -->
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Clients -->
@endsection