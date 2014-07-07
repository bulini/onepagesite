jQuery(document).ready(function($) {

        //jQuery(".ajax-click").click(function() {
            jQuery("#loading-animation").show();
            var ajaxURL = ServicesAjax.servicesajaxurl;
            $.ajax({
            type: 'POST',
            url: ajaxURL,
            data: {"action": "load-services"},
            success: function(response) {
                jQuery("#services-response").html(response);
                jQuery("#loading-animation").hide();
            return false;
        }
    }); 



}); 

