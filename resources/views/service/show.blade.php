@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        	<div class="alert alert-primary mt-3" role="alert">
			  	Show Service
			</div>
            <div class="form-group row">
		    	<label for="inputServiceName" class="col-sm-2 control-label">Service Name</label>
		    	<div class="col-sm-10">
		    		{{ $service->name }}
		    	</div>
		  	</div>
            <div class="form-group row">
		    	<div class="col-sm-offset-2 col-sm-10">
		    		<a href="{{ url('services/'.$service->id).'/edit' }}" class="btn btn-primary">
		                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
		            </a>
		            <a href="{{ url('services/') }}" class="btn btn-primary">
		            	<i class="fa fa-list" aria-hidden="true"></i> List
		            </a>
		    	</div>
		  	</div>
        </div>
    </div>
</div>
@endsection