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
    return view('layouts/main');
});

Route::get('categories/{id}', [
    'uses' => 'CategoriesController@categoryAction'
]);

Route::get('products/{id}', [
    'uses' => 'ProductsController@showAction'
]);

Route::get('order/{id}', [
    'uses' => 'OrdersController@buyAction'
]);

Route::post('order_final', [
    'uses' => 'OrdersController@finishAction'
]);
