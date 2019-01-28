@extends('adminlte::page')

@section('title', 'Настройки, редактирование')

@section('content_header')
    <h1>Настройки, редактирование</h1>
@stop

@section('content')
    <form  class="form-horizontal" action="{{ route('option.update', $options->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.options.partials.form')
    </form>
@stop