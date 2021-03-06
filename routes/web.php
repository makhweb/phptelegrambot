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
Route::get('/product/{locale}/{id}', function ($locale, $id) {
    return view('product', [
        'product' => App\Product::findOrFail($id)
    ]);
})->name('product');

Route::any('{all}', function () {
    return view('app');
})->where(['all' => '.*']);
