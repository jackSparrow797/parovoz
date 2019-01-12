@extends('adminlte::page')

@section('title', 'Редактирование слайда')

@section('content_header')
    <h1>Редактирование слайда</h1>
@stop

@section('content')
    <form  class="form-horizontal" action="{{ route('slider.update', $slide->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.slider.partials.form')
    </form>
@stop