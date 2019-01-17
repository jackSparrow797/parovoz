$(document).ready(function () {
    $("input[name=phone]").mask("8 (000) 000-00-00");
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

    $(document).on("click", ".popup_open", function (e) {
        e.preventDefault();
        let target = $(this).attr('href');
        $(target).addClass('show');
        $('.window').addClass('toshow');
    });
    $(document).on("click", ".popup-close", function (e) {
        e.preventDefault();
        $('.window').removeClass('toshow');
        $(this).closest('.popup').removeClass('show');
    });
    $(document).on("click", ".window", function (e) {
        e.preventDefault();
        $('.popup').removeClass('show');
        $('.window').removeClass('toshow');
    });
    $(document).on("click", ".offer_item a.popup_open", function () {
        let offer = $(this).closest('.offer_item');
        let title = offer.find('p.title').html();
        let text = offer.find('p.sr-only').text();
        $('#advantage_popup h4').html(title);
        $('#advantage_popup input[name=title]').val(offer.find('p.title').text());
        $('#advantage_popup p').text(text);
    });
});