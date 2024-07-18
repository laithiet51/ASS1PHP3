@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Chi Tiết Tin</h1>

    <div class="card mb-4">
        <img src="{{ $article->thumbnail }}" class="card-img-top news-thumbnail1" alt="{{ $article->title }}" width="100%" height="auto">
        <div class="card-body">
            <h5 class="card-title news-title">{{ $article->title }}</h5>
            <p class="card-text">{{ $article->content }}</p>
            <a href="{{ url('/') }}" class="btn btn-primary">Quay Lại</a>
        </div>
    </div>

</div>
@endsection
