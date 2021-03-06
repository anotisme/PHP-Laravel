<?php

namespace App\Http\Controllers;
use App\Article;
use App\Project;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articles = Article::where('articles_category', 'Blog & News')->get();
        $projects = Project::all();

        return view('home', ['articles' => $articles, 'projects' => $projects]);
    }
}
