<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DkamarController;
use App\Http\Controllers\FkamarController;
use App\Http\Controllers\FhotelController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\KamarrController;
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



// Route Tamu Sebelum Login
Route::get('/', 'TamuController@index');
Route::get('/about', 'AboutController@index');
Route::get('/kontak', 'KontakController@index');

// Route Tamu Sesudah Login
Route::get('/tamu', 'WelcomeController@index')->name('tamu');
// Route::get('/kamarr', 'WkamarController@index')->name('kamarr');
Route::get('/fasilitas', 'FasilitasController@index');
// Route::resource('/reservasi', 'ReservasiController');
Route::resource('/kamarr', 'KamarrController');

// Route resepsionis
Route::get('/resepsionis', 'ResepsionisController@index')->name('resepsionis');
Route::get('/dtamu', 'DtamuController@index');

// Route login
Auth::routes();
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::get('/register', [App\Http\Controllers\Auth\LoginController::class, 'indexx'])->name('register');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Admin
Route::resource('/dkamar', 'DkamarController');
Route::resource('/fkamar', 'FkamarController');
Route::resource('/fhotel', 'FhotelController');

