@extends('adminlte::page')

@section('title', 'Новая работа')

@section('content_header')
    <h1>Новая работа</h1>
@stop

@section('content')
    <form  class="form-horizontal" action="{{ route('work.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.work.partials.form')
    </form>
@stop