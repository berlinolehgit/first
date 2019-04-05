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

Route::get('/', 'IndexController@index')->name('index');
Route::get('offers', 'OfferController@index')->name('offers.index');
Route::get('offers/add', 'OfferController@add')->name('offers.add');
Route::get('offers/edit/{offer}', 'OfferController@edit')->name('offers.edit');
Route::get('users', 'UserController@index')->name('users.index');
Route::get('users/add', 'UserController@add')->name('users.add');
Route::post('users/add', 'UserController@submit');
Route::post('offers/add', 'OfferController@submit');
Route::post('offers/edit/{offer}', 'OfferController@update');
Route::get('offers/delete/{offer}', 'OfferController@delete')->name('offers.delete');



