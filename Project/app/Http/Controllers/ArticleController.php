<?php

namespace App\Http\Controllers;
use App\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('pages.article', ['articles' => $articles]);
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('pages.article-detail', ['article' => $article]);
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
