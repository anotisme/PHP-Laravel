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
        $products = Product::simplePaginate(9);
        $articles_categories = ArticlesCategory::withCount('Article')->get();

        return view('pages.products.shop', ['products' => $products, 'articles_categories' => $articles_categories]);
    }

    public function show($name)
    {
        $products = Product::limit(4)->get();
        $product = Product::where('name', $name)->first();
        $articles_categories = ArticlesCategory::withCount('Article')->get();

        return view('pages.products.product-detail', ['products' => $products, 'product' => $product, 'articles_categories' => $articles_categories]);
    }
}
