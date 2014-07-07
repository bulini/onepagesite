jQuery(document).ready(function($) {

        //jQuery(".ajax-click").click(function() {
            jQuery("#loading-animation").show();
            var blogajaxURL = BlogAjax.blogajaxurl;
            $.ajax({
            type: 'POST',
            url: blogajaxURL,
            data: {"action": "load-blog"},
            success: function(response) {
                jQuery("#blog-response").html(response);
                jQuery("#loading-animation").hide();
            return false;
        }
    }); 



}); 

