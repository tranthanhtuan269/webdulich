@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        	<div class="alert alert-primary mt-3" role="alert">
			  	Create New Category
			</div>
            {{ Form::open(['route' => 'categories.store']) }}
            @if($errors->any())
   				<div class="form-group row">
					<label for="message" class="col-sm-offset-2 col-sm-10 text-danger">{{ $errors->first() }} </label>
				</div>
			@endif
            <div class="form-group row">
		    	<label for="inputCategoryName" class="col-sm-2 control-label">Category Name</label>
		    	<div class="col-sm-10">
		      		<input type="text" class="form-control" id="inputCategoryName" name="name" placeholder="Category Name">
		    	</div>
		  	</div>
            <div class="form-group row">
		    	<label for="inputCategoryName" class="col-sm-2 control-label">Category Keywords</label>
		    	<div class="col-sm-10">
		      		<textarea class="form-control" rows="5" id="inputCategoryKeywords" name="keywords"></textarea>
		    	</div>
		  	</div>
            <div class="form-group row">
		    	<label for="inputCategoryName" class="col-sm-2 control-label">Category Description</label>
		    	<div class="col-sm-10">
		      		<textarea class="form-control" rows="5" id="inputCategoryDescription" name="description"></textarea>
		    	</div>
		  	</div>
		  	<div class="form-group row">
		    	<div class="col-sm-offset-2 col-sm-10">
		      		<button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
		      		<a href="{{ url('categories/') }}" class="btn btn-primary">
		            	<i class="fa fa-list" aria-hidden="true"></i> List
		            </a>
		    	</div>
		  	</div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection