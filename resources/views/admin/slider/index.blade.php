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
{{--                @dd($item->files->path)--}}
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                @forelse($item->files as $file)
                                    <img src="/storage/{{ $file->path }}" width="100%" alt="">
                                @empty
                                    <p>Нет Картинки</p>
                                @endforelse
                            </div>
                            <div class="col">
                                <a href="{{ route('slider.edit', $item->id) }}">
                                    {!! $item->title !!}
                                </a>
                            </div>
                            <div class="col">
                                {{ $item->description }}
                            </div>
                            <div class="col">
                                {{ $item->sort }}
                            </div>
                            <div class="col">
                                <form onsubmit="if(confirm('Удалить?')) { return true } else { return false }" action="{{ route('slider.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Удалить">
                                </form>
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