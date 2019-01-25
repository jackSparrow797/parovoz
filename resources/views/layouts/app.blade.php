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

    <div class="row advantages">
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

    <div class="row block_trust white py-5">
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

    <div class="row py-5">
        <div class="container py-5">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="font-walls text-center">клиенты<br/>говорят про нас</h2>
                </div>
            </div>
        </div>
    </div>

    @include('landing.parts.questions')

    <div class="row py-5">
        <div class="container py-5">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="font-walls text-center">Новости и статьи</h2>
                </div>
            </div>
        </div>
    </div>

    <footer class="row white py-5">
        <div class="container">
            <div class="row">
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



<!-- Modal -->
<div class="modal fade" id="call_back" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="window"></div>

</body>
</html>
