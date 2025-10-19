<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::query()
            ->latest()
            ->select(['id', 'title', 'slug', 'image_path', 'tags', 'created_at'])
            ->paginate(12);

        return view('articles.index', compact('articles'));
    }

    public function show(string $slug)
    {
        $article = Article::query()->where('slug', $slug)->firstOrFail();
        Article::where('id', $article->id)->update(['views' => \DB::raw('views + 1')]);

        return view('articles.show', compact('article'));
    }
}
