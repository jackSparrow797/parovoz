@extends('adminlte::page')

@section('title', 'Редактирование новости')

@section('content_header')
    <h1>Редактирование новости</h1>
@stop

@section('content')
    <form  class="form-horizontal" action="{{ route('news.update', $news->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.news.partials.form')
    </form>
@stop