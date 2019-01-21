@extends('adminlte::page')

@section('title', 'Тэги')

@section('content_header')
    <h1>Тэги</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row mb-3">
                <div class="col-12">
                    <a href="{{ route('tag.create') }}" class="btn btn-primary">
                        Добавить тэг
                    </a>
                </div>
            </div>

            @forelse($tags as $item)
                {{--                @dd($item->files->path)--}}
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('tag.edit', $item->id) }}">
                                    {!! $item->title !!}
                                </a>
                            </div>
                            <div class="col">
                                {{ $item->description }}
                            </div>
                            <div class="col">
                                <form onsubmit="if(confirm('Удалить?')) { return true } else { return false }" action="{{ route('tag.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Удалить">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            @empty
                <p>Нет тэгов</p>
            @endforelse
        </div>
    </div>
@stop