jQuery(document).ready(function(jQuery) {

    jQuery(".navbar--menu").click(function() {

        if (jQuery("#block-search-form").hasClass("is-visible")) {
            jQuery("#block-search-form").removeClass("is-visible");            
            jQuery("#block-system-main-menu").toggleClass("is-visible");            
        } 
        else {
            jQuery("#block-system-main-menu").toggleClass("is-visible");
        }

    });

    jQuery(".navbar--search").click(function() {

        if (jQuery("#block-system-main-menu").hasClass("is-visible")) {
            jQuery("#block-system-main-menu").removeClass("is-visible");            
            jQuery("#block-search-form").toggleClass("is-visible");            
        } 
        else {
            jQuery("#block-search-form").toggleClass("is-visible");
        }

    });

});