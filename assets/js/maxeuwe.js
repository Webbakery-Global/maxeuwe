import AOS from 'aos';

$(document).ready(function () {

    $(".hamburger").click(function () {
        $(".hamburgerTop, .hamburgerMiddle, .hamburgerBottom").toggleClass("open");
        $("#navbarNavDropdown, .nav-link").toggleClass("active");
        $("body, html").toggleClass("no-scroll");
        $("#wrapper-navbar").toggleClass("sticky");
    });

    $("#main-menu li .nav-link").click(function () {
        $(".hamburgerTop, .hamburgerMiddle, .hamburgerBottom").toggleClass("open");
        $("body, html").toggleClass("no-scroll");
        $("#wrapper-navbar").toggleClass("sticky");
        $("#navbarNavDropdown").toggleClass("active");
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
            $(".modal, #navbarNavDropdown, .nav-link").removeClass("active");
            $(".hamburgerTop, .hamburgerMiddle, .hamburgerBottom").removeClass("open");
            $("body").removeClass("fade_out");
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

        if (scrollPosition > 0) {
            navbar.classList.add("sticky");
        } else {
            navbar.classList.remove("sticky");
        }


    }
});



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


// Click event
let offset = 0;


//check the pages when scroll event occurs
$(window).scroll(function(){
    // Get the current vertical position of the scroll bar
    let position = $(this).scrollTop();
    $('#main-menu li a[href^="#"]').each(function(){
        var anchorId = $(this).attr('href');
        var target = $(anchorId).offset().top - offset;
        // check if the document has crossed the page
        console.log(position,target);
        if(position>=target - 300){
            //remove active from all anchor and add it to the clicked anchor
            $('#main-menu li a[href^="#"]').removeClass("current")
            $(this).addClass('current');
        }
    })
})
$(function(){
    //set our scroll state after dom ready
    $(window).scroll();
})

