<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DkamarController;
use App\Http\Controllers\FkamarController;
use App\Http\Controllers\FhotelController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\KamarrController;
use App\Http\Controllers\ResepsionisController;
use App\Http\Controllers\LoginController;
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
Route::get('/fasilitas', 'FhotelController@fasilitas');
Route::resource('/kamarr', 'KamarrController');
Route::get('/cetak', 'KamarrController@cetak');
Route::post('/pemesanan/{id}', 'KamarrController@pemesanan')->name('pemesanan');

// Route resepsionis
Route::get('/resepsionis', 'ResepsionisController@index')->name('resepsionis');
Route::get('/dtamu', 'DtamuController@index');
Route::post('/resepsionis/filter', 'DtamuController@filter')->name('resepsionis.filter');
Route::post('/resepsionis/search', 'DtamuController@search')->name('resepsionis.search');

// Route login
Auth::routes();
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::get('/register', [App\Http\Controllers\Auth\LoginController::class, 'indexx'])->name('register');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Admin
Route::resource('/dkamar', 'DkamarController');
Route::resource('/fkamar', 'FkamarController');
Route::resource('/fhotel', 'FhotelController');

