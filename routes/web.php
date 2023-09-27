<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiUmumController;
use App\Http\Controllers\PendiriController;
use Illuminate\Support\Facades\File;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('index');
//dokumentasi template
Route::get('docs', function () {
    return File::get(public_path() . '/documentation.html');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
    Route::get('visi-misi', [InformasiUmumController::class, 'visimisi'])->name('visimisi');
    Route::post('visi-misi', [InformasiUmumController::class, 'storeVisimisi'])->name('visimisi.post');
    Route::get('sosial-media', [InformasiUmumController::class, 'sosmed'])->name('sosmed');
    Route::post('sosial-media', [InformasiUmumController::class, 'storeSosmed'])->name('sosmed.post');
    Route::get('kontak', [InformasiUmumController::class, 'kontak'])->name('kontak');
    Route::post('kontak', [InformasiUmumController::class, 'storeKontak'])->name('kontak.post');
    Route::get('ganti-password', [InformasiUmumController::class, 'gantiPassword'])->name('password');
    Route::post('/ganti-password', [DashboardController::class, 'gantiPassword'])->name('ganti.password');
    Route::resource('pendiri', PendiriController::class);

});