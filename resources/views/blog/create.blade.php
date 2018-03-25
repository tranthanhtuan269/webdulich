@extends('layouts.app')

@section('content')
<script src="{{ url('/') }}/public/templateEditor/ckeditor/ckeditor.js"></script>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-primary mt-3" role="alert">
			  	Create New Blog
			</div>
            {{ Form::open(['route' => 'blogs.store']) }}
            @if($errors->any())
   				<div class="form-group">
					<label for="message" class="col-sm-offset-2 col-sm-10 text-danger">{{ $errors->first() }} </label>
				</div>
			@endif
			<div class="row">
				<div class="col-sm-4">
					<img id="image_blog" src="{{ url('/') }}/public/images/home/1000_600.jpg" width="100%">
				</div>
				<div class="col-sm-8">
					<form class="form-horizontal">
						<input type="hidden" id="image_field" name="image" value="">
						<input type="file" name="image-img" id="image-img" style="display: none;">
						<div class="form-group row">
						    {!! Form::label('title', 'Title', ['class' => 'col-md-3 control-label']) !!}
						    <div class="col-md-9">
						        {!! Form::text('title', null, ['class' => 'form-control']) !!}
						        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
						    </div>
						</div>
						<div class="form-group row">
						    {!! Form::label('keyword', 'Keyword', ['class' => 'col-md-3 control-label']) !!}
						    <div class="col-md-9">
						        {!! Form::text('keyword', null, ['class' => 'form-control']) !!}
						        {!! $errors->first('keyword', '<p class="help-block">:message</p>') !!}
						    </div>
						</div>
						<div class="form-group row">
						    {!! Form::label('category', 'Category', ['class' => 'col-md-3 control-label']) !!}
						    <div class="col-md-9">
						        {!! Form::text('category', null, ['class' => 'form-control']) !!}
						        {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
						    </div>
						</div>
						<div class="form-group row">
						    {!! Form::label('sub_content', 'Sub Content', ['class' => 'col-md-3 control-label']) !!}
						    <div class="col-md-9">
						        {!! Form::textarea('sub_content', null, ['class' => 'form-control']) !!}
						        {!! $errors->first('sub_content', '<p class="help-block">:message</p>') !!}
						    </div>
						</div>
						<div class="form-group row">
						    {!! Form::label('content', 'Content', ['class' => 'col-md-3 control-label']) !!}
						    <div class="col-md-9">
						        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
						        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
						    </div>
						</div>
					  	<div class="form-group row">
					    	<div class="col-sm-offset-4 col-sm-8">
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

<script>
	var $sitepath = $('base').attr('href');

    CKEDITOR.replace( 'sub_content', {
        'filebrowserBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=files',
        'filebrowserImageBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=images',
        'filebrowserFlashBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=flash',
        'filebrowserUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=files',
        'filebrowserImageUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=images',
        'filebrowserFlashUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=flash'
    } );
    CKEDITOR.replace( 'content', {
        'filebrowserBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=files',
        'filebrowserImageBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=images',
        'filebrowserFlashBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=flash',
        'filebrowserUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=files',
        'filebrowserImageUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=images',
        'filebrowserFlashUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=flash'
    } );

</script>
@endsection