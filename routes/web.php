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

Route::get('/shopping-cart-add', function () {
    Cart::add(1, 'Macbook Pro', 2900, 1, array());

    foreach (Cart::getContent() as $product) {
        echo "Id: $product->id</br>";
        echo "Name: $product->name</br>";
        echo "Price $product->price</br>";
        echo "Quantity $product->quantity</br>";
    }
});

Route::get('/', 'HomeController@index')->name('home');
Route::post('/cart-add', 'CartController@add')->name('cart.add');
Route::get('/cart-checkout', 'CartController@cart')->name('cart.checkout');
Route::post('/cart-clear', 'CartController@clear')->name('cart.clear');
Route::get('/brands/{url}', 'HomeController@brands')->name('brands');
Route::get('/categories/{url}', 'HomeController@categories')->name('categories');