@extends('adminlte::page')

@section('title', 'Новый тэг')

@section('content_header')
    <h1>Новый тэг</h1>
@stop

@section('content')
    <form  class="form-horizontal" action="{{ route('tag.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.tags.partials.form')
    </form>
@stop