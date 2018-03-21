@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-primary mt-3" role="alert">
			  	List Cities
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
			    		@foreach($cities as $city)
			    		<tr>
			    			<td>{{ $city->id }}</td>
			    			<td>{{ $city->name }}</td>
			    			<td>
			    				<form class="delete-form" action="{{ url('cities/'.$city->id) }}" method="POST">
			    				@if($city->active == 1)
			    					<span class="btn btn-success active-btn" data-id="{{ $city->id }}">
						                <i class="fa fa-refresh" aria-hidden="true"></i> Active
						            </span>
						            <span class="btn btn-default inactive-btn hide" data-id="{{ $city->id }}">
						                <i class="fa fa-power-off" aria-hidden="true"></i> Inactive
						            </span>
			    				@else
			    					<span class="btn btn-success active-btn hide" data-id="{{ $city->id }}">
						                <i class="fa fa-refresh" aria-hidden="true"></i> Active
						            </span>
			    					<span class="btn btn-default inactive-btn" data-id="{{ $city->id }}">
						                <i class="fa fa-power-off" aria-hidden="true"></i> Inactive
						            </span>
			    				@endif
			    				<a href="{{ url('cities/'.$city->id) }}" class="btn btn-info">
					                <i class="fa fa-eye" aria-hidden="true"></i> View
					            </a>

					            <a href="{{ url('cities/'.$city->id).'/edit' }}" class="btn btn-primary">
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
			  	{{ $cities->links() }}
			</div>
        	<a href="{{ url('/') }}/cities/create" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Create City</a>
        </div>
    </div>
</div>
@endsection
