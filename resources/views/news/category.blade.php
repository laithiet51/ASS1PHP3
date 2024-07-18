@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Category: {{ $category->name }}</h1>
    <div class="row">
        @foreach($articles as $article)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $article->thumbnail }}" class="card-img-top news-thumbnail" alt="{{ $article->title }}">
                    <div class="card-body">
                        <h5 class="card-title news-title">{{ $article->title }}</h5>
                        <p class="card-text">{{ Str::limit($article->content, 10) }}</p>
                        <a href="{{ url('/article/'.$article->id) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $articles->links() }}
</div>
@endsection
