@extends('adminlte::page')

@section('title', 'Новый отзыв')

@section('content_header')
    <h1>Новый отзыв</h1>
@stop

@section('content')
    <form  class="form-horizontal" action="{{ route('review.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.reviews.partials.form')
    </form>
@stop