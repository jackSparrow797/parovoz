<div class="row last_works white" id="portfolio">
    <div class="container py-5">
        <h2 class="font-walls text-center mb-4">Наши последние работы</h2>
        <div class="row my-3">
            <div class="col-lg-8 m-auto d-inline-block d-lg-block custom-width">
                <div class="row works_links flex-nowrap flex-lg-wrap">
                    @forelse($sections_work as $key => $sections)
                        <div class="col">
                            <a href="#work{{ $sections->id }}"
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
            @forelse($sections_work as $key => $sections)
                <div class="col-12 work_section  @php echo ($key == 0) ? 'active' : '' @endphp"
                     id="work{{ $sections->id }}">
                    <div class="slideOne">
                        @forelse($sections->work->chunk(2) as $chunk)
                            <div>
                                <div class="row ">
                                    @foreach ($chunk as $workProduct)
                                        <div class="col-md-4 work_item">
                                            <div class="card">
                                                <div class="card-body">
                                                    <a href="#work_popup" class=" popup_open"  data-content="{{ route('work.show', $workProduct->id) }}">
                                                        @if (!$workProduct->files->isEmpty())
                                                            <img class="mx-auto"
                                                                 src="/cache/{{ $workProduct->files->first()->path }}"
                                                                 alt="">
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="card-footer">
                                                    <p class="text-center title">{!! $workProduct->title !!}</p>
                                                    <a href="#work_popup" data-content="{{ route('work.show', $workProduct->id) }}"
                                                       class="btn btn-sm btn-block btn-white-outer popup_open">
                                                        Подробнее о проекте
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
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

<div class="work_popup  popup w-66" id="work_popup">
    <div class="bgWhite  pt-4 ">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-8 col-lg-4 order-lg-1">
                    <ul class="tags m-0">
                        <li>Дизайн</li>
                        <li>Проектирование</li>
                        <li>SEO оптимизация</li>
                    </ul>
                </div>
                <div class="col-4 col-lg-2 text-right order-lg-3">
                    <a href="#" class="d-inline-block mb-3 popup-close">
                        <img src="{{ asset('design/images/close-black.png') }}" alt="close">
                    </a>
                </div>
                <div class="col-12 col-lg  order-lg-2">
                    <h4 class="title"></h4>
                    <a href="" target="_blank" class="site"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="bgWhite px-5 pt-5 pb-5">
        <div class="container-fluid">
            <div class="html"></div>
        </div>
    </div>


    <div class="bgGrey px-5  py-4 white">
        <div class="container-fluid">
            <h4 class="mb-4 font-white">Хотите подобный проект?</h4>
            <form action="{{ route('send.work') }}" class="ajax" method="post">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Как вас зовут*</label>
                            <input type="text" name="name" class="form-control radius-none"
                                   placeholder="Введите ваше имя">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Ваш E-mail*</label>
                            <input type="email" name="email" class="form-control radius-none"
                                   placeholder="Введите ваше имя">
                            <input type="hidden" name="title">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Ваш номер телефона*</label>
                            <input type="text" name="phone" class="form-control radius-none"
                                   placeholder="8 (000) 000-00-00">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Расскажите про вашу задачу</label>
                            <textarea name="text" class="form-control radius-none" rows="5"
                                      placeholder="Ваш комментарий"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-7">
                        <div class="form-group">
                            <input type="submit" class="btn btn-block btn-green r26" value="заказать подобный проект">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>