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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/category', function () {
    return view('pages.categories');
});

Route::get('/detail', function () {
    return view('pages.detail');
});

Route::get('/cart', function () {
    return view('pages.cart');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});

Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/emty-cart', function () {
    return view('pages.emty_cart');
});

Route::get('/not-found', function () {
    return view('pages.404');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/track', function () {
    return view('pages.track');
});
// admin=
Route::get('dashboard', 'Admin\DashboardController@getIndex');
Route::get('admin/login', 'Admin\LoginController@getLogin');
Route::post('admin/login', 'Admin\LoginController@postLogin');
Route::get('list', 'Admin\ProductsController@index');
Route::get('/create', ['uses' => 'Admin\ProductsController@getCreate', 'as' => 'getCreate' ]);
Route::post('/create', ['uses' => 'Admin\ProductsController@postCreate', 'as' => 'postCreate' ]);
Route::get('logout',[ 'uses' => 'Admin\LoginController@getLogout', 'as' => 'logout' ]);

Auth::routes();
