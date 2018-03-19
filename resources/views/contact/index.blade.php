@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Contact List</div>

                <div class="panel-body">
                    <div class="table-responsive">
					  	<table class="table table-hover">
					    	<thead>
					    		<tr>
					    			<th>#</th>
					    			<th>Name</th>
					    			<th>Email</th>
					    			<th>Subject</th>
					    			<th>Message</th>
					    			<th>Created At</th>
					    			<th>Action</th>
					    		</tr>
					    	</thead>
					    	<tbody>
					    		@foreach($contacts as $contact)
					    		<tr>
					    			<td>{{ $contact->id }}</td>
					    			<td>{{ $contact->name }}</td>
					    			<td>{{ $contact->email }}</td>
					    			<td>{{ $contact->subject }}</td>
					    			<td>{{ $contact->message }}</td>
					    			<td>{{ $contact->created_at }}</td>
					    			<td>
					    				<form class="delete-form" action="{{ url('contacts/'.$contact->id) }}" method="POST">
						    				<a href="{{ url('contacts/'.$contact->id) }}" class="btn btn-info">
								                <i class="fa fa-eye" aria-hidden="true"></i> View
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
					  	{{ $contacts->links() }}
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
