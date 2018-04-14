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
    return view('client.base.landing');
});


Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware(['admin','auth']);

Route::get('/mi', function(){
    return 'Halaman MI';
})->middleware(['operator_mi','auth']);
Route::get('/smp', function(){
    return 'Halaman smp';
})->middleware(['operator_smp','auth']);
Route::get('/sma', function(){
    return 'Halaman sma';
})->middleware(['operator_sma','auth']);
