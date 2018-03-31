@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-primary mt-3" role="alert">
			  	Danh sách đối tác
			</div>
        	<!-- Display Validation Errors -->
			@include('common.errors')

            <div class="table-responsive">
			  	<table class="table table-striped">
			    	<thead>
			    		<tr>
			    			<th>#</th>
			    			<th>Ảnh</th>
			    			<th>Tên đối tác</th>
			    			<th>URL</th>
			    			<th>Action</th>
			    		</tr>
			    	</thead>
			    	<tbody>
			    		@foreach($partners as $partner)
			    		<tr>
			    			<td>{{ $partner->id }}</td>
			    			<td><img src="{{ url('/') }}/public/images/{{ $partner->image }}" height="90"></td>
			    			<td>{{ $partner->name }}</td>
			    			<td>{{ $partner->url }}</td>
			    			<td>
			    				<form class="delete-form" action="{{ url('partners/'.$partner->id) }}" method="POST">
			    				@if($partner->active == 1)
			    					<span class="btn btn-success active-btn" data-id="{{ $partner->id }}">
						                <i class="fa fa-refresh" aria-hidden="true"></i> Active
						            </span>
						            <span class="btn btn-default inactive-btn d-none" data-id="{{ $partner->id }}">
						                <i class="fa fa-power-off" aria-hidden="true"></i> Inactive
						            </span>
			    				@else
			    					<span class="btn btn-success active-btn d-none" data-id="{{ $partner->id }}">
						                <i class="fa fa-refresh" aria-hidden="true"></i> Active
						            </span>
			    					<span class="btn btn-default inactive-btn" data-id="{{ $partner->id }}">
						                <i class="fa fa-power-off" aria-hidden="true"></i> Inactive
						            </span>
			    				@endif

					            <a href="{{ url('partners/'.$partner->id).'/edit' }}" class="btn btn-primary">
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
			  	{{ $partners->links() }}
            </div>
			<a href="{{ url('/') }}/partners/create" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tạo đối tác</a>
        </div>
    </div>
</div>
@endsection
