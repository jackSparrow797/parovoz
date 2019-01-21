@extends('adminlte::page')

@section('title', 'Редактирование работы')

@section('content_header')
    <h1>Редактирование работы</h1>
@stop

@section('content')
    <form  class="form-horizontal" action="{{ route('work.update', $work->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.work.partials.form')
    </form>
@stop