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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\JabatanController;
Route::resource('jabatan', App\Http\Controllers\JabatanController::class);

use App\Http\Controllers\MapelController;
Route::resource('mapel', App\Http\Controllers\MapelController::class);

use App\Http\Controllers\GuruController;
Route::resource('guru', App\Http\Controllers\GuruController::class);

use App\Http\Controllers\StrukturalController;
Route::resource('struktural', App\Http\Controllers\StrukturalController::class);

use App\Http\Controllers\ArtikelController;
Route::resource('artikel', App\Http\Controllers\ArtikelController::class);

use App\Http\Controllers\JurusanController;
Route::resource('jurusan', App\Http\Controllers\JurusanController::class);

use App\Http\Controllers\EskulController;
Route::resource('eskul', App\Http\Controllers\EskulController::class);

