<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $topArticless = Article::orderBy('views', 'desc')->take(3)->get();
        $topArticles = Article::orderBy('views', 'desc')->take(10)->get();
        $articles = Article::latest()->paginate(6);

        return view('news.index', compact('topArticless','topArticles' , 'articles'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $articles = Article::where('title', 'LIKE', "%{$query}%")
                           ->orWhere('content', 'LIKE', "%{$query}%")
                           ->paginate(10);

        return view('news.search', compact('articles' , 'query'));
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('news.show', ['article' => $article]);
    }

    public function category($id)
    {
        $category = Category::findOrFail($id);
        $articles = $category->articles()->paginate(5);
        return view('news.category', compact('category', 'articles'));
    }
}
