/**
 * Created by mtrask on 3/12/16.
 */
$(document).ready(function(){
    // Main Page Slider
    $('.image').slick({
        dots: false,
        arrows: false,
        autoplay: true,
        fade: true,
        cassEase: 'linear',
        autoplaySpeed: 2500
    });

    $('[data-toggle=offcanvas]').click(function() {
        $('.row-offcanvas').toggleClass('active');
    });

    var offset = 250;
    var duration = 300;
    $(window).scroll(function(){
        if($(this).scrollTop() > offset) {
            $('.back-to-top').fadeIn(duration);
        } else {
            $('.back-to-top').fadeOut(duration);
        }
    });
});
