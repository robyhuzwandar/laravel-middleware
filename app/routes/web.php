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


Auth::routes();
Route::get('/admin', 'DashboardController@index')->name('admin.dashboard')->middleware(['admin','auth']);

//mi
Route::group(['middleware' => 'operator_mi', 'auth'], function () {
Route::get('/mi/index', 'MiController@index')->name('mi.index');
Route::get('/mi/create', 'MiController@create')->name('mi.create');
Route::post('/mi/create', 'MiController@store')->name('mi.store');
});






Route::get('/smp', function(){
    return 'Halaman smp';
})->middleware(['operator_smp','auth']);
Route::get('/sma', function(){
    return 'Halaman sma';
})->middleware(['operator_sma','auth']);
