<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;

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

Route::resource('mahasiswa', MahasiswaController::class);
Route::get('/search', [MahasiswaController::class, 'search'])->name('search');
Route::get('/', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/nilai/{mahasiswa}',[MahasiswaController::class,'nilai'])->name('nilai'); 
Route::get('/mahasiswa/khs/{mahasiswa}', [MahasiswaController::class, 'cetak_khs'])->name('cetak_khs');

