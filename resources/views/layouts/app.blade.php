<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('landing.parts.head')

<body>
<div id="body" class="container-fluid position-relative">

    @include('landing.parts.header')

    <div class="row sliders">
        @forelse($sliders as $slider)
            <div class="slider_item col-12" style="background-image: url('/storage/{{ $slider->files[0]->path }}')">
                <div class="slider_description white">
                    <h1 class="font-walls">{!! $slider->title !!}</h1>
                    <h4>{{ $slider->description }}</h4>
                </div>

            </div>
        @empty
        @endforelse
    </div>

    <div class="row advantages" id="advantages">
        <div class="container py-5">
            <h2 class="font-walls text-center mb-4">Наши Преимущества</h2>
            <div class="row slider4 blueArrows sliderPadding">
                <div class="col text-center">
                    <img class="mb-3 mx-auto" src="{{ asset('design/images/img.png') }}" alt="">
                    <p class="text-center">Преимущество</p>
                </div>
                <div class="col text-center">
                    <img class="mb-3 mx-auto" src="{{ asset('design/images/img.png') }}" alt="">
                    <p class="text-center">Преимущество</p>
                </div>
                <div class="col text-center">
                    <img class="mb-3 mx-auto" src="{{ asset('design/images/img.png') }}" alt="">
                    <p class="text-center">Преимущество</p>
                </div>
                <div class="col text-center">
                    <img class="mb-3 mx-auto" src="{{ asset('design/images/img.png') }}" alt="">
                    <p class="text-center">Преимущество</p>
                </div>
            </div>
        </div>
    </div>

    @include('landing.parts.advantage')

    @include('landing.parts.works')

    @include('landing.parts.payne')

    <div class="row block_trust white py-5" id="why_we">
        <div class="container py-5">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="font-walls text-center">почему нам можно<br/>доверять?</h2>
                </div>
            </div>
            <div class="row slider4 whiteArrows sliderPadding mt-5">
                <div class="col text-center trust_item">
                    <img class="mb-3 mx-auto" src="{{ asset('design/images/why_1.png') }}" alt="">
                    <p class="text-center px-4">
                        <b>Разрабатываем любые проекты под ключ</b><br>
                        Разработаем ваш проект от создания технического задания до готового продукта
                    </p>
                </div>
                <div class="col text-center trust_item">
                    <img class="mb-3 mx-auto" src="{{ asset('design/images/why_2.png') }}" alt="">
                    <p class="text-center px-4">
                        <b>Отдаем полностью упакованный продукт</b><br>
                        Отдаем продающий сайт с готовой SEO оптимизацией
                    </p>
                </div>
                <div class="col text-center trust_item">
                    <img class="mb-3 mx-auto" src="{{ asset('design/images/why_3.png') }}" alt="">
                    <p class="text-center px-4">
                        <b>Мы профессионалы своего дела</b><br>
                        В нашей компании работают сотрудники со стажем от 5 лет
                    </p>
                </div>
                <div class="col text-center trust_item">
                    <img class="mb-3 mx-auto" src="{{ asset('design/images/why_4.png') }}" alt="">
                    <p class="text-center px-4">
                        <b>Индивидуальный подход к каждому клиенту </b><br>
                        Далеко не каждый клиент знает что ему нужно, мы поможем улучшить ваш проект
                    </p>
                </div>
            </div>
        </div>
    </div>


    @include('landing.parts.reviews')

    @include('landing.parts.questions')

    @include('landing.parts.news')

    <footer class="row white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md">+7 (964) 184 71 44</div>
                <div class="col-md">+7 (965) 841 53 64</div>
                <div class="col-md">
                    <a href="#call_back" data-toggle="modal">
                        перезвоните мне
                    </a>
                </div>
                <div class="col-md">
                    <a href="" target="_blank">
                        <img src="{{ asset('design/images/viber.svg') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </footer>

</div>

    @include('landing.parts.forms')

<div class="window"></div>

</body>
</html>
