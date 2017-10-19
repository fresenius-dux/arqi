$(function() {
    
    if (document.location.pathname == "/") {
        $('#menu-primary-menu>li>a:contains("About Us")').attr('href', '#Home');
    }
    else {
        $('#menu-primary-menu>li>a:contains("About Us")').attr('href', '#Home');
    }
    
    // SMOOTH SCROLL
   $('a').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top -150
        }, 500);
        $('.navbar-collapse').removeClass('in');
        return false;
    });
});