@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Service</div>

                <div class="panel-body">
                    <form action="{{ url('services/'.$service->id) }}" method="POST">
	                    {{ method_field('PUT') }}
	                    {{csrf_field()}}
	                    @if($errors->any())
			   				<div class="form-group">
								<label for="message" class="col-sm-offset-2 col-sm-10 text-danger">{{ $errors->first() }} </label>
							</div>
						@endif
	                    <div class="form-group">
					    	<label for="inputServiceName" class="col-sm-2 control-label">Service Name</label>
					    	<div class="col-sm-10">
					      		<input type="text" class="form-control" id="inputServiceName" name="name" placeholder="Service Name" value="{{ $service->name }}">
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<div class="col-sm-offset-2 col-sm-10">
					      		<button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
					      		<a href="{{ url('services/') }}" class="btn btn-primary">
					            	<i class="fa fa-list" aria-hidden="true"></i> List
					            </a>
					    	</div>
					  	</div>
				  	</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection