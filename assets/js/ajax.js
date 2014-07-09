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
jQuery('#item').on('shown.bs.modal', function (e) {
    alert(e.relatedTarget);    
    var post_id = 2;
    var ajaxURL = SingleAjax.ajaxurl
    $.ajax({
    type: 'POST',
    url: ajaxURL,
    data: {"action": "load-single","post_id": post_id},
    success: function(response) {
        jQuery("#modal-content").html(response);
 
        }
    }); 
});

}); 



