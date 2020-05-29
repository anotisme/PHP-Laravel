<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\ArticlesCategory;
use App\Product;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        $articles_categories = ArticlesCategory::withCount('Article')->get();

        return view('pages.category.category', ['products' => $products, 'articles_categories' => $articles_categories]);
    }

    public function show($name)
    {
        $products_by_category = Category::where('name', $name)->first();
        $articles_categories = ArticlesCategory::withCount('Article')->get();

        return view('pages.category.product-category', ['products_by_category' => $products_by_category, 'articles_categories' => $articles_categories]);
    }
}
