@extends('layouts.theme')

@section('title', 'dulich.gmon.vn')

@section('content')
<?php 
    $siteConfig = \DB::table('site_configs')->pluck('text', 'name');
    $cities = \DB::table('cities')->select('id', 'name')->where('active', 1)->get();
    $activities = \DB::table('activities')->select('id', 'name')->where('active', 1)->get();
    $durations = \DB::table('durations')->select('id', 'name')->where('active', 1)->get();
    $budgets = \DB::table('budgets')->select('id', 'name')->where('active', 1)->get();    
    ?>
<!-- Hero Area -->
<section id="hero-area" class="hero-area overlay" data-stellar-background-ratio="0.7">
    <div class="hero-main">
       <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-inner">
                        <!-- Welcome Text -->
                        <div class="welcome-text">  
                            <p># 1 Most loved by everyone</p>
                            <h1>Simply the Best</h1>
                        </div>
                        <!--/ End Welcome Text -->
                        <!-- Search Form -->
                        <div class="trip-search">
                            <form class="form">
                                <!-- Form Destination -->
                                <div class="form-group">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><img src="{{ url('/') }}/public/images/destination-icon.png" alt="#">Destination</span>
                                        <ul class="list">
                                            @foreach($cities as $city)
                                            <li data-value="{{ $city->id }}" class="option">{{ $city->name }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Destination -->
                                <!-- Form Activities -->
                                <div class="form-group">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><img src="{{ url('/') }}/public/images/activities-icon.png" alt="#">Activities</span>
                                        <ul class="list">
                                            @foreach($activities as $activity)
                                            <li data-value="{{ $activity->id }}" class="option">{{ $activity->name }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Activities -->
                                <!-- Form Duration -->
                                <div class="form-group duration">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><img src="{{ url('/') }}/public/images/duration-icon.png" alt="#">Duration</span>
                                        <ul class="list">
                                            @foreach($durations as $duration)
                                            <li data-value="{{ $duration->id }}" class="option">{{ $duration->name }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Duration -->
                                <!-- Form Budget -->
                                <div class="form-group">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><img src="{{ url('/') }}/public/images/budget-icon.png" alt="#">Budget</span>
                                        <ul class="list">
                                            @foreach($budgets as $budget)
                                            <li data-value="{{ $budget->id }}" class="option">{{ $budget->name }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Budget -->
                                <!-- Form Button -->
                                <div class="form-group button">
                                    <button type="submit" class="btn">Search</button>
                                </div>
                                <!--/ End Form Button -->
                            </form>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Hero Area -->

@if($siteConfig['about_us'] == '1')
<!-- About Us -->
<section id="about-us" class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <!-- About Left -->
                <div class="about-left">
                    <img src="{{ url('/') }}/public/images/home/image1.jpg" alt="#">
                </div>
                <!--/ End About Left -->
            </div>
            <div class="col-lg-6 col-12">   
                <!-- About Right -->
                <div class="about-right">
                    <div class="title-line">
                        <p>about company</p>
                        <h2>Worthy time spent <span>around the world with traveltrek.</span></h2>
                    </div>
                    <div class="about-main">
                        <p>The average employee is wasting between 50%-80% of their day on non-work related distractions. Time wasted is money wasted, that's money that could stay in your pocket simply by changing the way you assign your tasks.</p>
                        <!-- Skill Main -->
                        <div class="skill-main">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <!-- Single Skill -->
                                    <div class="single-skill">
                                        <div class="circle" data-value="1" data-size="130">
                                            <strong>100%</strong>
                                        </div>
                                        <h4>Satisfied <span>Clients</span></h4>
                                    </div>
                                    <!--/ End Single Skill -->
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <!-- Single Skill -->
                                    <div class="single-skill">
                                        <div class="circle" data-value="0.75" data-size="130">
                                            <strong>75%</strong>
                                        </div>
                                        <h4>Advanced <span>Booking</span></h4>
                                    </div>
                                    <!--/ End Single Skill -->
                                </div>
                            </div>
                        </div>
                        <!--/ End Skill Main -->
                    </div>
                </div>
                <!--/ End About Right -->
            </div>
        </div>
    </div>
</section>
<!--/ End Main Area -->
@endif
@if($siteConfig['popular_destinations'] == '1')
<!-- Popular Destination -->
<section id="p-destination" class="p-destination section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-line center">
                    <p>World's best tourist destinations</p>
                    <h2>Popular Destinations <span>Offered</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Destination -->
                <div class="destination-main">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <!-- Single Destination -->
                            <div class="single-destination overlay">
                                <img src="{{ url('/') }}/public/images/home/image2.jpg" alt="#">
                                <div class="hover">
                                    <p class="price">FROM <span>$355</span></p>
                                    <h4 class="name">London</h4>
                                    <p class="location">unexplored mountains</p>
                                </div>
                            </div>
                            <!--/ End Destination -->
                        </div>
                        <div class="col-lg-3 col-12">
                            <!-- Single Destination -->
                            <div class="single-destination overlay">
                                <img src="{{ url('/') }}/public/images/home/image3.jpg" alt="#">
                                <div class="hover">
                                    <p class="price">FROM <span>$400</span></p>
                                    <h4 class="name">Greece</h4>
                                    <p class="location">unexplored mountains</p>
                                </div>
                            </div>
                            <!--/ End Destination -->
                        </div>
                        <div class="col-lg-3 col-12">
                            <!-- Single Destination -->
                            <div class="single-destination overlay">
                                <img src="{{ url('/') }}/public/images/home/image4.jpg" alt="#">
                                <div class="hover">
                                    <p class="price">FROM <span>$370</span></p>
                                    <h4 class="name">Germany</h4>
                                    <p class="location">unexplored mountains</p>
                                </div>
                            </div>
                            <!--/ End Destination -->
                        </div>
                        <div class="col-lg-3 col-12">
                            <!-- Single Destination -->
                            <div class="single-destination overlay">
                                <img src="{{ url('/') }}/public/images/home/image5.jpg" alt="#">
                                <div class="hover">
                                    <p class="price">FROM <span>$200</span></p>
                                    <h4 class="name">Budapest</h4>
                                    <p class="location">unexplored mountains</p>
                                </div>
                            </div>
                            <!--/ End Destination -->
                        </div>
                        <div class="col-lg-3 col-12">
                            <!-- Single Destination -->
                            <div class="single-destination overlay">
                                <img src="{{ url('/') }}/public/images/home/image6.jpg" alt="#">
                                <div class="hover">
                                    <p class="price">FROM <span>$150</span></p>
                                    <h4 class="name">Italy</h4>
                                    <p class="location">unexplored mountains</p>
                                </div>
                            </div>
                            <!--/ End Destination -->
                        </div>
                        <div class="col-lg-6 col-12">
                            <!-- Single Destination -->
                            <div class="single-destination overlay">
                                <img src="{{ url('/') }}/public/images/home/image7.jpg" alt="#">
                                <div class="hover">
                                    <p class="price">FROM <span>$800</span></p>
                                    <h4 class="name">Switzerland</h4>
                                    <p class="location">unexplored mountains</p>
                                </div>
                            </div>
                            <!--/ End Destination -->
                        </div>
                    </div>
                </div>
                <!--/ End Destination -->
            </div>
        </div>
    </div>
</section>
<!--/ End Popular Destination -->
@endif
@if($siteConfig['popular_trips'] == '1')
<!-- Popular Trips -->
<section id="popular-trips" class="popular-trips section overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-12">
                <div class="title-line">
                    <p>Popular Trips</p>
                    <h2>Worthy time spent<span>around the world</span></h2>
                    <p class="text">The average employee is wasting between 50%-80% of their day on non-work related distractions. Time wasted is money wasted, that's money that could stay in your pocket simply by changing the way you assign your tasks.</p>
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-12">
                <div class="trips-main">
                    <!-- Trips Slider -->
                    <div class="trips-slider">
                        <!-- Single Slider -->
                        <div class="single-slider">
                            <div class="trip-head">
                                <img src="{{ url('/') }}/public/images/home/image8.jpg" alt="#">
                            </div>
                            <div class="trip-details">
                                <div class="left">
                                    <h4><a href="trip-single.html">Snorkel Tour in Grand Turks Coral Reef</a></h4>
                                    <p><i class="fa fa-clock-o"></i>3 Nights 4 Days</p>
                                </div>
                                <div class="right">
                                    <p>From<span>$300</span></p>
                                </div>
                                <a href="trip-single.html" class="btn">View More</a>
                            </div>
                        </div>
                        <!--/ End Single Trips -->
                        <!-- Single Slider -->
                        <div class="single-slider">
                            <div class="trip-head">                                 
                                <div class="trip-offer">25% OFF</div>
                                <img src="{{ url('/') }}/public/images/home/image9.jpg" alt="#">
                            </div>
                            <div class="trip-details">
                                <div class="left">
                                    <h4><a href="trip-single.html">Awesome tour package in pattaya</a></h4>
                                    <p><i class="fa fa-clock-o"></i>2 Nights 3 Days</p>
                                </div>
                                <div class="right">
                                    <p>From<span>$200</span></p>
                                </div>
                                <a href="trip-single.html" class="btn">View More</a>
                            </div>
                        </div>
                        <!--/ End Single Trips -->
                        <!-- Single Slider -->
                        <div class="single-slider">
                            <div class="trip-head">
                                <img src="{{ url('/') }}/public/images/home/image10.jpg" alt="#">
                            </div>
                            <div class="trip-details">
                                <div class="left">
                                    <h4><a href="trip-single.html">Tour package in Greenville, Carolina</a></h4>
                                    <p><i class="fa fa-clock-o"></i>5 Nights 6 Days</p>
                                </div>
                                <div class="right">
                                    <p>From<span>$800</span></p>
                                </div>
                                <a href="trip-single.html" class="btn">View More</a>
                            </div>
                        </div>
                        <!--/ End Single Trips -->
                        <!-- Single Slider -->
                        <div class="single-slider">
                            <div class="trip-head">
                                <img src="{{ url('/') }}/public/images/home/image8.jpg" alt="#">
                            </div>
                            <div class="trip-details">
                                <div class="left">
                                    <h4><a href="trip-single.html">Crazy Winter tour in everest</a></h4>
                                    <p><i class="fa fa-clock-o"></i>3 Nights 4 Days</p>
                                </div>
                                <div class="right">
                                    <p>From<span>$300</span></p>
                                </div>
                                <a href="trip-single.html" class="btn">View More</a>
                            </div>
                        </div>
                        <!--/ End Single Trips -->
                        <!-- Single Slider -->
                        <div class="single-slider">
                            <div class="trip-head">
                                <div class="trip-offer">50% OFF</div>
                                <img src="{{ url('/') }}/public/images/home/image9.jpg" alt="#">
                            </div>
                            <div class="trip-details">
                                <div class="left">
                                    <h4><a href="trip-single.html">Snorkel Tour in Grand Turks Coral Reef</a></h4>
                                    <p><i class="fa fa-clock-o"></i>4 Nights 5 Days</p>
                                </div>
                                <div class="right">
                                    <p>From<span>$500</span></p>
                                </div>
                                <a href="trip-single.html" class="btn">View More</a>
                            </div>
                        </div>
                        <!--/ End Single Trips -->
                        <!-- Single Slider -->
                        <div class="single-slider">
                            <div class="trip-head">
                                <img src="{{ url('/') }}/public/images/home/image10.jpg" alt="#">
                            </div>
                            <div class="trip-details">
                                <div class="left">
                                    <h4><a href="trip-single.html">Tour package in Greenville, Carolina</a></h4>
                                    <p><i class="fa fa-clock-o"></i>5 Nights 6 Days</p>
                                </div>
                                <div class="right">
                                    <p>From<span>$800</span></p>
                                </div>
                                <a href="trip-single.html" class="btn">View More</a>
                            </div>
                        </div>
                        <!--/ End Single Trips -->
                    </div>
                    <!--/ End Trips Slider -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Popular Trips -->
@endif
@if($siteConfig['popular_destinations'] == '1')
<!-- Top Destination -->
<section id="top-destination" class="top-destination section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-line center">
                    <p>World's best tourist destinations</p>
                    <h2><span>Book your Trip</span>Top Destination</h2>
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Destination Tab -->
                <div class="destination-inner">
                    <!-- Nav Tab  -->                                                                                                   
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#t-tab1" role="tab">East Europe</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#t-tab2" role="tab">West Europe</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#t-tab3" role="tab">Caribbean & Mexico</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#t-tab4" role="tab">America & Cananda</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#t-tab5" role="tab">Euroasia</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#t-tab6" role="tab">Russia</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#t-tab7" role="tab">Elsewhere</a></li>
                    </ul>
                    <!--/ End Nav Tab -->
                    <div class="tab-content" id="myTabContent">
                        <!-- Tab 1 -->
                        <div class="tab-pane fade show active" id="t-tab1" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Single Tab -->
                                    <div class="single-package">
                                        <div class="trip-head">
                                            <div class="trip-offer">30% OFF</div>
                                            <img src="http://via.placeholder.com/344x230" alt="#">
                                        </div>
                                        <div class="trip-details">
                                            <div class="left">
                                                <h4><a href="trip-single.html">Tour package in Greenville, Carolina</a></h4>
                                                <p><i class="fa fa-clock-o"></i>3 Nights 4 Days</p>
                                            </div>
                                            <div class="right">
                                                <p>From<span>$300</span></p>
                                            </div>
                                            <a href="trip-single.html" class="btn primary">View More</a>
                                        </div>
                                    </div>
                                    <!--/ End Single Tab -->
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Single Tab -->
                                    <div class="single-package">
                                        <div class="trip-head">
                                            <img src="http://via.placeholder.com/344x230" alt="#">
                                        </div>
                                        <div class="trip-details">
                                            <div class="left">
                                                <h4><a href="trip-single.html">Snorkel Tour in Grand Turks Coral Reef</a></h4>
                                                <p><i class="fa fa-clock-o"></i>4 Nights 5 Days</p>
                                            </div>
                                            <div class="right">
                                                <p>From<span>$500</span></p>
                                            </div>
                                            <a href="trip-single.html" class="btn primary">View More</a>
                                        </div>
                                    </div>
                                    <!--/ End Single Tab -->
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Single Tab -->
                                    <div class="single-package">
                                        <div class="trip-head">
                                            <img src="http://via.placeholder.com/344x230" alt="#">
                                        </div>
                                        <div class="trip-details">
                                            <div class="left">
                                                <h4><a href="trip-single.html">Awesome tour package in pattaya</a></h4>
                                                <p><i class="fa fa-clock-o"></i>2 Nights 3 Days</p>
                                            </div>
                                            <div class="right">
                                                <p>From<span>$400</span></p>
                                            </div>
                                            <a href="trip-single.html" class="btn primary">View More</a>
                                        </div>
                                    </div>
                                    <!--/ End Single Tab -->
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Single Tab -->
                                    <div class="single-package">
                                        <div class="trip-head">
                                            <img src="http://via.placeholder.com/344x230" alt="#">
                                        </div>
                                        <div class="trip-details">
                                            <div class="left">
                                                <h4><a href="trip-single.html">Snorkel Tour in Grand Turks Coral Reef</a></h4>
                                                <p><i class="fa fa-clock-o"></i>2 Nights 1 Days</p>
                                            </div>
                                            <div class="right">
                                                <p>From<span>$100</span></p>
                                            </div>
                                            <a href="trip-single.html" class="btn primary">View More</a>
                                        </div>
                                    </div>
                                    <!--/ End Single Tab -->
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Single Tab -->
                                    <div class="single-package">
                                        <div class="trip-head">
                                            <img src="http://via.placeholder.com/344x230" alt="#">
                                        </div>
                                        <div class="trip-details">
                                            <div class="left">
                                                <h4><a href="trip-single.html">Tour package in Greenville, Carolina</a></h4>
                                                <p><i class="fa fa-clock-o"></i>2 Nights 3 Days</p>
                                            </div>
                                            <div class="right">
                                                <p>From<span>$400</span></p>
                                            </div>
                                            <a href="trip-single.html" class="btn primary">View More</a>
                                        </div>
                                    </div>
                                    <!--/ End Single Tab -->
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Single Tab -->
                                    <div class="single-package">
                                        <div class="trip-head">
                                            <img src="http://via.placeholder.com/344x230" alt="#">
                                        </div>
                                        <div class="trip-details">
                                            <div class="left">
                                                <h4><a href="trip-single.html">Snorkel Tour in Grand Turks Coral Reef</a></h4>
                                                <p><i class="fa fa-clock-o"></i>3 Nights 4 Days</p>
                                            </div>
                                            <div class="right">
                                                <p>From<span>$450</span></p>
                                            </div>
                                            <a href="trip-single.html" class="btn primary">View More</a>
                                        </div>
                                    </div>
                                    <!--/ End Single Tab -->
                                </div>
                            </div>
                        </div>
                        <!--/ End Tab 1 -->
                        <!-- Tab 2 -->
                        <div class="tab-pane fade" id="t-tab2" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Single Tab -->
                                    <div class="single-package">
                                        <div class="trip-head">
                                            <div class="trip-offer">30% OFF</div>
                                            <img src="http://via.placeholder.com/344x230" alt="#">
                                        </div>
                                        <div class="trip-details">
                                            <div class="left">
                                                <h4><a href="trip-single.html">Tour package in Greenville, Carolina</a></h4>
                                                <p><i class="fa fa-clock-o"></i>3 Nights 4 Days</p>
                                            </div>
                                            <div class="right">
                                                <p>From<span>$300</span></p>
                                            </div>
                                            <a href="trip-single.html" class="btn primary">View More</a>
                                        </div>
                                    </div>
                                    <!--/ End Single Tab -->
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Single Tab -->
                                    <div class="single-package">
                                        <div class="trip-head">
                                            <img src="http://via.placeholder.com/344x230" alt="#">
                                        </div>
                                        <div class="trip-details">
                                            <div class="left">
                                                <h4><a href="trip-single.html">Snorkel Tour in Grand Turks Coral Reef</a></h4>
                                                <p><i class="fa fa-clock-o"></i>4 Nights 5 Days</p>
                                            </div>
                                            <div class="right">
                                                <p>From<span>$500</span></p>
                                            </div>
                                            <a href="trip-single.html" class="btn primary">View More</a>
                                        </div>
                                    </div>
                                    <!--/ End Single Tab -->
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Single Tab -->
                                    <div class="single-package">
                                        <div class="trip-head">
                                            <img src="http://via.placeholder.com/344x230" alt="#">
                                        </div>
                                        <div class="trip-details">
                                            <div class="left">
                                                <h4><a href="trip-single.html">Awesome tour package in pattaya</a></h4>
                                                <p><i class="fa fa-clock-o"></i>2 Nights 3 Days</p>
                                            </div>
                                            <div class="right">
                                                <p>From<span>$400</span></p>
                                            </div>
                                            <a href="trip-single.html" class="btn primary">View More</a>
                                        </div>
                                    </div>
                                    <!--/ End Single Tab -->
                                </div>
                            </div>
                        </div>
                        <!--/ End Tab 2 -->
                        <!-- Tab 3 -->
                        <div class="tab-pane fade" id="t-tab3" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Single Tab -->
                                    <div class="single-package">
                                        <div class="trip-head">
                                            <img src="http://via.placeholder.com/344x230" alt="#">
                                        </div>
                                        <div class="trip-details">
                                            <div class="left">
                                                <h4><a href="trip-single.html">Snorkel Tour in Grand Turks Coral Reef</a></h4>
                                                <p><i class="fa fa-clock-o"></i>2 Nights 1 Days</p>
                                            </div>
                                            <div class="right">
                                                <p>From<span>$100</span></p>
                                            </div>
                                            <a href="trip-single.html" class="btn primary">View More</a>
                                        </div>
                                    </div>
                                    <!--/ End Single Tab -->
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Single Tab -->
                                    <div class="single-package">
                                        <div class="trip-head">
                                            <img src="http://via.placeholder.com/344x230" alt="#">
                                        </div>
                                        <div class="trip-details">
                                            <div class="left">
                                                <h4><a href="trip-single.html">Tour package in Greenville, Carolina</a></h4>
                                                <p><i class="fa fa-clock-o"></i>2 Nights 3 Days</p>
                                            </div>
                                            <div class="right">
                                                <p>From<span>$400</span></p>
                                            </div>
                                            <a href="trip-single.html" class="btn primary">View More</a>
                                        </div>
                                    </div>
                                    <!--/ End Single Tab -->
                                </div>
                            </div>
                        </div>
                        <!--/ End Tab 3 -->
                        <!-- Tab 4 -->
                        <div class="tab-pane fade" id="t-tab4" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Single Tab -->
                                    <div class="single-package">
                                        <div class="trip-head">
                                            <img src="http://via.placeholder.com/344x230" alt="#">
                                        </div>
                                        <div class="trip-details">
                                            <div class="left">
                                                <h4><a href="trip-single.html">Snorkel Tour in Grand Turks Coral Reef</a></h4>
                                                <p><i class="fa fa-clock-o"></i>3 Nights 4 Days</p>
                                            </div>
                                            <div class="right">
                                                <p>From<span>$450</span></p>
                                            </div>
                                            <a href="trip-single.html" class="btn primary">View More</a>
                                        </div>
                                    </div>
                                    <!--/ End Single Tab -->
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Single Tab -->
                                    <div class="single-package">
                                        <div class="trip-head">
                                            <img src="http://via.placeholder.com/344x230" alt="#">
                                        </div>
                                        <div class="trip-details">
                                            <div class="left">
                                                <h4><a href="trip-single.html">Awesome tour package in pattaya</a></h4>
                                                <p><i class="fa fa-clock-o"></i>2 Nights 3 Days</p>
                                            </div>
                                            <div class="right">
                                                <p>From<span>$400</span></p>
                                            </div>
                                            <a href="trip-single.html" class="btn primary">View More</a>
                                        </div>
                                    </div>
                                    <!--/ End Single Tab -->
                                </div>
                            </div>
                        </div>
                        <!--/ End Tab 4 -->
                        <!-- Tab 5 -->
                        <div class="tab-pane fade" id="t-tab5" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Single Tab -->
                                    <div class="single-package">
                                        <div class="trip-head">
                                            <div class="trip-offer">30% OFF</div>
                                            <img src="http://via.placeholder.com/344x230" alt="#">
                                        </div>
                                        <div class="trip-details">
                                            <div class="left">
                                                <h4><a href="trip-single.html">Tour package in Greenville, Carolina</a></h4>
                                                <p><i class="fa fa-clock-o"></i>3 Nights 4 Days</p>
                                            </div>
                                            <div class="right">
                                                <p>From<span>$300</span></p>
                                            </div>
                                            <a href="trip-single.html" class="btn primary">View More</a>
                                        </div>
                                    </div>
                                    <!--/ End Single Tab -->
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Single Tab -->
                                    <div class="single-package">
                                        <div class="trip-head">
                                            <img src="http://via.placeholder.com/344x230" alt="#">
                                        </div>
                                        <div class="trip-details">
                                            <div class="left">
                                                <h4><a href="trip-single.html">Snorkel Tour in Grand Turks Coral Reef</a></h4>
                                                <p><i class="fa fa-clock-o"></i>4 Nights 5 Days</p>
                                            </div>
                                            <div class="right">
                                                <p>From<span>$500</span></p>
                                            </div>
                                            <a href="trip-single.html" class="btn primary">View More</a>
                                        </div>
                                    </div>
                                    <!--/ End Single Tab -->
                                </div>
                            </div>
                        </div>
                        <!--/ End Tab 5 -->
                        <!-- Tab 6 -->
                        <div class="tab-pane fade" id="t-tab6" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Single Tab -->
                                    <div class="single-package">
                                        <div class="trip-head">
                                            <img src="http://via.placeholder.com/344x230" alt="#">
                                        </div>
                                        <div class="trip-details">
                                            <div class="left">
                                                <h4><a href="trip-single.html">Snorkel Tour in Grand Turks Coral Reef</a></h4>
                                                <p><i class="fa fa-clock-o"></i>4 Nights 5 Days</p>
                                            </div>
                                            <div class="right">
                                                <p>From<span>$500</span></p>
                                            </div>
                                            <a href="trip-single.html" class="btn primary">View More</a>
                                        </div>
                                    </div>
                                    <!--/ End Single Tab -->
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Single Tab -->
                                    <div class="single-package">
                                        <div class="trip-head">
                                            <img src="http://via.placeholder.com/344x230" alt="#">
                                        </div>
                                        <div class="trip-details">
                                            <div class="left">
                                                <h4><a href="trip-single.html">Awesome tour package in pattaya</a></h4>
                                                <p><i class="fa fa-clock-o"></i>2 Nights 3 Days</p>
                                            </div>
                                            <div class="right">
                                                <p>From<span>$400</span></p>
                                            </div>
                                            <a href="trip-single.html" class="btn primary">View More</a>
                                        </div>
                                    </div>
                                    <!--/ End Single Tab -->
                                </div>
                            </div>
                        </div>
                        <!--/ End Tab 6 -->
                        <!-- Tab 7 -->
                        <div class="tab-pane fade" id="t-tab7" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Single Tab -->
                                    <div class="single-package">
                                        <div class="trip-head">
                                            <img src="http://via.placeholder.com/344x230" alt="#">
                                        </div>
                                        <div class="trip-details">
                                            <div class="left">
                                                <h4><a href="#">Snorkel Tour in Grand Turks Coral Reef</a></h4>
                                                <p><i class="fa fa-clock-o"></i>3 Nights 4 Days</p>
                                            </div>
                                            <div class="right">
                                                <p>From<span>$300</span></p>
                                            </div>
                                            <a href="#" class="btn primary">View More</a>
                                        </div>
                                    </div>
                                    <!--/ End Single Tab -->
                                </div>
                            </div>
                        </div>
                        <!--/ End Tab 7 -->
                    </div>
                </div>
                <!--/ End Destination Tab -->
            </div>
        </div>
    </div>
</section>
<!--/ End Top Destination -->
@endif
@if(false)
<!-- Call To Action -->
<section id="cta" class="cta section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="cta-text">
                    <div class="title-line">
                        <p>about company</p>
                        <h2>Worthy time spent <span>around the world with traveltrek.</span></h2>
                    </div>
                    <a href="trip-3-column.html" class="btn">Book your trip</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Call To Action -->
@endif
@if($siteConfig['clients_experience'] == '1')
<!-- Testimonials -->
<section id="testimonials" class="testimonials section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-line center">
                    <p>What our guest are saying</p>
                    <h2><span>Clients</span> Experience</h2>
                </div>  
            </div> 
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-main">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <!-- Testimonial Slider -->
                            <div class="testimonial-slider">
                                <!-- Single Slider -->
                                <div class="single-slider">
                                    <h2>Amazng tour in my life!</h2>
                                    <p>The average employee is wasting between 50%-80% of their day on non-work related distractions. Time wasted is money wasted, thats money that could stay in your pocket simply by changing the way you assign your tasks.</p>
                                    <span>Tony McLaren, Designer, UK</span>
                                </div>
                                <!--/ End Single Slider -->
                                <!-- Single Slider -->
                                <div class="single-slider">
                                    <h2>This tour was best!</h2>
                                    <p>The average employee is wasting between 50%-80% of their day on non-work related distractions. Time wasted is money wasted, thats money that could stay in your pocket simply by changing the way you assign your tasks.</p>
                                    <span>Landon Sarno, Operator, US</span>
                                </div>
                                <!--/ End Single Slider -->
                                <!-- Single Slider -->
                                <div class="single-slider">
                                    <h2>Very helpfull and smart tour</h2>
                                    <p>The average employee is wasting between 50%-80% of their day on non-work related distractions. Time wasted is money wasted, thats money that could stay in your pocket simply by changing the way you assign your tasks.</p>
                                    <span>Sonila, Photographer, NP</span>
                                </div>
                                <!--/ End Single Slider -->
                            </div>
                            <!--/ End Testimonial Slider -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <!-- Testimonial Image -->
                            <div class="testimonial-image">
                                <img src="http://via.placeholder.com/560x400" alt="#">
                            </div>
                            <!--/ End Testimonial Image -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Testimonials -->
@endif
@if($siteConfig['services'] == '1')
<!-- Services -->
<section id="services" class="services">
    <div class="container-fluid no-padding">
        <div class="service-img overlay" data-stellar-background-ratio="0.7">
            <div class="video-play">
                <a href="https://www.youtube.com/watch?v=PtWeqZsuzpE" class="btn video-popup mfp-fade"><i class="fa fa-play"></i></a>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="offset-lg-6 col-lg-6 col-12">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6 col-12">
                        <!-- single service -->
                        <div class="single-service">
                            <img src="{{ url('/') }}/public/images/service-icon1.png" alt="#">
                            <h2>Best Europe Tour</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur iscing elit. Etiam fermentum</p>
                            <a href="service-single.html" class="btn">Read More</a>
                        </div>
                        <!--/ End single service -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <!-- single service -->
                        <div class="single-service">
                            <img src="{{ url('/') }}/public/images/service-icon2.png" alt="#">
                            <h2>airport pickup</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur iscing elit. Etiam fermentum</p>
                            <a href="service-single.html" class="btn">Read More</a>
                        </div>
                        <!--/ End single service -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <!-- single service -->
                        <div class="single-service">
                            <img src="{{ url('/') }}/public/images/service-icon3.png" alt="#">
                            <h2>Best Coach Tour</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur iscing elit. Etiam fermentum</p>
                            <a href="service-single.html" class="btn">Read More</a>
                        </div>
                        <!--/ End single service -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <!-- single service -->
                        <div class="single-service">
                            <img src="{{ url('/') }}/public/images/service-icon4.png" alt="#">
                            <h2>Outdoor Tour</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur iscing elit. Etiam fermentum</p>
                            <a href="service-single.html" class="btn">Read More</a>
                        </div>
                        <!--/ End single service -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Services -->
@endif
@if($siteConfig['blog'] == '1')
<!-- Blog Area -->
<section id="blog-area" class="blog-area section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-line center">
                    <p>News & Blog</p>
                    <h2><span>Latest</span> Updates</h2>
                </div>
            </div>   
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <!-- Single Blog -->
                <div class="single-blog">
                    <div class="blog-head">
                        <img src="http://via.placeholder.com/850x550" alt="#">
                    </div>
                    <div class="blog-content">
                        <span>Jan 31 2018</span>
                        <h4><a href="blog-single.html">Spring in the air and the Romantic conola ride in Vinece</a></h4>
                        <a href="blog-single.html" class="btn">Read More</a>
                    </div>
                </div>
                <!--/ End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <!-- Single Blog -->
                <div class="single-blog">
                    <div class="blog-head">
                        <img src="http://via.placeholder.com/850x550" alt="#">
                    </div>
                    <div class="blog-content">
                        <span>Jan 31 2018</span>
                        <h4><a href="blog-single.html">Spring in the air and the Romantic conola ride in Vinece</a></h4>
                        <a href="blog-single.html" class="btn">Read More</a>
                    </div>
                </div>
                <!--/ End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <!-- Single Blog -->
                <div class="single-blog">
                    <div class="blog-head">
                        <img src="http://via.placeholder.com/850x550" alt="#">
                    </div>
                    <div class="blog-content">
                        <span>Jan 31 2018</span>
                        <h4><a href="blog-single.html">Spring in the air and the Romantic conola ride in Vinece</a></h4>
                        <a href="blog-single.html" class="btn">Read More</a>
                    </div>
                </div>
                <!--/ End Single Blog -->
            </div>
        </div>
    </div>
</section>
<!--/ End Blog Area -->
@endif
@endsection