// jQuery for page scrolling feature - requires jQuery Easing plugin
jQuery(function() {
    jQuery('.page-scroll a').bind('click', function(event) {
        var $anchor = jQuery(this);
        jQuery('html, body').stop().animate({
            scrollTop: jQuery($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Floating label headings for the contact form
jQuery(function() {
    jQuery("body").on("input propertychange", ".floating-label-form-group", function(e) {
        jQuery(this).toggleClass("floating-label-form-group-with-value", !! jQuery(e.target).val());
    }).on("focus", ".floating-label-form-group", function() {
        jQuery(this).addClass("floating-label-form-group-with-focus");
    }).on("blur", ".floating-label-form-group", function() {
        jQuery(this).removeClass("floating-label-form-group-with-focus");
    });
});

// Highlight the top nav as scrolling occurs
jQuery('body').scrollspy({
    target: '.navbar-fixed-top'
})


// validation stuff
jQuery(document).ready(function() {


    jQuery('#contactform').bootstrapValidator({
        live: 'enabled',
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        submitButtons: 'button[type="submit"]',
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'The first name is required and cannot be empty'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },

            message: {
                validators: {
                    notEmpty: {
                        message: 'The Message is required'
                    }
                }
            }

        }
    });

    // Validate the form manually

});



