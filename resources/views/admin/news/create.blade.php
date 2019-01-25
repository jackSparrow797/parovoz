@extends('adminlte::page')

@section('title', 'Добавить новость')

@section('content_header')
    <h1>Добавить новость</h1>
@stop

@section('content')
    <form  class="form-horizontal" action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.news.partials.form')
    </form>
@stop