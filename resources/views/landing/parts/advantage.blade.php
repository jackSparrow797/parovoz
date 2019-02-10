<div class="row what_we_can_do_you" id="services">
    <div class="container py-5">
        <h2 class="font-walls text-center mb-lg-5">что мы можем сделать для вашего бизнеса</h2>
        <div class="row my-3">
            <div class="col-lg-8 m-auto d-inline-block d-lg-block custom-width">
                <div class="row offers_links flex-nowrap flex-lg-wrap">
                    @forelse($sections_offer as $key => $sections)
                        <div class="col">
                            <a href="#offer{{ $sections->id }}"
                               class="btn btn-sm btn-block btn-green-outer white-nowrap @php echo ($key == 0) ? 'active' : '' @endphp">
                                {{ $sections->title }}
                            </a>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
        <div class="row">
            @forelse($sections_offer as $key => $sections)
                <div class="col-12 offer_section @php echo ($key == 0) ? 'active' : '' @endphp"
                     id="offer{{ $sections->id }}">
                    <div class="row slider4 blueArrows sliderPadding">
                        @forelse($sections->offer as $offer)
                            <div class="col offer_item">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="#advantage_popup" class="link_img popup_open">
                                            @forelse($offer->files->sortBy('sort')->values() as $file_key => $file)
                                                <img class="mx-auto @php echo ($file_key == 0) ? "hover" : '' @endphp"
                                                     src="/storage/{{ $file->path }}" alt="">
                                            @empty
                                            @endforelse
                                        </a>
                                    </div>
                                    <div class="card-footer">
                                        <p class="text-center title">{!! $offer->title !!}</p>
                                        <p class="sr-only">{!! $offer->text !!}</p>
                                        <a href="#advantage_popup" class="btn btn-sm btn-block btn-green-outer popup_open">
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
</div>
<div class="advantage_popup bgBlue popup  p-5 white " id="advantage_popup">
    <div class="text-right">
        <a href="#" class="d-inline-block mb-3 popup-close">
            <img src="{{ asset('design/images/close.png') }}" alt="close">
        </a>
    </div>
    <div class="popup-body">
        <h4></h4>
        <p></p>
        <form action="{{ route('send.offer') }}" class="ajax" method="post">
            {!! RecaptchaV3::field('register') !!}
            @csrf
            <div class="response green"></div>
            <div class="form-group">
                <label for="">Как вас зовут*</label>
                <input type="text" name="name" class="form-control radius-none" placeholder="Введите ваше имя">
            </div>
            <div class="form-group">
                <label for="">Ваш E-mail*</label>
                <input type="email" name="email" class="form-control radius-none" placeholder="Введите ваше имя">
                <input type="hidden" name="title">
            </div>
            <div class="form-group">
                <label for="">Ваш номер телефона*</label>
                <input type="text" name="phone" class="form-control radius-none" placeholder="8 (000) 000-00-00">
            </div>
            <div class="form-group">
                <label for="">Расскажите про вашу задачу</label>
                <textarea name="text" class="form-control radius-none" rows="5" placeholder="Ваш комментарий"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-block btn-green r26" value="заказать">
            </div>
        </form>
    </div>
</div>