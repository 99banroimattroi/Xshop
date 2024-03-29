<?php

Route::get('/', 'FrontendController@index');

Auth::routes(['verify' => true]);

Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('product/{id}/{slug}.html', 'FrontendController@getProduct');

Route::get('category/{id}/{slug}.html','FrontendController@getCategory');

Route::get('brand/{id}/{slug}.html','FrontendController@getBrand');

Route::get('contact', 'FrontendController@contact');

Route::get('mapshop', 'FrontendController@mapshop');

Route::get('post','FrontendController@indexpost');
Route::get('posts/{id}/{slug}.html','FrontendController@getPost');

Route::resources(['comments' => 'CommentController']);

Route::get('/search/name', 'FrontendController@searchByName');

Route::group(['prefix'=>'cart'], function(){
    Route::get('/','CartController@getShowCart');
	Route::get('add/{id}','CartController@getAddCart');
    Route::get('delete/{id}','CartController@getDeleteCart');
    Route::get('update','CartController@getUpdateCart');
});

Route::get('registerAdmin', 'AdminController@registerAdmin');
Route::post('registerAdmin', 'AdminController@store_register')->name('registerAdmin');

Route::group(['prefix'=>'wishlist'], function(){
    Route::get('/','CartController@getshowWishList')->name('wishlist');
	Route::get('add/{id}','CartController@getAddWishlist');
    Route::get('delete/{id}','CartController@getDeleteWishlist');
});

Route::get('/checkout', 'CartController@getCheckOut');
Route::post('/checkout', 'CartController@postCheckOut');

Route::get('admin/login', 'AdminController@getLogin')->middleware('checkLogin');
Route::post('admin/login', 'AdminController@postLogin')->name('admin/login');

Route::post('admin/logout', 'AdminController@logout');

Route::group(['prefix' => 'admin', 'middleware' => 'adminLogin'], function () {

    Route::get('/', 'FrontendController@getIndexAdmin');

    Route::resources(['users' => 'AdminController']);

    Route::resources(['brands' => 'BrandController']);

    Route::resources(['category' => 'CategoryController']);

    Route::resources(['products' => 'ProductController']);

    Route::resources(['customers' => 'CustomerController']);

    Route::resources(['bills' => 'BillController']);

    Route::resources(['posts' => 'PostController']);

    Route::resources(['attribute' => 'AttributeController']);

    Route::resources(['attribute_value' => 'Attribute_valueController']);

    Route::post('bills/updatebill/{id}', 'BillController@updatebill');
    
    Route::get('valueProduct', 'Attribute_valueController@valueProduct');
    Route::post('addValueProduct', 'Attribute_valueController@addValueProduct')->name('addValueProduct');
});
