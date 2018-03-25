@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
			<div class="alert alert-primary mt-3" role="alert">
			  	List Categories
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
			    		@foreach($categories as $category)
			    		<tr>
			    			<td>{{ $category->id }}</td>
			    			<td>{{ $category->name }}</td>
			    			<td>
			    				<form class="delete-form" action="{{ url('categories/'.$category->id) }}" method="POST">
			    				@if($category->active == 1)
			    					<span class="btn btn-success active-btn" data-id="{{ $category->id }}">
						                <i class="fa fa-refresh" aria-hidden="true"></i> Active
						            </span>
						            <span class="btn btn-default inactive-btn d-none" data-id="{{ $category->id }}">
						                <i class="fa fa-power-off" aria-hidden="true"></i> Inactive
						            </span>
			    				@else
			    					<span class="btn btn-success active-btn d-none" data-id="{{ $category->id }}">
						                <i class="fa fa-refresh" aria-hidden="true"></i> Active
						            </span>
			    					<span class="btn btn-default inactive-btn" data-id="{{ $category->id }}">
						                <i class="fa fa-power-off" aria-hidden="true"></i> Inactive
						            </span>
			    				@endif
			    				<a href="{{ url('categories/'.$category->id) }}" class="btn btn-info">
					                <i class="fa fa-eye" aria-hidden="true"></i> View
					            </a>

					            <a href="{{ url('categories/'.$category->id).'/edit' }}" class="btn btn-primary">
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
			  	{{ $categories->links() }}
			</div>
        	<a href="{{ url('/') }}/categories/create" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Create Category</a>
        </div>
    </div>
</div>
@endsection
