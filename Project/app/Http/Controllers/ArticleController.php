<?php

namespace App\Http\Controllers;
use App\Article;
use App\ArticlesCategory;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        $articles_categories = ArticlesCategory::withCount('Article')->get();

        return view('pages.article', ['articles' => $articles, 'articles_categories' => $articles_categories]);
    }

    public function show($id)
    {
        $article = Article::find($id);
        $articles_categories = ArticlesCategory::withCount('Article')->get();

        return view('pages.article-detail', ['article' => $article, 'articles_categories' => $articles_categories]);
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Article $article)
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
