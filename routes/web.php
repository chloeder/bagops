<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

    Route::get('/kategori', [KategoriController::class, 'index']);
    Route::get('/kategori/tambah', [KategoriController::class, 'create']);
    Route::post('/kategori/tambah', [KategoriController::class, 'store']);
    Route::get('/kategori/{slug}/edit', [KategoriController::class, 'edit']);
    Route::put('/kategori/{slug}', [KategoriController::class, 'update']);
    Route::delete('/kategori/{slug}', [KategoriController::class, 'destroy']);
});
