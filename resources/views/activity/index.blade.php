@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        	<div class="alert alert-primary mt-3" role="alert">
			  	List Activities
			</div>
        	<!-- Display Validation Errors -->
			@include('common.errors')

            <div class="table-responsive">
			  	<table class="table table-striped">
			    	<thead>
			    		<tr>
			    			<th>#</th>
			    			<th>Name</th>
			    			<th>Action</th>
			    		</tr>
			    	</thead>
			    	<tbody>
			    		@foreach($activities as $activity)
			    		<tr>
			    			<td>{{ $activity->id }}</td>
			    			<td>{{ $activity->name }}</td>
			    			<td>
			    				<form class="delete-form" action="{{ url('activities/'.$activity->id) }}" method="POST">
			    				@if($activity->active == 1)
			    					<span class="btn btn-success active-btn" data-id="{{ $activity->id }}">
						                <i class="fa fa-refresh" aria-hidden="true"></i> Active
						            </span>
						            <span class="btn btn-secondary inactive-btn d-none" data-id="{{ $activity->id }}">
						                <i class="fa fa-power-off" aria-hidden="true"></i> Inactive
						            </span>
			    				@else
			    					<span class="btn btn-success active-btn d-none" data-id="{{ $activity->id }}">
						                <i class="fa fa-refresh" aria-hidden="true"></i> Active
						            </span>
			    					<span class="btn btn-secondary inactive-btn" data-id="{{ $activity->id }}">
						                <i class="fa fa-power-off" aria-hidden="true"></i> Inactive
						            </span>
			    				@endif
			    				<a href="{{ url('activities/'.$activity->id) }}" class="btn btn-info">
					                <i class="fa fa-eye" aria-hidden="true"></i> View
					            </a>

					            <a href="{{ url('activities/'.$activity->id).'/edit' }}" class="btn btn-primary">
					                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
					            </a>

						            {{ csrf_field() }}
						            {{ method_field('DELETE') }}

						            <button type="submit" class="btn btn-danger">
						                <i class="fa fa-trash"></i> Delete
						            </button>
					        	</form>
					    	</td>
			    		</tr>
			    		@endforeach
			    	</tbody>
			  	</table>
			  	{{ $activities->links() }}
			</div>
			<a href="{{ url('/') }}/activities/create" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Create Activity</a>
        </div>
    </div>
</div>
@endsection
