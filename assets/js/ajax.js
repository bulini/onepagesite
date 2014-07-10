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
    alert(jQuery(this));
});


    
var $myModal = jQuery('#item');

$myModal.on('shown.bs.modal', function (e) {
	//var modal = jQuery(e.delegateTarget).data('modal').options;

 	
 	//alert(modal);
    var post_id = 24;
    var ajaxURL = SingleAjax.ajaxurl
    $.ajax({
    type: 'POST',
    url: ajaxURL,
    data: {"action": "load-single","post_id": post_id},
    success: function(response) {
        jQuery("#modal-content").html(response);
    return false; 
        }
    }); 
});

}); 



