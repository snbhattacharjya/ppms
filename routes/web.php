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

Route::get('/offices', 'OfficeController@index')->name('office.index')->middleware('auth');
Route::get('/offices/create', 'OfficeController@create')->name('office.create')->middleware('auth');
Route::post('/offices', 'OfficeController@store')->name('office.store')->middleware('auth');
Route::get('/offices/{office}', 'OfficeController@show')->name('office.show')->middleware('auth');
Route::get('/offices/{office}/edit', 'OfficeController@edit')->name('office.edit')->middleware('auth');
Route::put('/offices/{office}', 'OfficeController@update')->name('office.update')->middleware('auth');
Route::delete('/offices/{office}', 'OfficeController@delete')->name('office.delete')->middleware('auth');
