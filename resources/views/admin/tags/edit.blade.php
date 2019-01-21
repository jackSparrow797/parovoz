@extends('adminlte::page')

@section('title', 'Редактирование тэга')

@section('content_header')
    <h1>Редактирование тэга</h1>
@stop

@section('content')
    <form  class="form-horizontal" action="{{ route('tag.update', $tag->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.tags.partials.form')
    </form>
@stop