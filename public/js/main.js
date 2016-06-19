$(document).ready(function(){

    $(document).foundation();

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

    $('button.button#cast').on('click', function(){
        var data = $('form#cast').serialize();
        console.log(data);
        $.ajax({
            url: '/admin/cast',
            data: data,
            cache: false,
            async: true,
            success: function() {
                console.log(data);
            },
            failure: function() {

            }
        });
    });

    $('button.button#editCast').on('click', function(){
        var data = $('form#editCast').serialize();
        console.log(data);
        $.ajax({
            url: '/admin/editCast',
            data: data,
            method: patch,
            cache: false,
            async: true,
            success: function() {
                console.log(data);
            },
            failure: function() {

            }
        });
    });

    $('button.button#whatsNew').on('click', function(){
        var data = $('form#whatsNew').serialize();
        console.log(data);
        $.ajax({
            url: '/admin/whatsNew',
            data: data,
            method: patch,
            cache: false,
            async: true,
            success: function() {
                console.log(data);
            },
            failure: function() {

            }
        });
    });




});
