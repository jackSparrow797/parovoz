@extends('adminlte::page')

@section('title', 'Новый раздел')

@section('content_header')
    <h1>Новый раздел</h1>
@stop

@section('content')
    <form  class="form-horizontal" action="{{ route('section.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.section.partials.form')
    </form>
@stop