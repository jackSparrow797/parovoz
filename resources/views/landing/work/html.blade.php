<div class="row slider3 blueArrows sliderPadding row-slider">
    @foreach($work->files->sortBy('sort') as $file)
        {{--@dd($file)--}}
        <div class="col-12">
            <div class="card border-none">
                <a href="/storage/{{ $file->path }}" data-fancybox="gallery">
                    <img src="/cache/{{ $file->path }}" alt="">
                </a>
            </div>
        </div>
    @endforeach
</div>
<div class="row my-4">
    <div class="col-12">
        <h5>Задача</h5>
        <p>{!! $work->task ?? '' !!}</p>
    </div>
</div>
<div class="row my-4">
    <div class="col-12">
        <h5>Решение</h5>
        <p>{!! $work->answer ?? '' !!}</p>
    </div>
</div>