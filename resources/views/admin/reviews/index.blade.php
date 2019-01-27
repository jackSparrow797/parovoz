@extends('adminlte::page')

@section('title', 'Отзывы')

@section('content_header')
    <h1>Отзывы</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row mb-3">
                <div class="col-12">
                    <a href="{{ route('review.create') }}" class="btn btn-primary">
                        Добавить отзыв
                    </a>
                </div>
            </div>

            @forelse($reviews as $item)
                {{--@dd($item->files)--}}
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                @forelse($item->files as $file)
                                    <img src="/storage/{{ $file->path }}" alt="">
                                @empty
                                    Нет картинок
                                @endforelse
                            </div>
                            <div class="col">
                                <a href="{{ route('review.edit', $item->id) }}">
                                    {!! $item->title !!}
                                </a>
                            </div>
                            <div class="col">
                                {{ $item->text }}
                            </div>
                            <div class="col">
                                <form onsubmit="if(confirm('Удалить?')) { return true } else { return false }"
                                      action="{{ route('review.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Удалить">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            @empty
                <p>Нет новостей</p>
            @endforelse
        </div>
    </div>
@stop