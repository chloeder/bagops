<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;

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


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::get('/kategori/tambah', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('/kategori/tambah', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('/kategori/{slug}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::put('/kategori/{slug}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::delete('/kategori/{slug}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

    Route::get('/dokumen', [DataController::class, 'index'])->name('dokumen');
    Route::get('/dokumen/tambah', [DataController::class, 'create']);
    Route::post('/dokumen/tambah', [DataController::class, 'store']);
    Route::get('/dokumen/detail/{slug}', [DataController::class, 'show']);
    Route::put('/dokumen/detail/{slug}', [DataController::class, 'updateStatus']);
    Route::get('/dokumen/{slug}/edit', [DataController::class, 'edit']);
    Route::put('/dokumen/{slug}', [DataController::class, 'update']);
    Route::delete('/dokumen/{slug}', [DataController::class, 'destroy']);

    Route::get('download/{slug}', [DataController::class, 'download']);
});
