@extends('adminlte::page')

@section('title', 'Слайдер')

@section('content_header')
    <h1>Слайдер</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row mb-3">
                <div class="col-12">
                    <a href="{{ route('slider.create') }}" class="btn btn-primary">
                        Добавить слайд
                    </a>
                </div>
            </div>

            @forelse($paginator as $item)
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('slider.edit', $item->id) }}">
                                    {{ $item->title }}
                                </a>
                            </div>
                            <div class="col">
                                {{ $item->description }}
                            </div>
                            <div class="col">
                                {{ $item->sort }}
                            </div>
                        </div>

                    </div>
                </div>
            @empty
                <p>Нет слайдеров</p>
            @endforelse
        </div>
    </div>
@stop