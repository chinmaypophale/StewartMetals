jQuery(document).ready(function ($) {
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 40) {
            jQuery('.s5_logo').addClass('small-logo');
            jQuery('.navbar').addClass('scroll');
            jQuery('.navbar-nav').addClass('nav_scroll');
        } else {
            jQuery('.s5_logo').removeClass('small-logo');
            jQuery('.navbar').removeClass('scroll');
            jQuery('.navbar-nav').removeClass('nav_scroll');
        }
    });
});
