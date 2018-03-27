@extends('layouts.app')

@section('content')
<script src="{{ url('/') }}/public/templateEditor/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="{{ url('/') }}/public/css/croppie.css" />
<script src="http://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-primary mt-3" role="alert">
			  	Create New Service
			</div>
            
            @if($errors->any())
   				<div class="form-group">
					<label for="message" class="col-sm-offset-2 col-sm-10 text-danger">{{ $errors->first() }} </label>
				</div>
			@endif
			<div class="row">
				<div class="col-sm-4">
					<img id="image_blog" src="{{ url('/') }}/public/images/home/1220_720.jpg" width="100%">
					<div class="form-group row">
						{!! Form::label('icon', 'Select a icon for service', ['class' => 'col-md-12 control-label']) !!}
					    <div class="col-md-12">
					    	@foreach($iconList as $icon)
					    	<span class="service" data-icon="{{ $icon }}"><i class="fa fa-{{ $icon }} icon-size"></i></span>
					    	@endforeach
					    </div>
					</div>
				</div>
				<div class="col-sm-8">
					{{ Form::open(['route' => 'services.store', 'class' => 'form-horizontal']) }}
						<input type="hidden" id="image_field" name="image" value="">
						<input type="hidden" id="icon_field" name="icon" value="">
						<input type="file" name="image-img" id="image-img" style="display: none;">
						<div class="form-group row">
						    {!! Form::label('name', 'Name', ['class' => 'col-md-3 control-label']) !!}
						    <div class="col-md-9">
						        {!! Form::text('name', null, ['class' => 'form-control']) !!}
						        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
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
				  	{!! Form::close() !!}
				</div>
			</div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Upload Image</h5>
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

    $(document).ready(function(){
    	var $fileUpload;
    	var $uploadCrop;

    	$uploadCrop = $('#upload-demo').croppie({
			enableExif: true,
	        viewport: {
	            width: 610,
	            height: 360,
	            type: 'square'
	        },
	        boundary: {
	            width: 800,
	            height: 500
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

		$('span.service').click(function(){
			$('#icon_field').val($(this).attr('data-icon'));
			removeSelected();
			$(this).addClass('selected');
		});

		function removeSelected(){
			$.each($('span.service'), function(i, v){
				$(this).removeClass('selected');
			});
		}
    });
</script>
@endsection