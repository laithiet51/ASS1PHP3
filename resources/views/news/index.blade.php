@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-md-8">
           <h1>Tin Nổi Bật</h1>
            @foreach($topArticless as $article)
            <div class="card mb-4">
                <img src="{{ $article->thumbnail }}" class="card-img-top news-thumbnail" alt="{{ $article->title }}">
                <div class="card-body">
                    <h2 class="card-title news-title">{{ $article->title }}</h2>
                    <p class="card-text news-content">{{ Str::limit($article->content, 150) }}</p>
                    <a href="{{ url('/article/'.$article->id) }}" class="btn btn-primary">Đọc thêm</a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="col-md-4">
            <!-- Search Widget -->
            <div class="card mb-4">
                <div class="card-header">
                    Tìm kiếm
                </div>
                <div class="card-body">
                    <form action="{{ route('search') }}" method="GET">
                        <div class="input-group">
                            <input type="text" name="query" class="form-control" placeholder="Tìm kiếm..." value="{{ request()->input('query') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">Tìm Kiếm</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Hot News Widget -->
            <div class="card">
                <h5 class="card-header">Top 10 tin nóng</h5>
                <div class="card-body">
                    <div class="row">
                        @foreach($topArticles as $article)
                        <div class="col-lg-12">
                            <div class="media mb-3">
                                <img src="{{ $article->thumbnail }}" class="card-img-top news-thumbnail2 rounded" alt="{{ $article->title }}">
                                <div class="media-body">
                                    <h6 class="mt-0"><a href="{{ url('/article/'.$article->id) }}">{{ $article->title }}</a></h6>
                                    <p>{{ Str::limit($article->content, 50) }}</p>
                                    {{-- <a href="{{ url('/article/'.$article->id) }}" class="btn btn-primary">Đọc thêm</a> --}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="container mt-4">
    <h1 class="mb-4">Tin Mới Nhất</h1>
    <div class="row">
        @foreach($articles as $article)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ $article->thumbnail }}" class="card-img-top news-thumbnail" alt="{{ $article->title }}">
                <div class="card-body">
                    <h5 class="card-title news-title">{{ $article->title }}</h5>
                    <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
                    <a href="{{ url('/article/'.$article->id) }}" class="btn btn-primary">Xem Chi Tiết</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $articles->links() }}
    </div>
</div>
@endsection
