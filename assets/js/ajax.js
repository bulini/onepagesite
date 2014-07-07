jQuery(document).ready(function($) {

        //jQuery(".ajax-click").click(function() {
            jQuery("#loading-animation").show();
            var ajaxURL = MyAjax.ajaxurl;
            $.ajax({
            type: 'POST',
            url: ajaxURL,
            data: {"action": "load-content"},
            success: function(response) {
                jQuery("#portfolio-response").html(response);
                jQuery("#loading-animation").hide();
            return false;
        }
    }); 



}); 

