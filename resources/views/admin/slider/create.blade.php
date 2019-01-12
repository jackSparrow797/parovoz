@extends('adminlte::page')

@section('title', 'Новый слайд')

@section('content_header')
    <h1>Новый слайд</h1>
@stop

@section('content')
    <form  class="form-horizontal" action="{{ route('slider.store') }}" method="post">
        {{ csrf_field() }}
        @include('admin.slider.partials.form')
    </form>
@stop