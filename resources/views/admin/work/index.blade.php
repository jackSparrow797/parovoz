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
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @forelse($sections->values() as $key_sect => $sect_item)
                    <li class="nav-item">
                        <a class="nav-link @php echo ($key_sect == 0) ? "active" : '' @endphp" id="tab{{ $sect_item->id }}" data-toggle="tab" href="#section-tab{{ $sect_item->id }}" role="tab" aria-controls="home" aria-selected="true">{{ $sect_item->title }}</a>
                    </li>
                @empty
                @endforelse
            </ul>
            <div class="tab-content" id="myTabContent">
                @forelse($sections->values() as $key_sect => $sect_item)
                    <div class="tab-pane fade show @php echo ($key_sect == 0) ? "active" : '' @endphp" id="section-tab{{ $sect_item->id }}" role="tabpanel" aria-labelledby="home-tab">
                        @forelse($sect_item->work as $item)
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
                                            <form onsubmit="if(confirm('Удалить?')) { return true } else { return false }"
                                                  action="{{ route('work.destroy', $item->id) }}" method="post">
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
                @empty
                @endforelse
            </div>

        </div>
    </div>
@stop