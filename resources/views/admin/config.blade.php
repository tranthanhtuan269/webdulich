@extends('layouts.app')

@section('content')
<?php
	$siteConfig = \DB::table('site_configs')->pluck('text', 'name');
?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Website Config</div>

                <div class="panel-body">
                	{!! Form::open(['route' => 'home.store', 'class' => 'form-horizontal']) !!}
		   			@if($errors->any())
		   				<div class="form-group">
							<label for="message" class="col-sm-offset-2 col-sm-10 text-danger">{{ $errors->first() }} </label>
						</div>
					@endif
				  	<div class="form-group">
				    	<label for="inputSiteName" class="col-sm-2 control-label">Site Name</label>
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control" id="inputSiteName" name="inputSiteName" placeholder="Site Name" value="{{ $siteConfig['site_name'] }}">
				    	</div>
				  	</div>
				  	<div class="form-group">
				    	<label for="inputAddress1" class="col-sm-2 control-label">Address 1</label>
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control" id="inputAddress1" name="inputAddress1" placeholder="Address1" value="{{ $siteConfig['address1'] }}">
				    	</div>
				  	</div>
				  	<div class="form-group">
				    	<label for="inputAddress2" class="col-sm-2 control-label">Address 2</label>
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control" id="inputAddress2" name="inputAddress2" placeholder="Address2" value="{{ $siteConfig['address2'] }}">
				    	</div>
				  	</div>
				  	<div class="form-group">
				    	<label for="inputPhone1" class="col-sm-2 control-label">Phone 1</label>
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control" id="inputPhone1" name="inputPhone1" placeholder="Phone1" value="{{ $siteConfig['phone1'] }}">
				    	</div>
				  	</div>
				  	<div class="form-group">
				    	<label for="inputPhone2" class="col-sm-2 control-label">Phone 2</label>
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control" id="inputPhone2" name="inputPhone2" placeholder="Phone2" value="{{ $siteConfig['phone2'] }}">
				    	</div>
				  	</div>
				  	<div class="form-group">
				    	<label for="inputOpenTime" class="col-sm-2 control-label">Open Time</label>
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control" id="inputOpenTime" name="inputOpenTime" placeholder="Mon -Fri: 9:00-19:00" value="{{ $siteConfig['open_time'] }}">
				    	</div>
				  	</div>
				  	<div class="form-group">
				    	<label for="inputCloseTime" class="col-sm-2 control-label">Close Time</label>
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control" id="inputCloseTime" name="inputCloseTime" placeholder="Sunday Closed" value="{{ $siteConfig['close_time'] }}">
				    	</div>
				  	</div>
				  	<div class="form-group">
				    	<div class="col-sm-offset-2 col-sm-10">
				      		<button type="submit" class="btn btn-default">Save</button>
				    	</div>
				  	</div>
				{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
