<?php

use Illuminate\Support\Facades\Route;

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
//frontend
Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/', 'App\Http\Controllers\HomeController@show_home');

//danhmucsanpham


Route::get('/san-pham', 'App\Http\Controllers\CategoryProduct@show_product_home');

Route::get('/danh-muc-san-pham/{category_id}', 'App\Http\Controllers\Product@show_category_home');
Route::get('/chi-tiet-san-pham/{product_id}', 'App\Http\Controllers\ProductController@product_detail');


//back-end
Route::get('/admin', 'App\Http\Controllers\AdminController@index');
Route::get('/dashboard', 'App\Http\Controllers\AdminController@show_dashboard');
Route::post('/admin-dashboard', 'App\Http\Controllers\AdminController@dashboard');
Route::get('/logout', 'App\Http\Controllers\AdminController@logout');

//category-product
Route::get('/add-category-product', 'App\Http\Controllers\CategoryProduct@add_category_product');
Route::get('/edit-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@delete_category_product');
Route::get('/all-category-product', 'App\Http\Controllers\CategoryProduct@all_category_product');

Route::get('/unactive-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@active_category_product');

Route::post('/save-category-product', 'App\Http\Controllers\CategoryProduct@save_category_product');
Route::post('/update-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@update_category_product');

//product
Route::get('/add-product', 'App\Http\Controllers\ProductController@add_product');
Route::get('/edit-product/{product_id}', 'App\Http\Controllers\ProductController@edit_product');
Route::get('/delete-product/{product_id}', 'App\Http\Controllers\ProductController@delete_product');
Route::get('/all-product', 'App\Http\Controllers\ProductController@all_product');

Route::get('/unactive-product/{product_id}', 'App\Http\Controllers\ProductController@unactive_product');
Route::get('/active-product/{product_id}', 'App\Http\Controllers\ProductController@active_product');

Route::post('/save-product', 'App\Http\Controllers\ProductController@save_product');
Route::post('/update-product/{product_id}', 'App\Http\Controllers\ProductController@update_product');

//cate-news
Route::get('/add-category-new', 'App\Http\Controllers\CategoryNews@add_category_new');
Route::get('/edit-category-new/{category_new_id}', 'App\Http\Controllers\CategoryNews@edit_category_new');
Route::get('/delete-category-new/{category_new_id}', 'App\Http\Controllers\CategoryNews@delete_category_new');
Route::get('/all-category-new', 'App\Http\Controllers\CategoryNews@all_category_new');

Route::get('/unactive-category-new/{category_new_id}', 'App\Http\Controllers\CategoryNews@unactive_category_new');
Route::get('/active-category-new/{category_new_id}', 'App\Http\Controllers\CategoryNews@active_category_new');

Route::post('/save-category-new', 'App\Http\Controllers\CategoryNews@save_category_new');
Route::post('/update-category-new/{category_new_id}', 'App\Http\Controllers\CategoryNews@update_category_new');

//news
Route::get('/add-news', 'App\Http\Controllers\NewsController@add_news');
Route::get('/edit-news/{news_id}', 'App\Http\Controllers\NewsController@edit_news');
Route::get('/delete-news/{news_id}', 'App\Http\Controllers\NewsController@delete_news');
Route::get('/all-news', 'App\Http\Controllers\NewsController@all_news');

Route::get('/unactive-news/{news_id}', 'App\Http\Controllers\NewsController@unactive_news');
Route::get('/active-news/{news_id}', 'App\Http\Controllers\NewsController@active_news');

Route::post('/save-news', 'App\Http\Controllers\NewsController@save_news');
Route::post('/update-news/{news_id}', 'App\Http\Controllers\NewsController@update_news');


//cart
Route::post('/save-cart', 'App\Http\Controllers\CartController@save_cart');
Route::get('/Add-Cart/{id}', 'App\Http\Controllers\CartController@AddCart');
