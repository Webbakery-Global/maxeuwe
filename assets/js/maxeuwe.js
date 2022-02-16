import AOS from 'aos';

$(document).ready(function () {

    $(".menu_button").click(function () {
        $(".open_icon").toggleClass("hide");
        $(".close, .close_icon").toggleClass("hide");
        $(".menu_button, #wrapper-navbar").toggleClass("open");
        $(".nav-link, .dropdown-item, .menu_info").toggleClass("fade_in");
        $(".top_menu").toggleClass("black");
    });

    $(".nav-link, .dropdown-item, .navbar-brand, .menu_button.open").click(function () {
        $(".menu_button").addClass("menu_closed").removeClass("menu_open");
        $(".open_icon").removeClass("hide");
        $(".close, .close_icon").addClass("hide");
        $(".menu_button, #wrapper-navbar, .top_menu").removeClass("open");
        $(".top_menu").removeClass("black");
    });

    $(".privacy_modal_link").click(function () {
        $(".privacy_modal").addClass("active");
        $("body").toggleClass("fade_out");
    });

    $(".disclaimer_modal_link").click(function () {
        $(".disclaimer_modal").addClass("active");
        $("body").toggleClass("fade_out");
    });

    $(".close").click(function () {
        $(".privacy_modal, .disclaimer_modal").removeClass("active");
        $("body").removeClass("fade_out");
    });


    document.onkeydown = function (evt) {
        evt = evt || window.event;
        if (evt.keyCode == 27) {
            $(".modal").removeClass("active");
            $("menu_container").removeClass("fade_out");
        }
    };

});

$('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 1000, function () {

                });
            }
        }
    });

window.onload = function () {
    var current = location.pathname;
    $('#nav li a').each(function () {
        var $this = $(this);
        // if the current path is like this link, make it active
        if ($this.attr('href').indexOf(current) !== -1) {
            $this.addClass('active');
        }
    })
};


window.addEventListener('DOMContentLoaded', function () {
    AOS.init({
        once: true,
        duration: 2000
    })
});

$(window).on('load', function () {
    AOS.refresh();
});

document.addEventListener('DOMContentLoaded', function () {
    // When the user scrolls the page, execute myFunction
    window.addEventListener('scroll', myFunction);

    // Get the navbar
    let navbar = document.getElementById("wrapper-navbar");
    // Get the offset position of the navbar
    let sticky = navbar.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        let scrollPosition = Math.round(window.scrollY);

        if (scrollPosition > 100) {
            navbar.classList.add("sticky");
        } else {
            navbar.classList.remove("sticky");
        }


    }
});


//
//
// jQuery(document).ready(function () {
//     function resizeForm() {
//         let width = (window.innerWidth > 0) ? window.innerWidth : document.documentElement.clientWidth;
//         if (width < 1024) {
//             $(document).ready(function () {
//                 function portfolioSlider() {
//                     $('.portfolio_slider').slick({
//                         infinite: true,
//                         autoplay: true,
//                         autoplaySpeed: 5000,
//                         pauseOnHover: false,
//                         slidesToShow: 1,
//                         slidesToScroll: 1,
//                         dots: true,
//                         arrows: true,
//                         prevArrow: $('.prev_portfolio_item'),
//                         nextArrow: $('.next_portfolio_item'),
//                     });
//                 }
//                 portfolioSlider();
//             });
//
//         } else {
//
//         }
//     }
//
//     window.onresize = resizeForm;
//     resizeForm();
// });
//


// $('.main-carousel').slick({
//     infinite: true,
//     autoplay: false,
//     autoplaySpeed: 5000,
//     pauseOnHover: false,
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     dots: false,
//     arrows: true,
//     prevArrow: $('.button--prev'),
//     nextArrow: $('.button--next'),
// });

var $status = $('.carousel-status');
var $slickElement = $('.main-carousel');

$slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
    var i = (currentSlide ? currentSlide : 0) + 1;
    $status.text(i + '/' + slick.slideCount);
});

