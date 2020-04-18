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

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin/add-banners', function () {
    return view('admin.banners.add-banners');
});
Route::get('/admin/edit-banners', function () {
    return view('admin.banners.edit-banners');
});
Route::get('/admin/view-banners', function () {
    return view('admin.banners.view-banners');
});
Route::get('/admin/add-category', function () {
    return view('admin.categories.add-categories');
});
Route::get('/admin/edit-category', function () {
    return view('admin.categories.edit-category');
});
Route::get('/admin/view-category', function () {
    return view('admin.categories.view-category');
});
Route::get('/admin/add-products', function () {
    return view('admin.products.add-products');
});
Route::get('/admin/edit-products', function () {
    return view('admin.products.edit-products');
});
Route::get('/admin/view-products', function () {
    return view('admin.products.view-products');
});
Route::get('/admin/add-images', function () {
    return view('admin.products.add-images');
});

Route::get('/', function () {
    return view('home');
});
Route::get('/history', function () {
    return view('history');
});
Route::get('/cart', function () {
    return view('cart');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
