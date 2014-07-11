var $myModal = jQuery('#item');

jQuery(document).ready(function($) {

        //jQuery(".ajax-click").click(function() {
    jQuery("#loading-animation").show();
    var ajaxURL = MyAjax.ajaxurl;
    $.ajax({
    type: 'POST',
    url: ajaxURL,
    data: {"action": "load-content"},
    success: function(response) {
        jQuery("#cars-response").html(response);
        jQuery("#loading-animation").hide();
    return false;
        }
    }); 
    
jQuery( ".portfolio-item a" ).click(function() {
	alert('cristo');
	jQuery( this ).fadeOut();
});    


jQuery("body").on('click','.portfolio-item',function(){
    
    var post_id = jQuery(this).data("post-id");
    var ajaxURL = SingleAjax.ajaxurl
	
	//alert(jQuery(this).data("post-id"));
	//console.log(SingleAjax.ajaxurl);	

    $.ajax({
    	type: 'POST',
		url: ajaxURL,
		data: {"action": "load-single","post_id": post_id},
		success: function(response) {
        	jQuery("#item .modal-body").html(response);
			jQuery("#item").modal("show");
			return false; 
        }
    }); 
});


// Attach a submit handler to the form
jQuery( "#contactform" ).submit(function( event ) {
	event.preventDefault();


		  // Stop form from submitting normally

	 
	  // Get some values from elements on the page:
	  var $form = jQuery( this ),
	    name = $form.find( "input[name='name']" ).val(),
	    email = $form.find( "input[name='email']" ).val(),
	    message = $form.find( "textarea[name='message']" ).val(),
		url= ajaxURL;
	    //url = $form.attr( "action" );
	 
	  // Send the data using post
	  var posting = $.post( url, { name:name, email:email, message:message } );
	  
	  // Put the results in a div
	  posting.done(function( data ) {
	    var content = '<h2>Request sent succesfully</h2>';
	    //var content = jQuery( data ).find( "#content" );
	    jQuery( "#contactform" ).empty().append( content );
	  });
	  });
	
	});





 




