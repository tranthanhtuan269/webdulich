@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Create A Blog</div>

                <div class="panel-body">
                    {{ Form::open(['route' => 'blogs.store']) }}
                    @if($errors->any())
		   				<div class="form-group">
							<label for="message" class="col-sm-offset-2 col-sm-10 text-danger">{{ $errors->first() }} </label>
						</div>
					@endif
					<div class="row">
						<div class="col-sm-6">

						</div>
						<div class="col-sm-6">
							<form class="form-horizontal">
								<div class="form-group">
							    	<label for="inputBlogTitle" class="col-sm-3 control-label">Blog Title</label>
							    	<div class="col-sm-9">
							      		<input type="text" class="form-control" id="inputBlogTitle" name="title" placeholder="Blog Title">
							    	</div>
							  	</div>
								<div class="form-group">
							    	<label for="inputBlogTitle" class="col-sm-3 control-label">Keyword</label>
							    	<div class="col-sm-9">
							      		<input type="text" class="form-control" id="inputKeyword" name="title" placeholder="Keyword">
							    	</div>
							  	</div>
								<div class="form-group">
							    	<label for="inputBlogTitle" class="col-sm-3 control-label">Category</label>
							    	<div class="col-sm-9">
							      		<input type="text" class="form-control" id="inputCategory" name="title" placeholder="Category">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-sm-offset-3 col-sm-9">
							      		<button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
							      		<a href="{{ url('blogs/') }}" class="btn btn-primary">
							            	<i class="fa fa-list" aria-hidden="true"></i> List
							            </a>
							    	</div>
							  	</div>
						  	</form>
						</div>
					</div>
				  	
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection