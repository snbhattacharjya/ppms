<?php

use Illuminate\Support\Facades\Route;

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

/*
Authentication Routes
*/

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/office', 'OfficeController@index')->name('office.index')->middleware('auth');
Route::get('/office/create', 'OfficeController@create')->name('office.create')->middleware('auth');
Route::post('/office', 'OfficeController@store')->name('office.store')->middleware('auth');
Route::get('/office/{office}', 'OfficeController@show')->name('office.show')->middleware('auth');
Route::get('/office/{office}/edit', 'OfficeController@edit')->name('office.edit')->middleware('auth');
Route::put('/office/{office}', 'OfficeController@update')->name('office.update')->middleware('auth');
Route::delete('/office/{office}', 'OfficeController@destroy')->name('office.delete')->middleware('auth');
