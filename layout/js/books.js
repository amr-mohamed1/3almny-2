$(document).ready(function(){
$('.owl-carousel').owlCarousel({
    rtl:true,
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});
    
    // go to content section
 $(".start").click(function () {

        $("html, body").animate({

            scrollTop: $(".popular").offset().top + 10

        }, 2000);
    });

    
    // scroll to top 
            $(".scroll").click(function() {
  window.scrollTo({ top: 0, behavior: 'smooth'});
});
$(window).scroll(function() {
    if ($(this).scrollTop() >= 600) {
        $('.scroll').fadeIn(200);
    } else {
        $('.scroll').fadeOut(200);
    }
});
        $(".loading").ready(
        function () {
            setTimeout(function () {
                $(".loading").fadeOut();

            }, 2000);
        });


});