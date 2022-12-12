<?php

use\App\Http\Controllers\LaporanController;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\mahasiswapdf;
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

Route::controller(mahasiswaController::class)->group(function () {
    Route::get('/mahasiswa', 'index');
    Route::get('/mahasiswa/{id}', 'show');
    Route::post('/mahasiswa', 'store');
    Route::get('/mahasiswa/new', 'create');
    Route::delete('/mahasiswa/{id}', 'destroy');
    Route::get('/mahasiswa/{id}', 'edit');
    Route::put('/mahasiswa/{id}', 'update');
});

Route::resource('admin/customized_limit', 'App\\Http\\Controllers\\Admin\customized_limitController');
Route::resource('admin/time', 'App\\Http\\Controllers\\Admin\timeController');
Route::resource('admin/location_time', 'App\\Http\\Controllers\\Admin\location_timeController');
Route::resource('admin/disabled_time', 'App\\Http\\Controllers\\Admin\disabled_timeController');
Route::resource('admin/mahasiswa', 'App\\Http\\Controllers\\Admin\mahasiswaController');
Route::resource('admin/program', 'App\\Http\\Controllers\\Admin\programController');
Route::resource('admin/admin', 'App\\Http\\Controllers\\Admin\adminController');
Route::resource('admin/order', 'App\\Http\\Controllers\\Admin\orderController');
Route::resource('admin/location', 'App\\Http\\Controllers\\Admin\locationController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('admin/replacement-lounge', 'App\\Http\\Controllers\\Admin\replacementLoungeController');

Route::get('/laporan/mahasiswa',[LaporanController::class,'index']);
Route::get('/laporan/mahasiswa/pdf',[LaporanController::class,'cetak_pdf']);