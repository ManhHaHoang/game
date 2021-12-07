$(function () {
    $('a.privacy-notice-link').attr({
        rel: "noopener"
    });
    $('#watchTrailer').on('click', function () {
        $('body').addClass('trailer-open');
    });
    $('.fx-video-overlay').on('click', function () {
        $('body').removeClass('trailer-open');
    });
    $('#watchGameplayTrailer').on('click', function () {
        $('body').addClass('trailer-open');
    });

    $('.characters-slider').slick({
        dots: true,
        arrows: false
    });
    $('.animals-slider').slick({
        dots: false,
        arrows: false,
        fade: true,
        autoplay: false
    });
    $('#animal1').on('click', function () {
        $('.animals-slider').slick('slickGoTo', 0);
    });
    $('#animal2').on('click', function () {
        $('.animals-slider').slick('slickGoTo', 1);
    });
    $('#animal3').on('click', function () {
        $('.animals-slider').slick('slickGoTo', 2);
    });
    $('#animal4').on('click', function () {
        $('.animals-slider').slick('slickGoTo', 3);
    });
    $('#animal5').on('click', function () {
        $('.animals-slider').slick('slickGoTo', 4);
    });
    $('#animal6').on('click', function () {
        $('.animals-slider').slick('slickGoTo', 5);
    });
    $('.farmhands-slider').slick({
        dots: false,
        arrows: false,
        fade: true,
        cssEase: 'linear',
        autoplay: true
    });
    $('#farmhand1').on('click', function () {
        $('.farmhands-slider').slick('slickGoTo', 0);
    });
    $('#farmhand2').on('click', function () {
        $('.farmhands-slider').slick('slickGoTo', 1);
    });
    $('#farmhand3').on('click', function () {
        $('.farmhands-slider').slick('slickGoTo', 2);
    });
    $('#farmhand4').on('click', function () {
        $('.farmhands-slider').slick('slickGoTo', 3);
    });
    $('#farmhand5').on('click', function () {
        $('.farmhands-slider').slick('slickGoTo', 4);
    });
    $('.characters-slider').on('afterChange', function (event, slick, currentSlide) {
        switch (currentSlide) {
            case 0:
            $('.characters-wrapper').css('background-position', '0 0');
            break;
            case 1:
            $('.characters-wrapper').css('background-position', '0 20%');
            break;
            case 2:
            $('.characters-wrapper').css('background-position', '0 40%');
            break;
            case 3:
            $('.characters-wrapper').css('background-position', '0 60%');
            break;
            case 4:
            $('.characters-wrapper').css('background-position', '0 80%');
            break;
            default:
            $('.characters-wrapper').css('background-position', '0 100%');
        }
    });

    var scrollPosition = $(window).height();
    $(window).scroll(function() {
        if ($(this).scrollTop() > scrollPosition / 2) {
            $('.site-header').addClass('header-bg');
        } else {
            $('.site-header').removeClass('header-bg');
        }
    });

    $('.nav-menu').click(function () {
        $('body').addClass('open-menu');
    })
    $('.close-menu, .navigation-bg').click(function () {
        $('body').removeClass('open-menu');
    })

    $('.navigation-link').click(function() {
        var hrefLink = $(this).attr('data-name');
        // alert(hrefLink);
        $('html, body').animate({scrollTop: $(hrefLink).offset().top - 88}, 700);
        // location.href =  hrefLink
    });
});
