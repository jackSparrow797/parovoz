$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $("input[name=phone]").mask("8 (000) 000-00-00");

    $('.sliders').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
    });

    $('.slideOne').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        dotsClass: 'dots-center'
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

    $(document).on('click', '.works_links a', function (e) {
        e.preventDefault();
        var target = $(this).attr('href');

        $('.works_links a').removeClass('active');
        $(this).addClass('active');

        $('.work_section').removeClass('active');
        $(target).addClass('active');

        $(".sliderOne").slick('reinit');
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
    $('.slider3').slick({
        infinite: false,
        slidesToShow: 3,
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

    $(document).on("click", ".news_item  a.popup_open", function () {
        let url = $(this).attr('data-content');
        $.ajax({
            type: 'post',
            url: url,
            dataType: "json",
            success: function (data) {
                $('#news_popup h4').text(data.title);
                $('#news_popup .date').text(data.created_at);
                $('#news_popup .body-content').text(data.html);
            }
        });
    });

    $(document).on("click", ".work_item  a.popup_open", function () {
        let url = $(this).attr('data-content');
        $.ajax({
            type: 'post',
            url: url,
            dataType: "json",
            success: function (data) {
                $('#work_popup h4.title').text(data.title);
                $('#work_popup input[name=title]').text(data.title);
                $('#work_popup .site').text(data.site).attr('href', '//' + data.site);
                $('#work_popup .html').html(data.html);
                sliderInit($('#work_popup .slider3'));
            }
        });
    });

    function sliderInit($slick_container) {
        if (!$slick_container.hasClass('slick-initialized')) {
            // слайдер
            $slick_container.slick({
                infinite: false,
                slidesToShow: 3,
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
        }
    }

    $(document).on('submit', 'form.ajax', function () {
        let action = $(this).attr('action');
        let form = $(this);
        let modal_target = false;
        if (form.hasClass('modal-form')) {
            modal_target = form.attr('data-close');
        }
        form.find('input,textarea').removeClass('error');
        let method = $(this).attr('method');
        let msg = form.serialize();
        form.find('input,textarea').removeClass('error');
        form.find('.form-error').remove();
        $.ajax({
            type: method,
            url: action,
            data: msg,
            dataType: "json",
            success: function (data) {
                if (!!(data.message)) {
                    form[0].reset();
                    $('#success .modal-body').html(data.message);
                    $('#success').modal('show');
                    if (!!modal_target) {
                        $('#' + modal_target).modal('hide');
                    }
                }
            },
            error: function (xhr, str) {
                $.each(xhr.responseJSON.errors, function (index, value) {
                    form.find('[name=' + index + ']').addClass('error');
                    form.find('[name=' + index + ']').parent().append('<span class="form-error"> ' + value + ' </span>');
                });
            }
        });

        return false;
    });

    $('.slider-review-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-review-nav'
    });
    $('.slider-review-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-review-for',
        prevArrow: '<a class="prev arrowSlide" href="#"></a>',
        nextArrow: '<a class="next arrowSlide" href="#"></a>',
        focusOnSelect: true,
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


    $(document).on('click', '.landing-menu a', function (e) {
        e.preventDefault();
        let target = $(this).attr('href');
        let top = $(target).offset().top;

        //анимируем переход на расстояние - top за 700 мс
        $('body,html').animate({scrollTop: top}, 700);
    });

    $(document).on("click", '.show_text', function (e) {
        e.preventDefault();
        $(this).parent().find('.review-text').removeClass('hidden-over');
    });

});