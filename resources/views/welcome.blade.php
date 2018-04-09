@extends('layouts.theme')

<?php
    $keywords = \App\SiteConfig::where('name', 'keywords')->first();
    $description = \App\SiteConfig::where('name', 'keywords')->first();
?>
@section('title', 'dulich.gmon.vn')
@section('keywords', $keywords->text)
@section('description', $description->text)

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
<?php
    const MAX_SIZE = 44;
    $categories = \App\Category::where('active', 1)->take(5)->get();
    $partners   = \App\Partner::where('active', 1)->take(5)->orderBy('id', 'desc')->get();
    ?>
@foreach($categories as $category)
@if($category->id % 2 == 1)
<!-- Blog Area -->
<section id="blog-area" class="blog-area section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                    <?php
                        $blogs = \App\Blog::where('category_id', $category->id)->where('active', 1)->take(4)->select('id','title', 'sub_content', 'image', 'updated_at')->orderBy('updated_at', 'desc')->get();
                        ?>
                    @if(count($blogs) > 0)
                    <ul class="list-group list-group-category">
                        <li class="list-group-item active"><h2>{{  $category->name }}</h2><a href="{{ url('/') }}/categories/view/{{  $category->id }}" class="float-right">xem thêm >> </a></li>
                        <li class="list-group-item">
                            <div class="row">
                            @foreach($blogs as $blog)
                            <div class="col-lg-3 col-md-3 col-3">
                                <!-- Single Blog -->
                                <div class="single-blog">
                                    <div class="blog-head">
                                        <img src="{{ url('/') }}/public/images/{{ $blog->image }}" alt="{{ $blog->title }}">
                                    </div>
                                    <div class="blog-content">
                                        <span>{{ date('d-m-Y', strtotime($blog->updated_at)) }}</span>
                                        <h4><a href="{{ url('/') }}/blogs/view/{{ $blog->id }}">
                                        <?php 
                                        if(strlen($blog->title) > MAX_SIZE){
                                            echo mb_strimwidth($blog->title, 0, MAX_SIZE, '...');
                                        }else{
                                            echo $blog->title;
                                        }
                                        ?>
                                        </a></h4>
                                        <a href="{{ url('/') }}/blogs/view/{{ $blog->id }}" class="btn">Chi tiết >></a>
                                    </div>
                                </div>
                                <!--/ End Single Blog -->
                            </div>
                            @endforeach
                            </div>
                        </li>
                    </ul>
                    @endif
                
            </div>
        </div>
    </div>
</section>
@else
<section id="p-destination" class="p-destination section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Destination -->
                <ul class="list-group list-group-category">
                    <li class="list-group-item active text-left"><h2>{{  $category->name }}</h2><a href="{{ url('/') }}/categories/view/{{  $category->id }}" class="float-right">xem thêm >> </a></li>
                    <li class="list-group-item">
                        <div class="row">
                            @if($category->id == 2)
                                <?php
                                    $blogs = \App\Blog::where('category_id', $category->id)->where('active', 1)->take(5)->select('id','title', 'sub_content', 'image', 'updated_at')->orderBy('updated_at', 'desc')->get();
                                    ?>
                                @if(count($blogs) > 0)
                                <div class="col-lg-6 col-12 big-content">
                                    <!-- Single Destination -->
                                    <div class="single-destination overlay">
                                        <a href="{{ url('/') }}/blogs/view/{{ $blogs[0]->id }}">
                                            <img src="{{ url('/') }}/public/images/{{ $blogs[0]->image }}" alt="{{ $blogs[0]->title }}">
                                            <div class="hover">
                                                <!-- <p class="price">FROM <span>$400</span></p> -->
                                                <h4 class="name">{{ $blogs[0]->title }}</h4>
                                                <!-- <p class="location">unexplored mountains</p> -->
                                            </div>
                                        </a>
                                    </div>
                                    <!--/ End Destination -->
                                </div>
                                <div class="col-lg-6 col-12">
                                <?php $i = 0; ?>
                                @foreach($blogs as $blog)
                                <?php 
                                    $i++; 
                                    if($i == 1) continue;
                                    if($i % 2 == 0){
                                        echo '<div class="row small-group">';
                                    }
                                ?>
                                <div class="col-lg-6 col-12">
                                    <!-- Single Destination -->
                                    <div class="single-destination overlay">
                                        <a href="{{ url('/') }}/blogs/view/{{ $blog->id }}">
                                            <img src="{{ url('/') }}/public/images/{{ $blog->image }}" alt="{{ $blog->title }}">
                                            <div class="hover">
                                                <!-- <p class="price">FROM <span>$400</span></p> -->
                                                <h4 class="name">{{ $blog->title }}</h4>
                                                <!-- <p class="location">unexplored mountains</p> -->
                                            </div>
                                        </a>
                                    </div>
                                    <!--/ End Destination -->
                                </div>
                                <?php
                                    if($i % 2 == 1){
                                        echo '</div>';
                                    }
                                ?>
                                @endforeach
                                </div>
                                @endif
                            @else
                                <?php
                                    $blogs = \App\Blog::where('category_id', $category->id)->where('active', 1)->take(4)->select('id','title', 'sub_content', 'image', 'updated_at')->orderBy('updated_at', 'desc')->get();
                                    ?>
                                @if(count($blogs) > 0)
                                @foreach($blogs as $blog)
                                <div class="col-lg-3 col-12">
                                    <!-- Single Destination -->
                                    <div class="single-destination overlay">
                                        <a href="{{ url('/') }}/blogs/view/{{ $blog->id }}">
                                            <img src="{{ url('/') }}/public/images/{{ $blog->image }}" alt="{{ $blog->title }}">
                                            <div class="hover">
                                                <!-- <p class="price">FROM <span>$400</span></p> -->
                                                <h4 class="name">{{ $blog->title }}</h4>
                                                <!-- <p class="location">unexplored mountains</p> -->
                                            </div>
                                        </a>
                                    </div>
                                    <!--/ End Destination -->
                                </div>
                                @endforeach
                                @endif
                            @endif
                        </div>
                    </li>
                </ul>
                <!--/ End Destination -->
            </div>
        </div>
    </div>
</section>
@endif
@endforeach

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