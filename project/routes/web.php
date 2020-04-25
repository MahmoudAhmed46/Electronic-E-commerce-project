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

Route::get('/admin/dashboard', 'AdminController@dashboard')->name('Admin-Dashboard');
Route::match(['get','post'],'/admin/add-category','CategoriesController@addCategory');
Route::match(['get','post'],'/admin/edit-category/{id}','CategoriesController@editCategory');
Route::get('/admin/view-category', 'CategoriesController@viewCategory');
Route::get('/admin/delete-category/{id}', 'CategoriesController@deleteCategory');
Route::post('/admin/update-status-category','CategoriesController@updateStatus');
Route::match(['get','post'],'/admin/add-products', 'ProductController@addProduct');
Route::match(['get','post'],'/admin/edit-products/{id}','ProductController@editProduct');
Route::get('/admin/view-products','ProductController@viewProduct');
Route::get('/admin/delete-product/{id}','ProductController@deleteProduct');
Route::match(['get','post'],'/admin/add-images/{id}', 'ProductController@addImage');
Route::get('/admin/delete-image/{id}', 'ProductController@deleteImage');

/*
 * All user Routes
 * */
Route::get('/history', function () {
    return view('history');
});
Route::match(['get','post'],'/cart/{id}','ProductController@addCart');
Route::match(['get','post'],'/cart','ProductController@Cart');
Route::get('/labtopscategory',function () {
    return view('products-in-labtops-category');
});
Route::get('/mobilescategory',function () {
    return view('products-in-mobiles-category');
});
Route::get('/lcdscreenscategory',function () {
    return view('products-in-lcdscreen-category');
});
Route::get('/homenessitiescategory',function () {
    return view('products-in-homenessities-category');
});
Route::get('/accessoriescategory',function () {
    return view('products-in-accessories-category');
});
Route::get('/shopping', function () {
    return view('shopping-cart');
});

Auth::routes();

Route::get('/profile','profile@fun');
Route::get('/','HomeController@index')->name('home');
Route::get('/category/{id}', 'HomeController@show')->name('show');
Route::get('/add-to-cart/{id}','HomeController@getAddToCart')->name('product.addToCart');
Route::get('/shopping-cart','HomeController@getCart')->name('product.shoppingCart');

