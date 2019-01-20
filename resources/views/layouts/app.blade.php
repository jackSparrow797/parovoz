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

    <div class="row last_works white">
        <div class="container py-5">
            <h2 class="font-walls text-center mb-4">Наши последние работы</h2>
        </div>
    </div>

</div>
<footer>

</footer>


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
