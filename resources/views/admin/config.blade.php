@extends('layouts.app')

@section('content')
<?php
	$siteConfig = \DB::table('site_configs')->pluck('text', 'name');
?>
<style type="text/css">
	#v-pills-tab,
	#v-pills-tabContent{
		padding-top: 1rem;
	}
</style>
<div class="container">
	<div class="row">
		<div class="nav flex-column nav-pills col-md-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		  	<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Site Config</a>
		  	<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Home Config</a>
		  	<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
		  	<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
		</div>
		<div class="tab-content col-md-10" id="v-pills-tabContent">
		  	<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
		  		<div class="row">
			        <div class="col-md-10 col-md-offset-1">
			        	{!! Form::open(['route' => 'home.store', 'class' => 'form-horizontal']) !!}
				   			@if($errors->any())
				   				<div class="form-group row">
									<label for="message" class="col-sm-offset-2 col-sm-10 text-danger">{{ $errors->first() }} </label>
								</div>
							@endif
						  	<div class="form-group row">
						    	<label for="inputSiteName" class="col-sm-2 control-label">Site Name</label>
						    	<div class="col-sm-10">
						      		<input type="text" class="form-control" id="inputSiteName" name="inputSiteName" placeholder="Site Name" value="{{ $siteConfig['site_name'] }}">
						    	</div>
						  	</div>
						  	<div class="form-group row">
						    	<label for="inputAddress1" class="col-sm-2 control-label">Address 1</label>
						    	<div class="col-sm-10">
						      		<input type="text" class="form-control" id="inputAddress1" name="inputAddress1" placeholder="Address1" value="{{ $siteConfig['address1'] }}">
						    	</div>
						  	</div>
						  	<div class="form-group row">
						    	<label for="inputAddress2" class="col-sm-2 control-label">Address 2</label>
						    	<div class="col-sm-10">
						      		<input type="text" class="form-control" id="inputAddress2" name="inputAddress2" placeholder="Address2" value="{{ $siteConfig['address2'] }}">
						    	</div>
						  	</div>
						  	<div class="form-group row">
						    	<label for="inputPhone1" class="col-sm-2 control-label">Phone 1</label>
						    	<div class="col-sm-10">
						      		<input type="text" class="form-control" id="inputPhone1" name="inputPhone1" placeholder="Phone1" value="{{ $siteConfig['phone1'] }}">
						    	</div>
						  	</div>
						  	<div class="form-group row">
						    	<label for="inputPhone2" class="col-sm-2 control-label">Phone 2</label>
						    	<div class="col-sm-10">
						      		<input type="text" class="form-control" id="inputPhone2" name="inputPhone2" placeholder="Phone2" value="{{ $siteConfig['phone2'] }}">
						    	</div>
						  	</div>
						  	<div class="form-group row">
						    	<label for="inputOpenTime" class="col-sm-2 control-label">Open Time</label>
						    	<div class="col-sm-10">
						      		<input type="text" class="form-control" id="inputOpenTime" name="inputOpenTime" placeholder="Mon -Fri: 9:00-19:00" value="{{ $siteConfig['open_time'] }}">
						    	</div>
						  	</div>
						  	<div class="form-group row">
						    	<label for="inputCloseTime" class="col-sm-2 control-label">Close Time</label>
						    	<div class="col-sm-10">
						      		<input type="text" class="form-control" id="inputCloseTime" name="inputCloseTime" placeholder="Sunday Closed" value="{{ $siteConfig['close_time'] }}">
						    	</div>
						  	</div>
						  	<div class="form-group row">
						    	<div class="col-sm-offset-2 col-sm-10">
						      		<button type="submit" class="btn btn-default">Save</button>
						    	</div>
						  	</div>
						{!! Form::close() !!}
			        </div>
			    </div>
		  	</div>
		  	<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
		  		<div class="row">
			        <div class="col-sm-8 col-md-offset-1">
			        	<div class="form-group row">
					    	<label for="inputSiteName" class="col-sm-4 control-label">Search Form</label>
					    	<div class="col-sm-8">
					    		@if($siteConfig['search_form'] == 1)
					      		<span class="btn btn-success btn-sm active-btn" data-id="search_form">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn d-none" data-id="search_form">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @else
					            <span class="btn btn-success btn-sm active-btn d-none" data-id="search_form">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn" data-id="search_form">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @endif
					    	</div>
					  	</div>
			        	<div class="form-group row">
					    	<label for="inputSiteName" class="col-sm-4 control-label">About Us</label>
					    	<div class="col-sm-8">
					    		@if($siteConfig['about_us'] == 1)
					      		<span class="btn btn-success btn-sm active-btn" data-id="about_us">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn d-none" data-id="about_us">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @else
					            <span class="btn btn-success btn-sm active-btn d-none" data-id="about_us">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn" data-id="about_us">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @endif
					    	</div>
					  	</div>
			        	<div class="form-group row">
					    	<label for="inputSiteName" class="col-sm-4 control-label">Popular Destinations</label>
					    	<div class="col-sm-8">
					      		@if($siteConfig['popular_destinations'] == 1)
					      		<span class="btn btn-success btn-sm active-btn" data-id="popular_destinations">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn d-none" data-id="popular_destinations">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @else
					            <span class="btn btn-success btn-sm active-btn d-none" data-id="popular_destinations">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn" data-id="popular_destinations">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @endif
					    	</div>
					  	</div>
			        	<div class="form-group row">
					    	<label for="inputSiteName" class="col-sm-4 control-label">Popular Trips</label>
					    	<div class="col-sm-8">
					      		@if($siteConfig['popular_trips'] == 1)
					      		<span class="btn btn-success btn-sm active-btn" data-id="popular_trips">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn d-none" data-id="popular_trips">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @else
					            <span class="btn btn-success btn-sm active-btn d-none" data-id="popular_trips">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn" data-id="popular_trips">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @endif
					    	</div>
					  	</div>
			        	<div class="form-group row">
					    	<label for="inputSiteName" class="col-sm-4 control-label">Clients Experience</label>
					    	<div class="col-sm-8">
					      		@if($siteConfig['clients_experience'] == 1)
					      		<span class="btn btn-success btn-sm active-btn" data-id="clients_experience">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn d-none" data-id="clients_experience">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @else
					            <span class="btn btn-success btn-sm active-btn d-none" data-id="clients_experience">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn" data-id="clients_experience">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @endif
					    	</div>
					  	</div>
			        	<div class="form-group row">
					    	<label for="inputSiteName" class="col-sm-4 control-label">Services</label>
					    	<div class="col-sm-8">
					      		@if($siteConfig['services'] == 1)
					      		<span class="btn btn-success btn-sm active-btn" data-id="services">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn d-none" data-id="services">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @else
					            <span class="btn btn-success btn-sm active-btn d-none" data-id="services">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn" data-id="services">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @endif
					    	</div>
					  	</div>
			        	<div class="form-group row">
					    	<label for="inputSiteName" class="col-sm-4 control-label">Blog</label>
					    	<div class="col-sm-8">
					      		@if($siteConfig['blog'] == 1)
					      		<span class="btn btn-success btn-sm active-btn" data-id="blog">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn d-none" data-id="blog">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @else
					            <span class="btn btn-success btn-sm active-btn d-none" data-id="blog">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn" data-id="blog">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @endif
					    	</div>
					  	</div>
			        </div>
			    </div>
		  	</div>
		  	<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
		  	<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
		</div>
	</div>
</div>
@endsection