$slickElement.slick({
    infinite: false,
    autoplay: false,
    autoplaySpeed: 5000,
    pauseOnHover: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    prevArrow: $('.button--prev'),
    nextArrow: $('.button--next'),
});

var $hotspoSliderStatus = $('.hotspot_slider_info');
var $hotspotSlider = $('.hotspot_slider');

$hotspotSlider.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
    var i = (currentSlide ? currentSlide : 0) + 1;
    $hotspoSliderStatus.text(i + '/' + slick.slideCount);
});

$hotspotSlider.slick({
    infinite: false,
    autoplay: false,
    autoplaySpeed: 5000,
    pauseOnHover: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    prevArrow: $('.button_prev_hotspot'),
    nextArrow: $('.button_next_hotspot'),
});


var $appartmentsSliderStatus = $('.appartments_slider_numbers');
var $apartmentsSlider = $('.appartments_slider');

$apartmentsSlider.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
    var i = (currentSlide ? currentSlide : 0) + 1;
    $appartmentsSliderStatus.text(i + '/' + slick.slideCount);
});


$apartmentsSlider.slick({
    infinite: false,
    autoplay: false,
    focusOnSelect: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.appartementen_slider_names, .building_list, .appartementen_slider_text',
    dots: false,
    arrows: true,
    prevArrow: $('.button_prev_appartment'),
    nextArrow: $('.button_next_appartment'),
});

$('.appartementen_slider_names').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    vertical: false,
    fade: true,
    dots: false,
    arrows: false,
    asNavFor: '.appartments_slider, .building_list, .appartementen_slider_text',
});

$('.appartementen_slider_text').slick({
    infinite: false,
    autoplay: false,
    autoplaySpeed: 5000,
    pauseOnHover: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.appartementen_slider_names, .appartments_slider, .building_list',
    dots: false,
    arrows: false,
});

$('.building_list').slick({
    infinite: false,
    autoplay: false,
    vertical: true,
    accessibility: false,
    focusOnSelect: true,
    slidesToShow: 8,
    slidesToScroll: 1,
    cssEase: 'linear',
    asNavFor: '.appartementen_slider_names, .appartments_slider, .appartementen_slider_text',
    dots: false,
    arrows: false,
});


//
// let $carousel = $('.main-carousel').flickity({
//     // options
//     pageDots: false,
//     prevNextButtons: true,
//     cellAlign: 'right',
//     initialIndex: -1,
// });
//
// $carousel.flickity( 'next', 'previous' )
//
// $('.button--next').on( 'click', function() {
//     $carousel.flickity('next');
// });
// $('.button--prev').on( 'click', function() {
//     $carousel.flickity('previous');
// });
//
// let flkty = new Flickity('.main-carousel');
// let carouselStatus = document.querySelector('.carousel-status');
//
// function updateStatus() {
//     let slideNumber = flkty.selectedIndex + 1;
//     carouselStatus.textContent = slideNumber + '/' + flkty.slides.length;
// }
// updateStatus();
//
// flkty.on( 'select', updateStatus );
//
//
// let $hotspotSlider = $('.hotspot_slider').flickity({
//     // options
//     contain: true,
//     pageDots: false,
//     prevNextButtons: false,
//     fade: true,
//     initialIndex: -1,
// });
//
// $hotspotSlider.flickity( 'next', 'previous' )
//
// $('.button_next_hotspot').on( 'click', function() {
//     $hotspotSlider.flickity('next');
// });
// $('.button_prev_hotspot').on( 'click', function() {
//     $hotspotSlider.flickity('previous');
// });
//
// let flktyHotspot = new Flickity('.hotspot_slider');
// let carouselStatusHotspot = document.querySelector('.hotspot_slide');
//
// function updateHotspotStatus() {
//     let slideNumberHotspot = flktyHotspot.selectedIndex + 1;
//     carouselStatusHotspot.textContent = slideNumberHotspot + '/' + flktyHotspot.slides.length;
// }
// updateHotspotStatus();
//
// flktyHotspot.on( 'select', updateHotspotStatus );