<div class="row pt-5">
    <div class="container pt-5">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="font-walls text-center">клиенты<br/>говорят про нас</h2>
            </div>
        </div>
        <div class="row slider-review-for  mt-5">
            @forelse($reviews as $reviewItem)
                <div class="col-md-4 review_item">
                    <div class="card">
                        <div class="card-body">
                            <div class="row  align-items-center">
                                <div class="col-10">
                                    <p class="review-text">
                                        &ldquo;{{ $reviewItem->text }}&rdquo;
                                    </p>
                                    <p class="author m-0">{{ $reviewItem->author }}</p>
                                    <p class="post">{{ $reviewItem->post }}</p>
                                </div>
                                <div class="col-2 text-center">
                                    <a data-fancybox href="/storage/{{ $reviewItem->files[0]->path }}">
                                        <img src="/storage/{{ $reviewItem->files[0]->path }}" alt="">
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
        <div class="row slider-review-nav  blueArrows sliderPadding mt-0">
            @forelse($reviews as $reviewItem)
                <div class="col-md-4 review_preview">
                    <div class="card border-none background-none">
                        <div class="card-body">
                            <div class="row align-items-center white">
                                <div class="col-4">
                                    <img src="/storage/{{ $reviewItem->logo }}" alt="">
                                </div>
                                <div class="col-8">
                                    <p class="m-0">
                                        <b>{{ $reviewItem->title }}</b>
                                        <br>
                                        <a target="_blank"
                                           href="{{ $reviewItem->site }}">{{ $reviewItem->site }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
</div>