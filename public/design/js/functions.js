$(document).ready(function () {
    // $("input[name=phone]").mask("+7 (999) 999-99-99");
    $('.sliders').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
    });
    $(document).on("click", ".menu-close", function (e) {
        e.preventDefault();
        $('.menu-container').removeClass('show');
    });
    $(document).on("click", ".menu_open", function (e) {
        e.preventDefault();
        $('.menu-container').addClass('show');
    });

    $(document).on('click', '.offers_links a', function (e) {
        e.preventDefault();
        var target = $(this).attr('href');

        $('.offers_links a').removeClass('active');
        $(this).addClass('active');

        $('.offer_section').removeClass('active');
        $(target).addClass('active');

        $(".slider4").slick('reinit');
    });

    $('.slider4').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        prevArrow: '<a class="prev arrowSlide" href="#"></a>',
        nextArrow: '<a class="next arrowSlide" href="#"></a>',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});