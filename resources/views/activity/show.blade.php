@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Show Activity</div>

                <div class="panel-body">
                    <div class="form-group">
				    	<label for="inputActivityName" class="col-sm-2 control-label">Activity Name</label>
				    	<div class="col-sm-10">
				    		{{ $activity->name }}
				    	</div>
				  	</div>
                    <div class="form-group">
				    	<div class="col-sm-offset-2 col-sm-10">
				    		<a href="{{ url('activities/'.$activity->id).'/edit' }}" class="btn btn-primary">
				                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
				            </a>
				            <a href="{{ url('activities/') }}" class="btn btn-primary">
				            	<i class="fa fa-list" aria-hidden="true"></i> List
				            </a>
				    	</div>
				  	</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection