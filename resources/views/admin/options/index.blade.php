@extends('adminlte::page')

@section('title', 'Настройки')

@section('content_header')
    <h1>Общие настройки сайта</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row mb-3">
                <div class="col-12">
                    <a href="{{ route('option.edit', $options->id) }}" class="btn btn-primary">
                        Редактировать настройки сайта
                    </a>
                </div>
            </div>
            {{--@dd($item->files)--}}
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-12">
                            <h2 class="text-primary border-bottom border-primary">Контакты</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h4>Телефон</h4>
                        </div>
                        <div class="col">
                            <h4>Дополнительный телефон</h4>
                        </div>
                        <div class="col">
                            <h4>Email</h4>
                        </div>
                        <div class="col">
                            <h4>Email для форм</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>{{ $options->phone1 ?? ''}}</p>
                        </div>
                        <div class="col">
                            <p>{{ $options->phone2 ?? ''}}</p>
                        </div>
                        <div class="col">
                            <p>{{ $options->email ?? ''}}</p>
                        </div>
                        <div class="col">
                            <p>{{ $options->emailTo ?? ''}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-12">
                            <h2 class="text-primary border-bottom border-primary">SEO</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h4>title</h4>
                            <p>{{ $options->title ?? ''}}</p>
                        </div>
                        <div class="col-12">
                            <h4>description</h4>
                            <p>{{ $options->description ?? ''}}</p>
                        </div>
                        <div class="col-12">
                            <h4>keyword</h4>
                            <p>{{ $options->keywords ?? ''}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-12">
                            <h2 class="text-primary border-bottom border-primary">Социальные сети</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h4>Viber</h4>
                            <p>{{ $options->viber ?? ''}}</p>
                        </div>
                        <div class="col">
                            <h4>whatsapp</h4>
                            <p>{{ $options->whatsapp ?? ''}}</p>
                        </div>
                        <div class="col">
                            <h4>skype</h4>
                            <p>{{ $options->skype ?? ''}}</p>
                        </div>
                        <div class="col">
                            <h4>vk</h4>
                            <p>{{ $options->vk ?? ''}}</p>
                        </div>
                        <div class="col">
                            <h4>instagram</h4>
                            <p>{{ $options->instagram ?? ''}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop