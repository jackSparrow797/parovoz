@extends('adminlte::page')

@section('title', 'Редактирование предложения')

@section('content_header')
    <h1>Редактирование предложения</h1>
@stop

@section('content')
    <form  class="form-horizontal" action="{{ route('offer.update', $offer->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.offer.partials.form')
    </form>
@stop