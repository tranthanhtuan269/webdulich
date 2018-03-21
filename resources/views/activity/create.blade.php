@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        	<div class="alert alert-primary mt-3" role="alert">
			  	Create New Activity
			</div>
            {{ Form::open(['route' => 'activities.store']) }}
            <div class="form-group row">
		    	<label for="inputActivityName" class="col-md-2 control-label">Activity Name</label>
		    	<div class="col-md-10">
		      		<input type="text" class="form-control" id="inputActivityName" name="name" placeholder="Activity Name">
		    	</div>
		  	</div>
		  	<div class="form-group row">
		    	<div class="col-offset-2 col-md-10">
		      		<button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
		      		<a href="{{ url('activities/') }}" class="btn btn-primary">
		            	<i class="fa fa-list" aria-hidden="true"></i> List
		            </a>
		    	</div>
		  	</div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection