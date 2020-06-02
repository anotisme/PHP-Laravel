<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticlesCategory;
use App\Article;
use App\Product;

class ArticlesCategoryController extends Controller
{
    //
    public function index()
    {
        $articles = Article::all();
        $products = Product::limit(4)->get();
        $articles_categories = ArticlesCategory::withCount('Article')->get();

        return view('pages.article', ['products' => $products, 'articles' => $articles, 'articles_categories' => $articles_categories]);
    }

    public function show($name)
    {
        $articles = Article::where('articles_category', $name)->get();
        $products = Product::limit(4)->get();
        $articles_categories = ArticlesCategory::withCount('Article')->get();

        return view('pages.category.articles-category', ['products' => $products, 'articles' => $articles, 'articles_categories' => $articles_categories]);
    }
}
