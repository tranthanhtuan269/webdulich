@extends('layouts.theme')

@section('content')
<!-- Breadcrumb -->
<div class="breadcrumbs overlay" data-stellar-background-ratio="0.7">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul class="list">
					<li><a href="index.html">Home</a></li>
					<li><a href="#">Blogs</a></li>
					<li><a href="blog-single-sidebar.html">Blog Grid Sidebar</a></li>
				</ul>
				<h2>Blog Grid Style</h2>
			</div>
		</div>
	</div>
</div>
<!--/ End Breadcrumb -->

<!-- Blog Grid -->
<section id="blog-area" class="blog-area archive grid section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-12">
				<div class="row">
					@foreach($blogs as $blog) 
					<div class="col-lg-6 col-12">
						<!-- Single Blog -->
						<div class="single-blog">
							<div class="blog-head">
								<img src="{{ url('/') }}/public/images/{{ $blog->image }}" alt="{{ $blog->title }}">
							</div>
							<div class="blog-content">
								<h4><a href="{{ url('/') }}/blogs/view/{{ $blog->id }}">{{ $blog->title }}</a></h4>
								<div class="meta">{{ date('d-M-Y', strtotime($blog->updated_at)) }}</div>
								<?php 
									echo $blog->sub_content;
								?>
								<a href="{{ url('/') }}/blogs/view/{{ $blog->id }}" class="btn">Read More</a>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					@endforeach
				</div>
				@if($blogs->count() > 1)
					{{ $blogs->links() }}
					@if(false)
					<div class="row">
						<div class="col-12">
							<!-- Start Pagination -->
							<ul class="pagination">
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li class="next"><a href="#">Next</a></li>
							</ul>
							<!--/ End Pagination -->
						</div>
					</div>
					@endif
				@endif
			</div>
			<div class="col-lg-4 col-12">
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
						<h2>Categories</h2>
						<ul class="categories-inner">
							@foreach($categories as $category)
							<li><a href="{{ url('/') }}/categories/view/{{ $category->id }}">{{ $category->name }}</a></li>
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
@endsection