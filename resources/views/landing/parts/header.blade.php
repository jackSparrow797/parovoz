<div class="row header white">
    <div class="container-fluid">
        <div class="row align-items-center my-lg-3">
            <div class="col col-md">
                <a href="/">
                    <img class="d-none d-lg-block" src="{{ asset('design/images/logo.svg') }}" alt="logo">
                    <img class="d-lg-none" src="{{ asset('design/images/logo_mobile.png') }}" alt="logo mobile">
                </a>
            </div>
            <div class="d-none d-lg-block col-md">
                <p class="m-0">
                    {{ $options->phone1 }}<br/>
                    <a href="#call_back" data-toggle="modal">
                        перезвоните мне
                    </a>
                </p>
            </div>
            <div class="d-none d-lg-block col-md">
                <p class="m-0">
                    {{ $options->email }}<br/>
                    <a href="#feed_back" data-toggle="modal">
                        написать нам
                    </a>
                </p>
            </div>

            <div class="d-none d-lg-block col-md text-center">
                @if ($options->viber != '')
                    <a href="{{ $options->viber }}" class="d-inline-block mx-2" target="_blank">
                        <img src="{{ asset('design/images/viber.svg') }}" alt="">
                    </a>
                @endif
                @if ($options->whatsapp != '')
                    <a href="{{ $options->whatsapp }}" class="d-inline-block mx-2" target="_blank">
                        <img src="{{ asset('design/images/whatsapp.svg') }}" alt="">
                    </a>
                @endif
                @if ($options->skype != '')
                    <a href="{{ $options->skype }}" class="d-inline-block mx-2" target="_blank">
                        <img src="{{ asset('design/images/skype.svg') }}" alt="">
                    </a>
                @endif
                @if ($options->vk != '')
                    <a href="{{ $options->vk }}" class="d-inline-block mx-2" target="_blank">
                        <img src="{{ asset('design/images/vk.svg') }}" alt="">
                    </a>
                @endif
                @if ($options->instagram != '')
                    <a href="{{ $options->instagram }}" class="d-inline-block mx-2" target="_blank">
                        <img src="{{ asset('design/images/insta.svg') }}" alt="">
                    </a>
                @endif
            </div>

            <div class="col-4 col-md-1 text-right">
                <a href="#" class="menu_open">
                    <img src="{{ asset('design/images/menu.png') }}" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
<div class="menu-container p-4 white text-right">
    <a href="#" class="d-inline-block mb-3 menu-close">
        <img src="{{ asset('design/images/close.png') }}" alt="close">
    </a>
    <div class="menu-body ">
        <ul class="landing-menu">
            <li><a href="#advantages">Преимущества</a></li>
            <li><a href="#services">Услуги</a></li>
            <li><a href="#portfolio">Портфолио</a></li>
            <li><a href="#why_we">Почему мы</a></li>
            <li><a href="#reviews">Отзывы</a></li>
            <li><a href="#questions">Задать вопрос</a></li>
        </ul>
        <p class="text-right">
            {{ $options->email }}<br/>
            <a href="#feed_back" data-toggle="modal">
                написать нам
            </a>
        </p>
        <p class="text-right">
            <span class="d-inline-block mr-3">{{ $options->phone2 }}</span> <span
                    class="d-inline-block ">{{ $options->phone1 }}</span><br/>
            <a href="#call_back" data-toggle="modal">
                перезвоните мне
            </a>
        </p>
        <div class="mb-4">
            @if ($options->viber != '')
                <a href="{{ $options->viber }}" class="d-inline-block mx-2" target="_blank">
                    <img src="{{ asset('design/images/viber.svg') }}" alt="">
                </a>
            @endif
            @if ($options->whatsapp != '')
                <a href="{{ $options->whatsapp }}" class="d-inline-block mx-2" target="_blank">
                    <img src="{{ asset('design/images/whatsapp.svg') }}" alt="">
                </a>
            @endif
            @if ($options->skype != '')
                <a href="{{ $options->skype }}" class="d-inline-block mx-2" target="_blank">
                    <img src="{{ asset('design/images/skype.svg') }}" alt="">
                </a>
            @endif
            @if ($options->vk != '')
                <a href="{{ $options->vk }}" class="d-inline-block mx-2" target="_blank">
                    <img src="{{ asset('design/images/vk.svg') }}" alt="">
                </a>
            @endif
            @if ($options->instagram != '')
                <a href="{{ $options->instagram }}" class="d-inline-block mx-2" target="_blank">
                    <img src="{{ asset('design/images/insta.svg') }}" alt="">
                </a>
            @endif
        </div>
    </div>
</div>