@extends('layouts.theme')

@section('title', 'dulich.gmon.vn')

@section('content')
<?php 
    $url_path = 'http://dulich.gmon.vn';
    ?>
<!-- Blog Area -->
<section id="blog-area" class="blog-area section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                    $categories = \App\Category::where('active', 1)->take(5)->orderBy('id', 'desc')->get();
                    ?>
                @foreach($categories as $category)
                    <?php
                        $blogs = \App\Blog::where('category_id', $category->id)->take(3)->select('id','title', 'sub_content', 'image', 'updated_at')->orderBy('updated_at', 'desc')->get();
                        ?>
                    @if(count($blogs) > 0)
                    <ul class="list-group list-group-category">
                        <li class="list-group-item active">{{  $category->name }}<a href="{{ url('/') }}/categories/view/{{  $category->id }}" class="float-right">xem thêm >> </a></li>
                        <li class="list-group-item">
                            
                            @foreach($blogs as $blog)
                            <div class="col-lg-4 col-md-4 col-12">
                                <!-- Single Blog -->
                                <div class="single-blog">
                                    <div class="blog-head">
                                        <img src="{{ $url_path }}/public/images/{{ $blog->image }}" alt="{{ $blog->title }}">
                                    </div>
                                    <div class="blog-content">
                                        <span>{{ date('M d Y', strtotime($blog->updated_at)) }}</span>
                                        <h4><a href="{{ $url_path }}/blogs/view/{{ $blog->id }}">{{ $blog->title }}</a></h4>
                                        <a href="{{ $url_path }}/blogs/view/{{ $blog->id }}" class="btn">Read More</a>
                                    </div>
                                </div>
                                <!--/ End Single Blog -->
                            </div>
                            @endforeach
                        </li>
                    </ul>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            
        </div>
    </div>
</section>
@endsection