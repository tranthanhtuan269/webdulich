@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Create A City</div>

                <div class="panel-body">
                    {{ Form::open(['route' => 'cities.store']) }}
                    @if($errors->any())
		   				<div class="form-group">
							<label for="message" class="col-sm-offset-2 col-sm-10 text-danger">{{ $errors->first() }} </label>
						</div>
					@endif
                    <div class="form-group">
				    	<label for="inputCityName" class="col-sm-2 control-label">City Name</label>
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control" id="inputCityName" name="name" placeholder="City Name">
				    	</div>
				  	</div>
				  	<div class="form-group">
				    	<div class="col-sm-offset-2 col-sm-10">
				      		<button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
				      		<a href="{{ url('cities/') }}" class="btn btn-primary">
				            	<i class="fa fa-list" aria-hidden="true"></i> List
				            </a>
				    	</div>
				  	</div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection