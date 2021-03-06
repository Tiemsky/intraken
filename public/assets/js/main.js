$(function() {
    "use strict";
    $(window).on('load', function(event) {
        $('.preloader').delay(500).fadeOut(500);
    });
    $(window).on('scroll', function(event) {
        var scroll = $(window).scrollTop();
        if (scroll < 110) {
            $(".header_navbar").removeClass("sticky");
            $(".navbar_transparent img").attr("src", "assets/images/logo-white.html");
        } else {
            $(".header_navbar").addClass("sticky");
            $(".navbar_transparent img").attr("src", "assets/images/logo.png");
        }
    });
    $(".navbar-toggler").on('click', function() {
        $(this).toggleClass("active");
    });
    var subMenu = $('.sub-menu-bar .navbar-nav .sub-menu');
    if (subMenu.length) {
        subMenu.parent('li').children('a').append(function() {
            return '<button class="sub-nav-toggler"> <span></span> </button>';
        });
        var subMenuToggler = $('.sub-menu-bar .navbar-nav .sub-nav-toggler');
        subMenuToggler.on('click', function() {
            $(this).parent().parent().children('.sub-menu').slideToggle();
            return false
        });
    }
    $('select').niceSelect();
    $('.counter').counterUp({
        delay: 10,
        time: 1600,
    });
    $('.video-popup').magnificPopup({
        type: 'iframe'
    });
    $('.image-popup').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });
    $('.testimonial_active').slick({
        dots: false,
        infinite: true,
        arrows: true,
        prevArrow: '<span class="prev"><i class="fa fa-angle-left"></i></span>',
        nextArrow: '<span class="next"><i class="fa fa-angle-right"></i></span>',
        speed: 800,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
            }
        }]
    });
    var $range = $(".js-range-slider"),
        $inputFrom = $(".js-input-from"),
        $inputTo = $(".js-input-to"),
        instance, min = 500,
        max = 8000,
        from = 0,
        to = 0;
    $range.ionRangeSlider({
        skin: "round",
        type: "double",
        min: min,
        max: max,
        from: 500,
        to: 5500,
        onStart: updateInputs,
        onChange: updateInputs
    });
    instance = $range.data("ionRangeSlider");

    function updateInputs(data) {
        from = data.from;
        to = data.to;
        $inputFrom.prop("value", from);
        $inputTo.prop("value", to);
    }
    $inputFrom.on("input", function() {
        var val = $(this).prop("value");
        if (val < min) {
            val = min;
        } else if (val > to) {
            val = to;
        }
        instance.update({
            from: val
        });
    });
    $inputTo.on("input", function() {
        var val = $(this).prop("value");
        if (val < from) {
            val = from;
        } else if (val > max) {
            val = max;
        }
        instance.update({
            to: val
        });
    });
    $(window).on('scroll', function(event) {
        if ($(this).scrollTop() > 600) {
            $('.back-to-top').fadeIn(200)
        } else {
            $('.back-to-top').fadeOut(200)
        }
    });
    $('.back-to-top').on('click', function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: 0,
        }, 1500);
    });


        $('select').selectpicker();
      


});