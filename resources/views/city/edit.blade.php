@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        	<div class="alert alert-primary mt-3" role="alert">
			  	Edit City
			</div>
            <form action="{{ url('cities/'.$city->id) }}" method="POST">
                {{ method_field('PUT') }}
                {{csrf_field()}}
                @if($errors->any())
	   				<div class="form-group row">
						<label for="message" class="col-sm-offset-2 col-sm-10 text-danger">{{ $errors->first() }} </label>
					</div>
				@endif
                <div class="form-group row">
			    	<label for="inputCityName" class="col-sm-2 control-label">City Name</label>
			    	<div class="col-sm-10">
			      		<input type="text" class="form-control" id="inputCityName" name="name" placeholder="City Name" value="{{ $city->name }}">
			    	</div>
			  	</div>
			  	<div class="form-group row">
			    	<div class="col-sm-offset-2 col-sm-10">
			      		<button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
			      		<a href="{{ url('cities/') }}" class="btn btn-primary">
			            	<i class="fa fa-list" aria-hidden="true"></i> List
			            </a>
			    	</div>
			  	</div>
		  	</form>
        </div>
    </div>
</div>
@endsection