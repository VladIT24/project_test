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
    return view('home');
})->name('home');

Route::get('customer', function () {
    return view('customer');
})->name('customer');

Route::get('transaction', function () {
    return view('transaction');
})->name('transaction');

#Route::post('customer/submit', 'CustomerController@submit')->name('customer-form');

Route::post('customer/submit', function (){
    return Request::all();
})->name('customer-form');

Route::post('transaction/submit', 'MyTransactionController@submit')->name('transaction-form');
