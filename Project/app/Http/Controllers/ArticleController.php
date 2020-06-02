<?php

namespace App\Http\Controllers;
use App\Article;
use App\ArticlesCategory;
use App\Product;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        $products = Product::limit(4)->get();
        $articles_categories = ArticlesCategory::withCount('Article')->get();

        return view('pages.article', ['products' => $products, 'articles' => $articles, 'articles_categories' => $articles_categories]);
    }

    public function show($id)
    {
        $article = Article::find($id);
        $products = Product::limit(4)->get();
        $articles_categories = ArticlesCategory::withCount('Article')->get();

        return view('pages.article-detail', ['products' => $products, 'article' => $article, 'articles_categories' => $articles_categories]);
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
