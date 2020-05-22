<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    //
    public function index()
    {
        $news = News::all();

        return view('home.blog-news', compact('news'));
    }
}
