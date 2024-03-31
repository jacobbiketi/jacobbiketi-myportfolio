$(document).ready(function(){
    $(window).scroll(function(){
        if ($(window).scrollTop() > 20){
            $('.navbar').addClass('sticky');
        } else {
            $('.navbar').removeClass('sticky'); 
        }
        if ($(window).scrollTop() > 500){
            $('.scroll-up-btn').addClass('show');
        } else {
            $('.scroll-up-btn').removeClass('show'); 
        }
    });



    // slide up styling script
    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0});
    });

    // toggle menu bar
    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });

// typing animation
var typed = new Typed(".typing", {
    strings: ["Software Developer", "Web Designer", "Graphics Designer"],
    typeSpeed:100,
    backSpeed:60,
    loop: true
});
var typed = new Typed(".typing-2", {
    strings: ["Software Developer", "Web Designer", "Graphics Designer"],
    typeSpeed:100,
    backSpeed:60,
    loop: true
});
    // carousel stying
    $('.carousel').owlCarousel({
        margin:20,
        loop:true,
        autoplay:true,
        autoplayTimeout:1500,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1,
                nav:false,
            },
            600:{
                items:2,
                nav:false,
            },
            1000:{
                items:3,
                nav:false,
            }


        }
    })
})