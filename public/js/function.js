$(document).ready(function(){
	var url = $('base').attr('href');
	var fullUrl = window.location.href;
	var page = 'categories';
	if(fullUrl.indexOf("budgets") > -1) {
   		page = 'budgets';
	}else if(fullUrl.indexOf("services") > -1){
		page = 'services';
	}else if(fullUrl.indexOf("categories") > -1){
		page = 'categories';
	}else if(fullUrl.indexOf("durations") > -1){
		page = 'durations';
	}else if(fullUrl.indexOf("cities") > -1){
		page = 'cities';
	}else if(fullUrl.indexOf("activities") > -1){
		page = 'activities';
	}else if(fullUrl.indexOf("home") > -1){
		page = 'home';
	}else if(fullUrl.indexOf("blogs") > -1){
		page = 'blogs';
	}

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

	$('.active-btn').click(function(){
		var _self = $(this);

		var request = $.ajax({
			url: url + "/" + page + "/inactive",
			method: "POST",
			data: { id : $(this).attr('data-id') },
			dataType: "json"
		});
		 
		request.done(function( msg ) {
		  	console.log(msg);
		  	if(msg.status == 200){
		  		console.log(_self);
		  		_self.parent().find('.inactive-btn').removeClass('d-none');
		  		_self.addClass('d-none');
		  	}
		});
		 
		request.fail(function( jqXHR, textStatus ) {
		  	alert( "Request failed: " + textStatus );
		});
	});

	$('.inactive-btn').click(function(){
		var _self = $(this);

		var request = $.ajax({
			url: url + "/" + page + "/active",
			method: "POST",
			data: { id : $(this).attr('data-id') },
			dataType: "json"
		});
		 
		request.done(function( msg ) {
		  	if(msg.status == 200){
		  		console.log(_self);
		  		_self.parent().find('.active-btn').removeClass('d-none');
		  		_self.addClass('d-none');
		  	}
		});
		 
		request.fail(function( jqXHR, textStatus ) {
		  	alert( "Request failed: " + textStatus );
		});
	});
});