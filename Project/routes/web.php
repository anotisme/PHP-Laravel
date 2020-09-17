<?php
use App\Product;
use App\ArticlesCategory;
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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/shop', 'ProductController@index')->name('shop');

Route::get('/news', 'NewsController@index')->name('news');

Route::get('add-to-cart/{id}', 'CartController@addToCart');

Route::get('remove/{id}', 'CartController@removeProductFromCart')->name('remove');

Route::get('update/{id}', 'CartController@updateProductFromCart')->name('update');

Route::get('clear', 'CartController@clear')->name('clear');

Route::get('/shop/cart', 'CartController@index');

Route::get('/shop/checkout', 'CartController@checkout')->name('checkout');

Route::resources([
    'products'          => 'ProductController',
    'category'          => 'CategoryController',
    'articles-category' => 'ArticlesCategoryController',
    'projetcs'          => 'ProjectController',
    'articles'          => 'ArticleController',
]);

Route::any('/search',function(){
    $s = \Request::get ( 's' );
    $products = Product::where('name','LIKE','%'.$s.'%')->get();
    $articles_categories = ArticlesCategory::withCount('Article')->get();

    return view('pages.seacrh-result', ['products' => $products, 'articles_categories' => $articles_categories])->withQuery ( $s );
});
// Route::get('/articles/{post_slug}', 'ArticleController@show');
