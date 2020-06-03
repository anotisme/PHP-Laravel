<?php
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

// Route::get('/', function () {
//     // return view('home');
//     $articles = Article::where('articles_category', '2')->get();
//     return View::make('home', ['articles' => $articles]);
// });
Route::get('/', 'HomeController@index');

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

Route::resource('products','ProductController');

Route::resource('category','CategoryController');

Route::resource('articles-category','ArticlesCategoryController');

Route::resource('projetcs','ProjectController');
// Route::get('/articles/{post_slug}', 'ArticleController@show');
