<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ArticlesCategory;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        $articles_categories = ArticlesCategory::withCount('Article')->get();

        return view('pages.products.shop', ['products' => $products, 'articles_categories' => $articles_categories]);
    }

    public function show($name)
    {
        $product = Product::where('name', $name)->first();
        $articles_categories = ArticlesCategory::withCount('Article')->get();

        return view('pages.products.product-detail', ['product' => $product, 'articles_categories' => $articles_categories]);
    }
}
