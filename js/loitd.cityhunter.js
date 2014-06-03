/*
	JS build & customized by Loitd for cityhunter project
	@Site: loitd.com
	@Date: 2014
*/
jQuery(document).ready(function(){
	//alert(document.URL);
	//fix member view breadcrums
	var memberview = jQuery('a[title="Go to Members View."]');
	var memberedit = jQuery('a[title="Go to Members Edit."]');
	var memberedit = jQuery('a[title="Go to Restaurants View."]');
	
	memberview.attr("href", document.URL).html( jQuery('#username').text() );
	memberedit.attr("href", document.URL).html( jQuery('#username').text() );

	//iOS / iPhone style toggle switch
	$('#notificationbtn').iphoneStyle({});

	// it is a compliated world. Loitd has changed this. It is for dashboard
	jQuery('#notificationbtn').bind('iphoneChange', function(e, d){
		// alert();
		jQuery.ajax({
			type		: 'get',
			url			: 'dashboard/update', //because on production is different
			data		: '',
			beforeSend	: function(){},
			success		: function(data){
				location.reload();
			},
			error: function(jqXHR, ex){}
		});
	});

	// button image delete pressed
	// jQuery('.img-delete-btn').click(function(e){
	// 	alert("johnny");
	// });
	
	//button delete comment click
	jQuery('a.btn-reset-pwd').click(function(e){
		e.preventDefault();
		var cf = confirm("Do you want to reset password for this user?");
		if(cf == true){ 
			//OK button press
			var parent = jQuery(this);
			var tr = parent.parent().parent();
			jQuery.ajax({
				type		: 'get',
				url			: '../members/resetpwd',
				data		: 'ajax=1&action=deletecmt&uid=' + parent.attr('uid') + '&email=' + parent.attr('uemail'),
				beforeSend	: function(){
					//console.log("ajax begin called");
					parent.animate({color:'black'},300);
				},
				success		: function(data){
					var response = $(data).filter('#status').text();
					if(response == 'successful'){
						
					} else {
						console.log("There was an error while processing.");
					}
				},
				error: function(jqXHR, ex){
					if(ex == 'timeout'){
						console.log("There was an timeout error while processing.");
					} else if(jqXHR.status == 404){
						console.log("The requested page not found.");
					} else {
						console.log("Error: " + jqXHR.responseText);
					}
					
				}
			});
		} //only do if press OK
		
	}); //end onclick


	//button delete comment click
	jQuery('a.btn-delete-comment').click(function(e){
		e.preventDefault();
		var cf = confirm("Do you want to delete this comment?");
		if(cf == true){ 
			//OK button press
			var parent = jQuery(this);
			var tr = parent.parent().parent();
			jQuery.ajax({
				type		: 'get',
				url			: '../members/delete',
				data		: 'ajax=1&action=deletecmt&uid=' + parent.attr('uid') + '&cmtid=' + parent.attr('cmtid'),
				beforeSend	: function(){
					//console.log("ajax begin called");
					parent.animate({color:'black'},300);
				},
				success		: function(data){
					var response = $(data).filter('#status').text();
					if(response == 'successful'){
						tr.slideUp(300, function(){
							tr.remove();
							location.reload();
						});
					} else {
						console.log("There was an error while processing.");
					}
				},
				error: function(jqXHR, ex){
					if(ex == 'timeout'){
						console.log("There was an timeout error while processing.");
					} else if(jqXHR.status == 404){
						console.log("The requested page not found.");
					} else {
						console.log("Error: " + jqXHR.responseText);
					}
					
				}
			});
		} //only do if press OK
		
	}); //end onclick

	//on delete billing button clicked
	jQuery('.btn-delete-billing').click(function(e){
		e.preventDefault();
		var cf = confirm("Are you sure you want to delete this member?");
		if (cf == true) {
			var me = jQuery(this);
			var tr = jQuery( "div[forbilling=" + me.attr('bid') + "]" );
			//console.log( 'ajax=1&action=deletebillinginfo&uid=' + me.attr('uid') + '&billid=' + me.attr('billid') );
			jQuery.ajax({
				type		: 'get',
				url			: '../members/delete',
				data		: 'ajax=1&action=deletebilling&bid=' + me.attr('bid'),
				beforeSend	: function(){
					//console.log("ajax begin called");
					me.animate({color:'black'},300);
				},
				success		: function(data){
					var response = $(data).filter('#status').text();
					//console.log(response);
					if(response == 'successful'){
						tr.slideUp(300, function(){
							tr.remove();
						});
					} else {
						console.log("There was an error while processing.");
					}
				},
				error: function(jqXHR, ex){
					if(ex == 'timeout'){
						console.log("There was an timeout error while processing.");
					} else if(jqXHR.status == 404){
						console.log("The requested page not found.");
					} else {
						console.log("Error: " + jqXHR.responseText);
					}
					
				}
			});

		}
	});

	//on delete member button clicked
	jQuery('.btn-delete-member').click(function(e){
		e.preventDefault();
		var cf = confirm("Are you sure you want to delete this member?");
		if (cf == true) {
			var me = jQuery(this);
			var tr = jQuery( "tr[formember=" + me.attr('uid') + "]" );
			//console.log( 'ajax=1&action=deletebillinginfo&uid=' + me.attr('uid') + '&billid=' + me.attr('billid') );
			jQuery.ajax({
				type		: 'get',
				url			: 'members/delete',
				data		: 'ajax=1&action=deletemember&uid=' + me.attr('uid'),
				beforeSend	: function(){
					//console.log("ajax begin called");
					me.animate({color:'black'},300);
				},
				success		: function(data){
					var response = $(data).filter('#status').text();
					//console.log(response);
					if(response == 'successful'){
						tr.slideUp(300, function(){
							tr.remove();
							location.reload();
						});
					} else {
						console.log("There was an error while processing.");
					}
				},
				error: function(jqXHR, ex){
					if(ex == 'timeout'){
						console.log("There was an timeout error while processing.");
					} else if(jqXHR.status == 404){
						console.log("The requested page not found.");
					} else {
						console.log("Error: " + jqXHR.responseText);
					}
					
				}
			});

		}
	});

	//on delete member button clicked
	jQuery('.btn-delete-staff').click(function(e){
		e.preventDefault();
		var cf = confirm("Are you sure you want to delete this staff?");
		if (cf == true) {
			var me = jQuery(this);
			var tr = jQuery( "tr[formember=" + me.attr('uid') + "]" );
			//console.log( 'ajax=1&action=deletebillinginfo&uid=' + me.attr('uid') + '&billid=' + me.attr('billid') );
			jQuery.ajax({
				type		: 'get',
				url			: 'staffs/delete',
				data		: 'ajax=1&action=deletestaff&uid=' + me.attr('uid'),
				beforeSend	: function(){
					//console.log("ajax begin called");
					me.animate({color:'black'},300);
				},
				success		: function(data){
					var response = $(data).filter('#status').text();
					//console.log(response);
					if(response == 'successful'){
						tr.slideUp(300, function(){
							tr.remove();
						});
					} else {
						console.log("There was an error while processing.");
					}
				},
				error: function(jqXHR, ex){
					if(ex == 'timeout'){
						console.log("There was an timeout error while processing.");
					} else if(jqXHR.status == 404){
						console.log("The requested page not found.");
					} else {
						console.log("Error: " + jqXHR.responseText);
					}
					
				}
			});

		}
	});

	//on delete member button clicked
	jQuery('.btn-reset-staff-password').click(function(e){
		e.preventDefault();
		var cf = confirm("Are you sure you want to reset password of this staff?");
		if (cf == true) {
			var me = jQuery(this);
			console.log( 'ajax=1&action=resetpassword&uid=' + me.attr('uid') );
			jQuery.ajax({
				type		: 'get',
				url			: '../staffs/delete',
				data		: 'ajax=1&action=resetpassword&uid=' + me.attr('uid'),
				beforeSend	: function(){
					//console.log("ajax begin called");
					me.animate({color:'black'},900);
				},
				success		: function(data){
					var response = $(data).filter('#status').text();
					//console.log(response);
					if(response == 'successful'){
						alert("The password has been reset successfully. New password is x123456789.");
					} else {
						console.log("There was an error while processing.");
					}
				},
				error: function(jqXHR, ex){
					if(ex == 'timeout'){
						console.log("There was an timeout error while processing.");
					} else if(jqXHR.status == 404){
						console.log("The requested page not found.");
					} else {
						console.log("Error: " + jqXHR.responseText);
					}
					
				}
			});

		}
	});

	//on toggle staff state button clicked
	jQuery('.btn-deactivate-staff').click(function(e){
		e.preventDefault();
		var cf = confirm("Are you sure you want to activate/deactivate this staff?");
		if (cf == true) {
			var me = jQuery(this);
			var tr = jQuery( "span[forstafftxt=" + me.attr('uid') + "]" );
			var cr = jQuery("#StaffState").attr('currentStaffState');
			//console.log( 'ajax=1&action=deactivatestaff&uid=' + me.attr('uid') );
			jQuery.ajax({
				type		: 'get',
				url			: '../staffs/delete',
				data		: 'ajax=1&action=deactivatestaff&uid=' + me.attr('uid') + '&cr=' + cr,
				beforeSend	: function(){
					//console.log("ajax begin called");
					me.animate({color:'black'},300);
				},
				success		: function(data){
					var response = $(data).filter('#status').text();
					//console.log(response);
					if(response == 'successful'){
						if(cr == 'active'){
							//curent status is inactive
							tr.html('inactive');
							tr.removeClass('label-success');
							//button is activate
							me.removeClass('btn-inverse');
							me.addClass('btn-success');
							me.html('<i class="icon-remove-sign icon-white"></i>Activate');	
							//change current status anchor
							jQuery("#StaffState").attr('currentStaffState', 'inactive');
						} else {
							//curent status is active
							tr.html('active');
							tr.addClass('label-success');
							//button is deactivate
							me.removeClass('btn-success btn-activate-staff');
							me.addClass('btn-inverse btn-deactivate-staff');
							me.html('<i class="icon-remove-sign icon-white"></i>Deactivate');
							//change current status anchor
							jQuery("#StaffState").attr('currentStaffState', 'active');
						}
						
					} else {
						console.log("There was an error while processing." + response);
					}
				},
				error: function(jqXHR, ex){
					if(ex == 'timeout'){
						console.log("There was an timeout error while processing.");
					} else if(jqXHR.status == 404){
						console.log("The requested page not found.");
					} else {
						console.log("Error: " + jqXHR.responseText);
					}
					
				}
			});

		}
	});


	//on delete restaurant button clicked
	jQuery('.btn-delete-restaurant').click(function(e){
		e.preventDefault();
		var cf = confirm("Are you sure you want to delete this restaurant?");
		if (cf == true) {
			var me = jQuery(this);
			var tr = jQuery( "tr[forr=" + me.attr('rid') + "]" );
			//console.log( 'ajax=1&action=deletebillinginfo&uid=' + me.attr('uid') + '&billid=' + me.attr('billid') );
			jQuery.ajax({
				type		: 'get',
				url			: 'restaurants/delete',
				data		: 'ajax=1&action=deleterestaurant&rid=' + me.attr('rid'),
				beforeSend	: function(){
					//console.log("ajax begin called");
					me.animate({color:'black'},300);
				},
				success		: function(data){
					var response = $(data).filter('#status').text();
					//console.log(response);
					if(response == 'successful'){
						tr.slideUp(300, function(){
							tr.remove();
						});
					} else {
						console.log("There was an error while processing.");
					}
				},
				error: function(jqXHR, ex){
					if(ex == 'timeout'){
						console.log("There was an timeout error while processing.");
					} else if(jqXHR.status == 404){
						console.log("The requested page not found.");
					} else {
						console.log("Error: " + jqXHR.responseText);
					}
					
				}
			});

		}
	});

	//on delete restaurant button clicked
	jQuery('.btn-deactivate-deal').click(function(e){
		e.preventDefault();
		var cf = confirm("Are you sure you want to deactivate this deal?");
		if (cf == true) {
			var me = jQuery(this);
			var tr = jQuery( 'span[label-status="'+me.attr('id')+'"]' );
			//console.log( 'ajax=1&action=deletebillinginfo&uid=' + me.attr('uid') + '&billid=' + me.attr('billid') );
			jQuery.ajax({
				type		: 'get',
				url			: 'deals/delete',
				data		: 'ajax=1&action=deactivatedeal&id=' + me.attr('id'),
				beforeSend	: function(){
					//console.log("ajax begin called");
					me.animate({color:'black'},300);
				},
				success		: function(data){
					var response = $(data).filter('#status').text();
					//console.log(response);
					if(response == 'successful'){
						tr.html("inactive");
					} else {
						alert("There was an error while processing.");
					}
				},
				error: function(jqXHR, ex){
					if(ex == 'timeout'){
						alert("There was an timeout error while processing.");
					} else if(jqXHR.status == 404){
						alert("The requested page not found.");
					} else {
						alert("Error: " + jqXHR.responseText);
					}
					
				}
			});

		}
	});

	//on delete restaurant button clicked
	jQuery('.btn-sale-hide').click(function(e){
		e.preventDefault();
		var cf = confirm("Are you sure you want to hide this sale?");
		if (cf == true) {
			var me = jQuery(this);
			//var tr = jQuery( 'span[label-status="'+me.attr('id')+'"]' );
			//console.log( 'ajax=1&action=deletebillinginfo&uid=' + me.attr('uid') + '&billid=' + me.attr('billid') );
			jQuery.ajax({
				type		: 'get',
				url			: 'sales/update',
				data		: 'ajax=1&action=hide&sid=' + me.attr('id'),
				beforeSend	: function(){
					//console.log("ajax begin called");
					me.animate({color:'black'},300);
				},
				success		: function(data){
					var response = $(data).filter('#status').text();
					//console.log(response);
					if(response == 'successful'){
						me.removeClass('btn-sale-hide').addClass('btn-sale-unhide');
						me.html('<i class="icon-remove-sign icon-white"></i> Unhide ');
						location.reload();
					} else {
						alert("There was an error while processing.");
					}
				},
				error: function(jqXHR, ex){
					if(ex == 'timeout'){
						alert("There was an timeout error while processing.");
					} else if(jqXHR.status == 404){
						alert("The requested page not found.");
					} else {
						alert("Error: " + jqXHR.responseText);
					}
					
				}
			});

		}
	});

	//on delete restaurant button clicked
	jQuery('.btn-sale-unhide').click(function(e){
		e.preventDefault();
		var cf = confirm("Are you sure you want to UN-hide this sale?");
		if (cf == true) {
			var me = jQuery(this);
			//var tr = jQuery( 'span[label-status="'+me.attr('id')+'"]' );
			//console.log( 'ajax=1&action=deletebillinginfo&uid=' + me.attr('uid') + '&billid=' + me.attr('billid') );
			jQuery.ajax({
				type		: 'get',
				url			: 'sales/update',
				data		: 'ajax=1&action=unhide&sid=' + me.attr('id'),
				beforeSend	: function(){
					//console.log("ajax begin called");
					me.animate({color:'black'},300);
				},
				success		: function(data){
					var response = $(data).filter('#status').text();
					//console.log(response);
					if(response == 'successful'){
						me.removeClass("btn-sale-unhide").addClass('btn-sale-hide');
						me.html('<i class="icon-remove-sign icon-white"></i> Hide ');
						location.reload();
					} else {
						alert("There was an error while processing.");
					}
				},
				error: function(jqXHR, ex){
					if(ex == 'timeout'){
						alert("There was an timeout error while processing.");
					} else if(jqXHR.status == 404){
						alert("The requested page not found.");
					} else {
						alert("Error: " + jqXHR.responseText);
					}
					
				}
			});

		}
	});

	//for tabs in deals page
	var whattab = jQuery('#whattab').attr('val');
	if(whattab == 'expiredfrm'){
		$('#myTab a[href="#expired"]').tab('show');
	} else if(whattab == 'availablefrm') {
		$('#myTab a[href="#available"]').tab('show');
	} else {
		$('#myTab a[href="#all"]').tab('show');
	}
	
	//for photos page pagination by jPages
	jQuery("div.pagik").jPages({
		containerID: "itemContainer",
		perPage: 3,
		keyBrowse: true,
		scrollBrowse: false,
		next: "Next",
		previous: "Previous",
	});

	//for button selection (of the photos page)
	jQuery(".btn-group-loitd").click(function(e){
		e.preventDefault();
		jQuery("button.btn-group-loitd").removeClass("pressed");
		jQuery(this).addClass("pressed");
		var w = jQuery(this).attr("class").split(" ")[2].split("-")[1];
		jQuery("#groupby").attr("value", w);
	});

	//datatables (recreated) for Members' Activity
	


//end document ready
});

// save random control in page
function savestaffnote(){
	var uid = jQuery("#uniqueid").attr("placeholder");
	var notes = jQuery("#textarea2").val();
	// do ajax
	jQuery.ajax({
		type		: 'get',
		url			: '../staffs/delete',
		data		: 'ajax=1&action=savestaffnote&uid=' + uid + '&notes=' + notes,
		beforeSend	: function(){
			// console.log("ajax begin called");
			// me.animate({color:'black'},300);
		},
		success		: function(data){
			var response = $(data).filter('#status').text();
			//console.log(response);
			if(response == 'successful'){
				return true;
			} else {
				return false;
			}
		},
		error: function(jqXHR, ex){
			return false;
		}
	});
	// return confirm("do you love?");
}