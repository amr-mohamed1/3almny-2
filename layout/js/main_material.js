$("document").ready(function () {
    "use strict";


    $(".content .list li").click(function () {
        $(this).addClass("active").siblings().removeClass("active");
    });   
var mixer = mixitup('.content');
        
    // loader
        $(".loading").ready(
        function () {
            setTimeout(function () {
                $(".loading").fadeOut();

            }, 2000);
        });

        // scroll to top 
    $(".scroll").click(function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 600) {
            $('.scroll').fadeIn(200);
        } else {
            $('.scroll').fadeOut(200);
        }
    });
});



