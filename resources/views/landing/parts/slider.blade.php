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