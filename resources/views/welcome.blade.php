@extends('layouts.theme')

@section('title', 'dulich.gmon.vn')

@section('content')
<section id="hero-area" class="hero-area overlay" data-stellar-background-ratio="0.7">
    <div class="hero-main">
       <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-inner">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area -->
<section id="blog-area" class="blog-area section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                    $categories = \App\Category::where('active', 1)->take(5)->orderBy('id', 'desc')->get();
                    $partners   = \App\Partner::where('active', 1)->take(5)->orderBy('id', 'desc')->get();
                    ?>
                @foreach($categories as $category)
                    <?php
                        $blogs = \App\Blog::where('category_id', $category->id)->where('active', 1)->take(3)->select('id','title', 'sub_content', 'image', 'updated_at')->orderBy('updated_at', 'desc')->get();
                        ?>
                    @if(count($blogs) > 0)
                    <ul class="list-group list-group-category">
                        <li class="list-group-item active">{{  $category->name }}<a href="{{ url('/') }}/categories/view/{{  $category->id }}" class="float-right">xem thêm >> </a></li>
                        <li class="list-group-item">
                            
                            @foreach($blogs as $blog)
                            <div class="col-lg-3 col-md-3 col-12">
                                <!-- Single Blog -->
                                <div class="single-blog">
                                    <div class="blog-head">
                                        <img src="{{ url('/') }}/public/images/{{ $blog->image }}" alt="{{ $blog->title }}">
                                    </div>
                                    <div class="blog-content">
                                        <span>{{ date('d-m-Y', strtotime($blog->updated_at)) }}</span>
                                        <h4><a href="{{ url('/') }}/blogs/view/{{ $blog->id }}">{{ $blog->title }}</a></h4>
                                        <a href="{{ url('/') }}/blogs/view/{{ $blog->id }}" class="btn">Chi tiết >></a>
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
</section>
<section id="top-destination" class="top-destination section">
    <!-- Clients -->
    <div id="clients" class="clients section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="clients-slider">
                        @foreach($partners as $partner)
                        <!-- Single Clients -->
                        <div class="single-clients">
                            <a href="{{ $partner->url }}" target="_blank"><img src="{{ url('/') }}/public/images/{{ $partner->image }}" alt="{{ $partner->name }}"></a>
                        </div>
                        <!--/ End Single Clients -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Clients -->
</section>
@endsection