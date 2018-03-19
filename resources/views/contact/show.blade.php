@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Show Contact</div>

                <div class="panel-body">
                    <div class="row">
				    	<label for="inputContactName" class="col-sm-2 control-label">Contact Name</label>
				    	<div class="col-sm-10">
				    		<b>{{ $contact->name }}</b>
				    	</div>
				  	</div>
                    <div class="row">
				    	<label for="inputContactEmail" class="col-sm-2 control-label">Contact Email</label>
				    	<div class="col-sm-10">
				    		<b>{{ $contact->email }}</b>
				    	</div>
				  	</div>
                    <div class="row">
				    	<label for="inputContactSubject" class="col-sm-2 control-label">Contact Subject</label>
				    	<div class="col-sm-10">
				    		<b>{{ $contact->subject }}</b>
				    	</div>
				  	</div>
                    <div class="row">
				    	<label for="inputContactMessage" class="col-sm-2 control-label">Contact Message</label>
				    	<div class="col-sm-10">
				    		<b>{{ $contact->message }}</b>
				    	</div>
				  	</div>
                    <div class="row">
				    	<div class="col-sm-offset-2 col-sm-10">
				            <a href="{{ url('contacts/') }}" class="btn btn-primary">
				            	<i class="fa fa-list" aria-hidden="true"></i> List
				            </a>
				    	</div>
				  	</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection