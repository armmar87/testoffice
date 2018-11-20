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
    return view('welcome');
});

Auth::routes();

//Route::group(['domain' => env('APP_URL')], function () {

    Route::get('/dashboard', 'Admin\DashboardController@index')->name('home');

    Route::Resource('/expenses', 'Admin\ExpenseController');
    Route::post('get-expenses-data-range', 'Admin\ExpenseController@getExpensesDataRange');

//});
