$(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
        $('nav,.dropdown-menu').removeClass('transparent');
    } else {
        $('nav,.dropdown-menu').addClass('transparent');
    }
});