$("document").ready(function () {

    $("#exams_button").click(function () {
        swal("أسفين جدا", "لسه شغالين علي الصفحه دي", "warning");
    });

    // go to about section
    $(".header .left_hero button ").click(function () {

        $("html, body").animate({

            scrollTop: $(".about").offset().top

        }, 2000);
    });


    // count section
    $('.count').countUp({
        delay: 10,
        time: 2000,
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


    // loader
    $(".loading").ready(
        function () {
            setTimeout(function () {
                $(".loading").fadeOut();

            }, 4000);
        });

})
