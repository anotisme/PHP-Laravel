<?php
use App\Article;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('home');
    $articles = Article::where('category', 'Blog & News')->get();
    return View::make('home', array('articles' => $articles));
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/posts', 'ArticleController@index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

// dd(Voyager::routes()); die();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/shop', 'ProductController@index')->name('shop');

Route::get('/news', 'NewsController@index')->name('news');

Route::resource('articles','ArticleController');

// Route::get('/articles/{post_slug}', 'ArticleController@show');
