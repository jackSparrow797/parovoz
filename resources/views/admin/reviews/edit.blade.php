@extends('adminlte::page')

@section('title', 'Редактирование отзыва')

@section('content_header')
    <h1>Редактирование отзыва</h1>
@stop

@section('content')
    <form  class="form-horizontal" action="{{ route('review.update', $review->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.reviews.partials.form')
    </form>
@stop