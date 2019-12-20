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

Route::group(['middleware' => 'auth'], function() {
	Route::get('/logout', 'AuthController@logout');
	Route::get('/checkout', 'ProductController@checkout')->name('checkout');
	Route::post('/order', 'ProductController@order');
});

Route::group(['middleware' => 'guest'],function() {
	Route::get('/register', 'AuthController@registerForm');
	Route::post('/register', 'AuthController@register');
	Route::get('/login', 'AuthController@loginForm')->name('login');
	Route::post('/login', 'AuthController@login');
});

Route::get('/', 'IndexController@index')->name('index');
Route::post('/quickview/{id}', 'IndexController@quickview');
Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/shop/category/{id}', 'CategoryController@view_category')->name('category.show');
Route::get('/shop/product/{id}', 'ProductController@show')->name('product.show');
Route::post('/shop/filter', 'ProductController@filter')->name('filter');
Route::get('/about', 'IndexController@about')->name('about');
Route::get('/contacts', 'IndexController@contacts')->name('contacts');
Route::post('/search', 'ProductController@search')->name('search');
Route::post('/subscribe', 'SubsController@subscribe');
Route::get('/verify/{token}', 'SubsController@verify');
	




Route::group(['prefix'=>'admin','namespace'=>'Admin', 'middleware' => 'admin'], function(){
	Route::get('/', 'DashboardController@index');
	Route::resource('/users', 'UsersController');
	Route::resource('/categories', 'CategoriesController');
	Route::resource('/products', 'ProductsController');
	Route::get('/products/deleteImage/{image_id}/{product_id}', 'ProductsController@deleteImage')->name('products.deleteImage');
	Route::resource('/subscribers', 'SubscribersController');
});