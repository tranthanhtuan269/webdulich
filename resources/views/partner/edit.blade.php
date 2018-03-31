@extends('layouts.app')

@section('content')
<script src="{{ url('/') }}/public/templateEditor/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="{{ url('/') }}/public/css/croppie.css" />
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-primary mt-3" role="alert">
			  	Sửa đối tác
			</div>
            <form action="{{ url('partners/'.$partner->id) }}" method="POST">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
            @if($errors->any())
   				<div class="form-group">
					<label for="message" class="col-sm-offset-2 col-sm-10 text-danger">{{ $errors->first() }} </label>
				</div>
			@endif
			<div class="row">
				<div class="col-sm-4">
					<img id="image_blog" src="{{ url('/') }}/public/images/{{ $partner->image }}" width="100%">
				</div>
				<div class="col-sm-8">
					<form class="form-horizontal">
						<input type="hidden" id="image_field" name="image" value="{{ $partner->image }}">
						<input type="file" name="image-img" id="image-img" style="display: none;">
						<div class="form-group row">
						    {!! Form::label('name', 'Tên đối tác', ['class' => 'col-md-3 control-label']) !!}
						    <div class="col-md-9">
						        {!! Form::text('name', $partner->name, ['class' => 'form-control']) !!}
						        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
						    </div>
						</div>
						<div class="form-group row">
						    {!! Form::label('url', 'URL', ['class' => 'col-md-3 control-label']) !!}
						    <div class="col-md-9">
						        {!! Form::text('url', $partner->url, ['class' => 'form-control']) !!}
						        {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
						    </div>
						</div>
					  	<div class="form-group row">
					    	<div class="col-sm-offset-4 col-sm-8">
					      		<button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
					      		<a href="{{ url('partners/') }}" class="btn btn-primary">
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

<!-- Modal -->
<div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="upload-demo"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="upload-image-result">Save changes</button>
      </div>
    </div>
  </div>
</div>
<style type="text/css">
    .croppie-container .cr-boundary{
        margin: 0;
        width: 100%!important;
    }
    .croppie-container .cr-slider-wrap{
        margin: 0;
        width: 100%;
    }
</style>

<script src="{{ url('/') }}/public/js/croppie.js"></script>
<script>
	var $sitepath = $('base').attr('href');

    $(document).ready(function(){
    	var $fileUpload;
    	var $uploadCrop;

    	$uploadCrop = $('#upload-demo').croppie({
			enableExif: true,
	        viewport: {
	            width: 150,
	            height: 90,
	            type: 'square'
	        },
	        boundary: {
	            width: 800,
	            height: 350
	        },
	        showZoomer: false
		});
		
    	$('#postModal').on('shown.bs.modal', function (e) {
            e.preventDefault();
            var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
            if ($.inArray($($fileUpload).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                swal({
                    html: '<div class="alert-danger">Only formats are allowed : '+fileExtension.join(', ')+'</div>',
                  })
                return;
            }
            loadImage($fileUpload);
        });

    	$('#image_blog').click(function(){
    		$('#image-img').click();
    	});

    	$('#image-img').change(function(){
    		$fileUpload = this;
    		if($(this).val().length > 0){
	    		$('#postModal').modal('show');
	    	}
    	});

    	function loadImage(input) {
          	if (input.files && input.files[0]) {
	            var reader = new FileReader();
	            
	            reader.onload = function (e) {
					$('.upload-demo').addClass('ready');
	            	$uploadCrop.croppie('bind', {
	            		url: e.target.result
	            	}).then(function(){
	            		console.log('jQuery bind complete');
	            	});
	            	
	            }
	            
	            reader.readAsDataURL(input.files[0]);
	        }
	        else {
		        swal("Sorry - you're browser doesn't support the FileReader API");
		    }
        }

        $('#upload-image-result').on('click', function (ev) {
	        $uploadCrop.croppie('result', {
	            type: 'canvas',
	            size: 'viewport'
	        }).then(function (resp) {

	            $.ajax({
	                headers: {
	                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	                },
	                url: "{{ url('/') }}/ajaxpro",
	                type: "POST",
	                data: {"image":resp},
	                success: function (data) {
	                    if(data.code == 200){
	                        $('#image_blog').val(data.image_url);
	                        $('#image_blog').attr('src',$sitepath + '/public/images/' + data.image_url);
	                        $('#image_field').val(data.image_url);
	                        $('#postModal').modal('toggle');
	                    }
	                }
	            });
	        });
	    });
    });
</script>
@endsection