jQuery(document).ready(function($){
	
	// do something 
	
	function debug(msg) {
		try {
			//console.log(msg);
		} catch(e) {}
	}
	
	function modal_alert(msg, type, title, callback ) {
		
		msg = typeof msg !== 'undefined' ? msg : 'no message provided';
		type = typeof type !== 'undefined' ? type : 'success';
		title = typeof title !== 'undefined' ? title : '';
		
		// create modal DOM object
		var modal = $('<div class="modal fade">'
		  +'<div class="modal-dialog">'
		    +'<div class="modal-content">'
		      +'<div class="modal-header">'
		        +'<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
		        +'<h4 class="modal-title">'+title+'</h4>'
		      +'</div>'
		      +'<div class="modal-body">'
		      	+'<div class="alert alert-'+type+'">'
		        +'<p>'+msg+'</p>'
		        +'</div>'
		      +'</div>'
		      +'<div class="modal-footer">'
		        +'<button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>'
		      +'</div>'
		    +'</div><!-- /.modal-content -->'
		  +'</div><!-- /.modal-dialog -->'
		+'</div><!-- /.modal -->');
		
		// show modal
		$(modal).appendTo('body').modal('show');
		
		// give focus to ok button
		$('.btn-primary',modal).focus();
		
		// remove focus from form inputs
		$('input,email,button','form').blur();

		$(document).unbind('keyup').keyup(function(e){ 
		    var code = e.which; // recommended to use e.which, it's normalized across browsers
		    if(code==13)
		    {
		        $('.btn-primary',modal).trigger('click');
		    }
		    return false;
		});

		// run this on modal close		
		$(modal).on('hidden.bs.modal', function(){
			// remove modal from DOM
			$(this).remove();
			// run optional custom callback
			try {		
				callback();
			} catch(e) {}
		});
	
	}
	
	var post_url = document.location.protocol+'//'+document.location.host+'/wp-admin/admin-ajax.php';
	
	$('.slb_form form').each(function(){
		
		debug(this);
		
		var slb_form = $(this);
		
		if( $('[name="subscriber_name"]',slb_form).length == 0 || $('[name="subscriber_email"]',slb_form).length == 0 ) {
		
			modal_alert('Snappy List Builder requires that your form include inputs "subscriber_name" and "subscriber_email"','danger','Oops!');
		
		} else {
			
			
			$(slb_form).validate({
				submitHandler: function(form) {
			
					var emaillist_id = $(slb_form).data('emaillist_id');
					
					// prepare data for our ajax handler
					var post_data = {
						'action' : 'slb_save_subscriber',
						'emaillist_id' : emaillist_id,
						'subscriber_name' : $('[name="subscriber_name"]',slb_form).val(),
						'subscriber_email' : $('[name="subscriber_email"]',slb_form).val()
					}
					
					debug(post_data);	
					
					// post data to our wordpres ajax handler
					$.ajax({
						'url':post_url,
						'type':'post',
						'dataType':'json',
						'data':post_data,
						'cache':false,
						'success':function( response ) {
							debug(response);
							if(response.status){
								// get modal object from DOM
								var modal = $('#slb_modal_'+emaillist_id);
								// close modal
								$(modal).modal('hide');
								// run this on modal close		
								$(modal).on('hidden.bs.modal', function(){
									// clear form 
									$('form',modal)[0].reset();
								});
								// success
								modal_alert(response.message,'success','Success!');
							} else {
								// error
								modal_alert(response.message + ' ' + response.error,'danger','Oops!',function(){
									// give focus back to name field
									$('[name="subscriber_name"]',slb_form).focus();
								});
							}
						}
					});
					
					
					return false;
				}
			});
		
		}
		
	});
	
});