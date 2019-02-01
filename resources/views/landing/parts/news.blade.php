<div class="row py-5">
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="font-walls text-center">Новости и статьи</h2>
            </div>
        </div>

        <div class="row slider3 blueArrows sliderPadding mt-5">
            @forelse($news as $newsItem)
                <div class="col-12 news_item">
                    <div class="card">
                        <div class="card-body">
                            <a href="#news_popup" class=" popup_open" data-content="{{ route('news.show', $newsItem->id) }}">
                                @if (!$newsItem->files->isEmpty())
                                    <img class="mx-auto"
                                         src="/storage/{{ $newsItem->files->first()->path }}"
                                         alt="">
                                @endif
                            </a>
                        </div>
                        <div class="card-footer pt-0 text-center">
                            <p class="date text-center">{{ $newsItem->created_at->format('d.m.Y') }}</p>
                            <p class="text-center title">{!! $newsItem->title !!}</p>
                            <a href="#news_popup" data-content="{{ route('news.show', $newsItem->id) }}"
                               class="btn btn-sm px-5  btn-green-outer-news popup_open">
                                Подробнее
                            </a>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse

        </div>

    </div>
</div>

<div class="news_popup bgWhite  popup w-66" id="news_popup">
    <div class=" px-5  pt-4 pb-5">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4></h4>
                    <p class="date"></p>
                </div>
                <div class="col text-right">
                    <a href="#" class="d-inline-block mb-3 popup-close">
                        <img src="{{ asset('design/images/close-black.png') }}" alt="close">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 body-content"></div>
            </div>
        </div>

    </div>

</div>