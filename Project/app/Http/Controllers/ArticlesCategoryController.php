<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticlesCategory;
use App\Article;

class ArticlesCategoryController extends Controller
{
    //
    public function index()
    {
        $articles = Article::all();
        $articles_categories = ArticlesCategory::withCount('Article')->get();

        return view('pages.article', ['articles' => $articles, 'articles_categories' => $articles_categories]);
    }

    public function show($name)
    {
        $articles = Article::where('articles_category', $name)->get();
        $articles_categories = ArticlesCategory::withCount('Article')->get();

        return view('pages.category.articles-category', ['articles' => $articles, 'articles_categories' => $articles_categories]);
    }
}
