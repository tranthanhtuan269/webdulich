@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Category</div>

                <div class="panel-body">
                    <form action="{{ url('categories/'.$category->id) }}" method="POST">
	                    {{ method_field('PUT') }}
	                    {{csrf_field()}}
	                    @if($errors->any())
			   				<div class="form-group">
								<label for="message" class="col-sm-offset-2 col-sm-10 text-danger">{{ $errors->first() }} </label>
							</div>
						@endif
	                    <div class="form-group">
					    	<label for="inputSiteName" class="col-sm-2 control-label">Category Name</label>
					    	<div class="col-sm-10">
					      		<input type="text" class="form-control" id="inputCategoryName" name="name" placeholder="Category Name" value="{{ $category->name }}">
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<div class="col-sm-offset-2 col-sm-10">
					      		<button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
					      		<a href="{{ url('categories/') }}" class="btn btn-primary">
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