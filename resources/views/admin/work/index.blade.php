@extends('adminlte::page')

@section('title', 'Работы')

@section('content_header')
    <h1>Наши работы</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row mb-3">
                <div class="col-12">
                    <a href="{{ route('work.create') }}" class="btn btn-primary">
                        Добавить работу
                    </a>
                </div>
            </div>

            @forelse($works as $item)
                {{--                @dd($item->files->path)--}}
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                @forelse($item->files->sortBy('sort') as $file)
                                    <img src="/storage/{{ $file->path }}" alt="">
                                @empty
                                    Нет картинок
                                @endforelse
                            </div>
                            <div class="col">
                                <a href="{{ route('work.edit', $item->id) }}">
                                    {!! $item->title !!}
                                </a>
                            </div>
                            <div class="col">
                                {{ $item->sort }}
                            </div>
                            <div class="col">
                                {{ $item->site }}
                            </div>
                            <div class="col">
                                {{ $item->task }}
                            </div>
                            <div class="col">
                                {{ $item->answer }}
                            </div>
                            <div class="col">
                                <form onsubmit="if(confirm('Удалить?')) { return true } else { return false }" action="{{ route('work.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Удалить">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            @empty
                <p>Нет работ</p>
            @endforelse
        </div>
    </div>
@stop