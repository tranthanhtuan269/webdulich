@extends('layouts.app')

@section('content')
<?php
	$siteConfig = \DB::table('site_configs')->pluck('text', 'name');
	// dd($siteConfig);
?>

<link rel="stylesheet" type="text/css" href="{{ url('/') }}/public/css/croppie.css" />
<script src="{{ url('/') }}/public/templateEditor/ckeditor/ckeditor.js"></script>
<style type="text/css">
	#v-pills-tab,
	#v-pills-tabContent{
		padding-top: 1rem;
	}
</style>
<div class="container">
	<div class="row">
		<div class="nav flex-column nav-pills col-md-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		  	<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Site Config</a>
		  	<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Home Config</a>
		  	<a class="nav-link" id="v-pills-backgroud-tab" data-toggle="pill" href="#v-pills-backgroud" role="tab" aria-controls="v-pills-backgroud" aria-selected="false">Background</a>
		  	<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
		  	<a class="nav-link" id="v-pills-seo-tab" data-toggle="pill" href="#v-pills-seo" role="tab" aria-controls="v-pills-seo" aria-selected="false">Seo</a>
		</div>
		<div class="tab-content col-md-10" id="v-pills-tabContent">
		  	<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
		  		<div class="row">
			        <div class="col-md-10 col-md-offset-1">
			        	{!! Form::open(['route' => 'home.store', 'class' => 'form-horizontal']) !!}
				   			@if($errors->any())
				   				<div class="form-group row">
									<label for="message" class="col-sm-offset-2 col-sm-10 text-danger">{{ $errors->first() }} </label>
								</div>
							@endif
						  	<div class="form-group row">
						    	<label for="inputSiteName" class="col-sm-2 control-label">Site Name</label>
						    	<div class="col-sm-10">
						      		<input type="text" class="form-control" id="inputSiteName" name="inputSiteName" placeholder="Site Name" value="{{ $siteConfig['site_name'] }}">
						    	</div>
						  	</div>
						  	<div class="form-group row">
						    	<label for="inputAddress1" class="col-sm-2 control-label">Address 1</label>
						    	<div class="col-sm-10">
						      		<input type="text" class="form-control" id="inputAddress1" name="inputAddress1" placeholder="Address1" value="{{ $siteConfig['address1'] }}">
						    	</div>
						  	</div>
						  	<div class="form-group row">
						    	<label for="inputAddress2" class="col-sm-2 control-label">Address 2</label>
						    	<div class="col-sm-10">
						      		<input type="text" class="form-control" id="inputAddress2" name="inputAddress2" placeholder="Address2" value="{{ $siteConfig['address2'] }}">
						    	</div>
						  	</div>
						  	<div class="form-group row">
								<label for="message" class="col-sm-offset-2 col-sm-10 text-danger"><b><u>Chú ý:</u></b> Cả 2 địa chỉ để trống sẽ không hiện địa chỉ </label>
							</div>
						  	<div class="form-group row">
						    	<label for="inputPhone1" class="col-sm-2 control-label">Phone 1</label>
						    	<div class="col-sm-10">
						      		<input type="text" class="form-control" id="inputPhone1" name="inputPhone1" placeholder="Phone1" value="{{ $siteConfig['phone1'] }}">
						    	</div>
						  	</div>
						  	<div class="form-group row">
						    	<label for="inputPhone2" class="col-sm-2 control-label">Phone 2</label>
						    	<div class="col-sm-10">
						      		<input type="text" class="form-control" id="inputPhone2" name="inputPhone2" placeholder="Phone2" value="{{ $siteConfig['phone2'] }}">
						    	</div>
						  	</div>
						  	<div class="form-group row">
								<label for="message" class="col-sm-offset-2 col-sm-10 text-danger"><b><u>Chú ý:</u></b> Cả 2 số điện thoại để trống sẽ không hiện số điện thoại </label>
							</div>
						  	<div class="form-group row">
						    	<label for="inputOpenTime" class="col-sm-2 control-label">Open Time</label>
						    	<div class="col-sm-10">
						      		<input type="text" class="form-control" id="inputOpenTime" name="inputOpenTime" placeholder="Mon -Fri: 9:00-19:00" value="{{ $siteConfig['open_time'] }}">
						    	</div>
						  	</div>
						  	<div class="form-group row">
						    	<label for="inputCloseTime" class="col-sm-2 control-label">Close Time</label>
						    	<div class="col-sm-10">
						      		<input type="text" class="form-control" id="inputCloseTime" name="inputCloseTime" placeholder="Sunday Closed" value="{{ $siteConfig['close_time'] }}">
						    	</div>
						  	</div>
						  	<div class="form-group row">
								<label for="message" class="col-sm-offset-2 col-sm-10 text-danger"><b><u>Chú ý:</u></b> Cả thời gian mở cửa và đóng cửa để trống sẽ không hiện thời gian </label>
							</div>
						  	<div class="form-group row">
						    	<div class="col-sm-offset-2 col-sm-10">
						      		<button type="submit" class="btn btn-default">Save</button>
						    	</div>
						  	</div>
						{!! Form::close() !!}
			        </div>
			    </div>
		  	</div>
		  	<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
		  		<div class="row">
			        <div class="col-sm-8 col-md-offset-1">
			        	<div class="form-group row">
					    	<label for="inputSiteName" class="col-sm-4 control-label">Search Form</label>
					    	<div class="col-sm-8">
					    		@if($siteConfig['search_form'] == 1)
					      		<span class="btn btn-success btn-sm active-btn" data-id="search_form">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn d-none" data-id="search_form">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @else
					            <span class="btn btn-success btn-sm active-btn d-none" data-id="search_form">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn" data-id="search_form">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @endif
					    	</div>
					  	</div>
			        	<div class="form-group row">
					    	<label for="inputSiteName" class="col-sm-4 control-label">About Us</label>
					    	<div class="col-sm-8">
					    		@if($siteConfig['about_us'] == 1)
					      		<span class="btn btn-success btn-sm active-btn" data-id="about_us">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn d-none" data-id="about_us">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @else
					            <span class="btn btn-success btn-sm active-btn d-none" data-id="about_us">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn" data-id="about_us">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @endif
					    	</div>
					  	</div>
			        	<div class="form-group row">
					    	<label for="inputSiteName" class="col-sm-4 control-label">Popular Destinations</label>
					    	<div class="col-sm-8">
					      		@if($siteConfig['popular_destinations'] == 1)
					      		<span class="btn btn-success btn-sm active-btn" data-id="popular_destinations">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn d-none" data-id="popular_destinations">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @else
					            <span class="btn btn-success btn-sm active-btn d-none" data-id="popular_destinations">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn" data-id="popular_destinations">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @endif
					    	</div>
					  	</div>
			        	<div class="form-group row">
					    	<label for="inputSiteName" class="col-sm-4 control-label">Popular Trips</label>
					    	<div class="col-sm-8">
					      		@if($siteConfig['popular_trips'] == 1)
					      		<span class="btn btn-success btn-sm active-btn" data-id="popular_trips">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn d-none" data-id="popular_trips">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @else
					            <span class="btn btn-success btn-sm active-btn d-none" data-id="popular_trips">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn" data-id="popular_trips">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @endif
					    	</div>
					  	</div>
			        	<div class="form-group row">
					    	<label for="inputSiteName" class="col-sm-4 control-label">Clients Experience</label>
					    	<div class="col-sm-8">
					      		@if($siteConfig['clients_experience'] == 1)
					      		<span class="btn btn-success btn-sm active-btn" data-id="clients_experience">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn d-none" data-id="clients_experience">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @else
					            <span class="btn btn-success btn-sm active-btn d-none" data-id="clients_experience">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn" data-id="clients_experience">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @endif
					    	</div>
					  	</div>
			        	<div class="form-group row">
					    	<label for="inputSiteName" class="col-sm-4 control-label">Services</label>
					    	<div class="col-sm-8">
					      		@if($siteConfig['services'] == 1)
					      		<span class="btn btn-success btn-sm active-btn" data-id="services">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn d-none" data-id="services">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @else
					            <span class="btn btn-success btn-sm active-btn d-none" data-id="services">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn" data-id="services">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @endif
					    	</div>
					  	</div>
			        	<div class="form-group row">
					    	<label for="inputSiteName" class="col-sm-4 control-label">Blog</label>
					    	<div class="col-sm-8">
					      		@if($siteConfig['blog'] == 1)
					      		<span class="btn btn-success btn-sm active-btn" data-id="blog">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn d-none" data-id="blog">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @else
					            <span class="btn btn-success btn-sm active-btn d-none" data-id="blog">
					                <i class="fa fa-refresh" aria-hidden="true"></i> Show
					            </span>
					            <span class="btn btn-default btn-sm inactive-btn" data-id="blog">
					                <i class="fa fa-power-off" aria-hidden="true"></i> Hide
					            </span>
					            @endif
					    	</div>
					  	</div>
			        </div>
			    </div>
		  	</div>
		  	<div class="tab-pane fade" id="v-pills-backgroud" role="tabpanel" aria-labelledby="v-pills-backgroud-tab">
		  		<div class="row">
			        <div class="col-sm-8 col-md-offset-1">
			        	<form class="form-horizontal">
							<input type="hidden" id="image_field" name="image" value="">
							<input type="file" name="image-img" id="image-img" style="display: none;">
							<img id="image_blog" src="{{ url('/') }}/public/images/webbanner.jpg" width="100%">
							Ctrl + F5 để xem kết quả.
					  	</form>
			        </div>
			    </div>
		  	</div>
		  	<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
		  		<div class="row">
			        <div class="col-sm-12">
			        	{!! Form::open(['route' => 'home.storePage', 'class' => 'form-horizontal']) !!}
                		{{ csrf_field() }}
			        	<div class="form-group row">
					    	<label for="inputSiteName" class="col-sm-3 control-label">Về chúng tôi</label>
					    	<div class="col-sm-9">
					    		{!! Form::textarea('page_about_us', null, ['class' => 'form-control']) !!}
					    	</div>
					  	</div>
			        	<div class="form-group row">
					    	<label for="inputSiteName" class="col-sm-3 control-label">Các dịch vụ</label>
					    	<div class="col-sm-9">
					    		{!! Form::textarea('page_our_service', null, ['class' => 'form-control']) !!}
					    	</div>
					  	</div>
			        	<div class="form-group row">
					    	<label for="inputSiteName" class="col-sm-3 control-label">Các điều khoản và điều kiện</label>
					    	<div class="col-sm-9">
					    		{!! Form::textarea('page_terms_and_conditions', null, ['class' => 'form-control']) !!}
					    	</div>
					  	</div>
			        	<div class="form-group row">
					    	<label for="inputSiteName" class="col-sm-3 control-label">Bản quyền</label>
					    	<div class="col-sm-9">
					    		{!! Form::textarea('page_copyright', null, ['class' => 'form-control']) !!}
					    	</div>
					  	</div>
			        	<div class="form-group row">
					    	<label for="inputSiteName" class="col-sm-3 control-label">Chính sách bảo mật</label>
					    	<div class="col-sm-9">
					    		{!! Form::textarea('page_privacy_policy', null, ['class' => 'form-control']) !!}
					    	</div>
					  	</div>
			        	<div class="form-group row">
					    	<label for="inputSiteName" class="col-sm-3 control-label">Điều kiện đổi trả</label>
					    	<div class="col-sm-9">
					    		{!! Form::textarea('page_disclaimer', null, ['class' => 'form-control']) !!}
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
		  	<div class="tab-pane fade" id="v-pills-seo" role="tabpanel" aria-labelledby="v-pills-seo-tab">
		  		<div class="row">
			        <div class="col-sm-12">
			        	{!! Form::open(['route' => 'home.storeSeo', 'class' => 'form-horizontal']) !!}
                		{{ csrf_field() }}
			        	<div class="form-group row">
					    	<label for="inputSiteName" class="col-sm-3 control-label">Keywords</label>
					    	<div class="col-sm-9">
					    		{!! Form::textarea('keywords', $siteConfig['keywords'], ['class' => 'form-control']) !!}
					    	</div>
					  	</div>
			        	<div class="form-group row">
					    	<label for="inputSiteName" class="col-sm-3 control-label">Description</label>
					    	<div class="col-sm-9">
					    		{!! Form::textarea('description', $siteConfig['description'], ['class' => 'form-control']) !!}
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

