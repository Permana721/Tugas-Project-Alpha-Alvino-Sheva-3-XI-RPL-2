<?php

use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;


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

Route::get('/cv', function () {
    return view('cv');
});

Route::get('/profile-pplg', function () {
    return view('profile-pplg');
});

Route::get('/content',[ContentController::class,'cv']);

// Rute untuk menampilkan daftar siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');

// Rute untuk menampilkan formulir tambah siswa
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswacreate');

// Rute untuk menambahkan siswa baru
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');

// Rute untuk menampilkan detail siswa
Route::get('/siswa/{siswa}', [SiswaController::class, 'show'])->name('siswadetail');

// Rute untuk menampilkan formulir edit siswa
Route::get('/siswa/{siswa}/edit', [SiswaController::class, 'edit'])->name('siswaedit');

// Rute untuk memperbarui siswa
Route::put('/siswa/{siswa}', [SiswaController::class, 'update'])->name('siswa.update');

// Rute untuk menghapus siswa
Route::delete('/siswa/{siswa:id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');