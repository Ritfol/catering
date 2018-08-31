<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

//Front end route
Route::get('/' , 'FrontEndController@index')->name('index');

Route::group(['prefix'=>'customer'] , function ()
{
    Route::get('verify/{token}', 'Auth\RegisterController@verifyUser')->name('customer.verify');
    Route::get('dashboard' , 'CustomerController@dashboard')->name('customer.dashboard');
    Route::post('toOrder' , 'CustomerController@order')->name('customer.order');
    Route::get('order/toConfirm/{order}' , 'CustomerController@toConfirm')->name('customer.toConfirm');
    Route::get('pastOrders' , 'CustomerController@pastOrders')->name('customer.pastOrders');
});

Route::group(['prefix'=>'admin'] , function (){
    Route::get('dashboard' , 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('new-orders' , 'AdminController@newOrders')->name('admin.newOrders');
    Route::get('past-orders' , 'AdminController@pastOrders')->name('admin.pastOrders');
    Route::get('users' , 'AdminController@users')->name('admin.users');
    Route::get('add-meal' , 'AdminController@toAddMeal')->name('admin.toAddMeal');
    Route::post('add-meal' , 'AdminController@addMeal')->name('admin.addMeal');
//    Route::get('logout' , 'AdminController@logout')->name('admin.logout');
});