<!-- Modal -->
<div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Change Background</h5>
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

<script src="{{ url('/') }}/public/js/croppie.js"></script>
<script>
	var $sitepath = $('base').attr('href');

	CKEDITOR.replace( 'page_about_us', {
        'filebrowserBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=files',
        'filebrowserImageBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=images',
        'filebrowserFlashBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=flash',
        'filebrowserUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=files',
        'filebrowserImageUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=images',
        'filebrowserFlashUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=flash'
    } );
    var html_page_about_us = '<?php echo preg_replace('/(\>)\s*(\<)/m', '$1$2', str_replace(PHP_EOL, '', $siteConfig['page_about_us'])); ?>';
    CKEDITOR.instances['page_about_us'].setData(html_page_about_us);

	CKEDITOR.replace( 'page_our_service', {
        'filebrowserBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=files',
        'filebrowserImageBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=images',
        'filebrowserFlashBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=flash',
        'filebrowserUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=files',
        'filebrowserImageUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=images',
        'filebrowserFlashUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=flash'
    } );
    var html_page_our_service = '<?php echo preg_replace('/(\>)\s*(\<)/m', '$1$2', str_replace(PHP_EOL, '', $siteConfig['page_our_service'])); ?>';
    CKEDITOR.instances['page_our_service'].setData(html_page_our_service);

	CKEDITOR.replace( 'page_terms_and_conditions', {
        'filebrowserBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=files',
        'filebrowserImageBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=images',
        'filebrowserFlashBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=flash',
        'filebrowserUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=files',
        'filebrowserImageUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=images',
        'filebrowserFlashUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=flash'
    } );
    var html_page_terms_and_conditions = '<?php echo preg_replace('/(\>)\s*(\<)/m', '$1$2', str_replace(PHP_EOL, '', $siteConfig['page_terms_and_conditions'])); ?>';
    CKEDITOR.instances['page_terms_and_conditions'].setData(html_page_terms_and_conditions);

	CKEDITOR.replace( 'page_copyright', {
        'filebrowserBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=files',
        'filebrowserImageBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=images',
        'filebrowserFlashBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=flash',
        'filebrowserUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=files',
        'filebrowserImageUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=images',
        'filebrowserFlashUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=flash'
    } );
    var html_page_copyright = '<?php echo preg_replace('/(\>)\s*(\<)/m', '$1$2', str_replace(PHP_EOL, '', $siteConfig['page_copyright'])); ?>';
    CKEDITOR.instances['page_copyright'].setData(html_page_copyright);

	CKEDITOR.replace( 'page_privacy_policy', {
        'filebrowserBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=files',
        'filebrowserImageBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=images',
        'filebrowserFlashBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=flash',
        'filebrowserUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=files',
        'filebrowserImageUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=images',
        'filebrowserFlashUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=flash'
    } );
    var html_page_privacy_policy = '<?php echo preg_replace('/(\>)\s*(\<)/m', '$1$2', str_replace(PHP_EOL, '', $siteConfig['page_privacy_policy'])); ?>';
    CKEDITOR.instances['page_privacy_policy'].setData(html_page_privacy_policy);

	CKEDITOR.replace( 'page_disclaimer', {
        'filebrowserBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=files',
        'filebrowserImageBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=images',
        'filebrowserFlashBrowseUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/browse.php?opener=ckeditor&type=flash',
        'filebrowserUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=files',
        'filebrowserImageUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=images',
        'filebrowserFlashUploadUrl' : '{{ url("/") }}/public/templateEditor/kcfinder/upload.php?opener=ckeditor&type=flash'
    } );
    var html_page_disclaimer = '<?php echo preg_replace('/(\>)\s*(\<)/m', '$1$2', str_replace(PHP_EOL, '', $siteConfig['page_disclaimer'])); ?>';
    CKEDITOR.instances['page_disclaimer'].setData(html_page_disclaimer);


    $(document).ready(function(){
    	var $fileUpload;
    	var $uploadCrop;

    	$uploadCrop = $('#upload-demo').croppie({
			enableExif: true,
	        viewport: {
	            width: 500,
	            height: 250,
	            type: 'square'
	        },
	        boundary: {
	            width: 800,
	            height: 400
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
	                url: "{{ url('/') }}/ajaxprobackground",
	                type: "POST",
	                data: {"image":resp},
	                success: function (data) {
	                    if(data.code == 200){
	                        $('#image_blog').val(data.image_url);
	                        $('#image_blog').attr('src',$sitepath + '/public/images/webbanner.jpg');
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
