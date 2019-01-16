@extends('adminlte::page')

@section('title', 'Новое предложение')

@section('content_header')
    <h1>Новое предложение</h1>
@stop

@section('content')
    <form  class="form-horizontal" action="{{ route('offer.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.offer.partials.form')
    </form>
@stop