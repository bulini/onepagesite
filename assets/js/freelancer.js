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


