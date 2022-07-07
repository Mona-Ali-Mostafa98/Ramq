/*global $,AOS,alert*/
$(document).ready(function () {
    "use strict";

    $(window).load(function () {
        $("body").css('overflow-y', 'auto');
        $('#loading').fadeOut(1000);
    });

    $('[data-tool="tooltip"]').tooltip({
        trigger: 'hover',
        animate: true,
        delay: 50,
        container: 'body'
    });

    $(".show-pass").click(function () {
        $(this).find('i').toggleClass("la-eye-slash la-eye");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
        $(this).toggleClass('active');
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $(".toTop").css("bottom", "50px");
        } else {
            $(".toTop").css("bottom", "-100px");
        }
    });

    $(".toTop").click(function () {
        $("html,body").animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    //customize the header
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.main-head').addClass('sticky');
        } else {
            $('.main-head').removeClass('sticky');
        }
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.op-sidebar').css('top', '30px');
        } else {
            $('.op-sidebar').css('top', '210px');
        }
    });

    $('[data-fancybox]').fancybox();

    $(".ab-slider").owlCarousel({
        nav: false,
        loop: false,
        dots: true,
        autoplay: 4000,
        center: true,
        autoplaySpeed: 1000,
        autoplayHoverPause: true,
        items: 1,
        navText: ["<i class='la la-arrow-left'></i>", "<i class='la la-arrow-right'></i>"],
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        mouseDrag: false,
        touchDrag: false
    });

    $(".most-slider").owlCarousel({
        nav: true,
        loop: true,
        navText: ["<i class='la la-arrow-left'></i>", "<i class='la la-arrow-right'></i>"],
        dots: false,
        autoplay: 4000,
        items: 4.3,
        autoplayHoverPause: true,
        center: false,
        responsiveClass: true,

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4.3
            },
            1300: {
                items: 4.3
            }
        }
    });

    $(".part-slider").owlCarousel({
        nav: false,
        loop: true,
        navText: ["<i class='la la-arrow-left'></i>", "<i class='la la-arrow-right'></i>"],
        dots: true,
        autoplay: 4000,
        items: 6,
        autoplayHoverPause: true,
        center: true,
        responsiveClass: true,
        rtl: false,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 6
            },
            1300: {
                items: 6
            }
        }
    });

    AOS.init({
        once: true
    });

    $('.counter').counterUp({
        delay: 10,
        time: 2000
    });

    $('.op-menu').click(function () {
        $('.nav-manu').addClass('active');
        $('html').addClass('off');
    });

    $('.cl-menu').click(function () {
        $('.nav-manu').removeClass('active');
        $('html').removeClass('off');
    });

    $('.dark-th').click(function () {
        $('.wrapper').toggleClass('dark');
    });

    $('.btn-fav').click(function () {
        $(this).toggleClass('active');
    });

    if ($('.nice-select').length) {
        $('.nice-select').niceSelect();
    }

    var changeSlide = 2; // mobile -1, desktop + 1
    // Resize and refresh page. slider-two slideBy bug remove
    var slide = changeSlide;
    if ($(window).width() < 600) {
        var slide = changeSlide;
        slide--;
    } else if ($(window).width() > 999) {
        var slide = changeSlide;
        slide++;
    } else {
        var slide = changeSlide;
    }
    $('.one').owlCarousel({
        nav: true,
        items: 1,
        autoplay: 4000,
        navText: ["<i class='la la-arrow-left'></i>", "<i class='la la-arrow-right'></i>"],
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        dots: true,
        mouseDrag: false,
        touchDrag: false
    })
    $('.two').owlCarousel({
        nav: false,
        dots: false,
        margin: 10,
        mouseDrag: false,
        touchDrag: false,
        responsive: {
            0: {
                items: changeSlide - 1,
                slideBy: changeSlide - 1
            },
            600: {
                items: changeSlide,
                slideBy: changeSlide
            },
            1000: {
                items: changeSlide,
                slideBy: changeSlide
            }
        }
    })
    var owl = $('.one');
    owl.owlCarousel();
    owl.on('translated.owl.carousel', function (event) {
        $('.slider-two .item').removeClass("active");
        var c = $(".slider .owl-item.active").index();
        $('.slider-two .item').eq(c).addClass("active");
        var d = Math.ceil((c + 1) / (slide)) - 1;
        $(".slider-two .owl-dots .owl-dot").eq(d).trigger('click');
    })

    $('.slider-two .item').click(function () {
        var b = $(".item").index(this);
        $(".slider .owl-dots .owl-dot").eq(b).trigger('click');
        $(".slider-two .item").removeClass("active");
        $(this).addClass("active");
    });

    // for upload file
    $(document).on('change', ':file', function () {
        var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
    });
    $(':file').on('fileselect', function (event, numFiles, label) {

        var input = $(this).parents('.f-upload').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;

        if (input.length) {
            input.val(log);
        } else {
            if (log) {
                // alert(log);
            }
        }
    });



      $(".edit-data").click(function () {
        $(".prev-form").hide();
        $(".edit-form").show();

    });

});
