<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PendiriController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformasiUmumController;


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
Route::get('/news/{id}', [HomeController::class, 'berita'])->name('detail.berita');
Route::get('/proposal/{id}', [HomeController::class, 'kegiatan'])->name('detail.kegiatan');
Route::get('/news-list', [HomeController::class, 'listNews'])->name('news.list');
Route::get('/list-kegiatan', [HomeController::class, 'listKegiatan'])->name('kegiatannya.list');
Route::get('/tentang-pengurus/{id}', [HomeController::class, 'pengurus'])->name('detail.pengurus');
Route::get('anggota-komunitas', [HomeController::class, 'anggota'])->name('anggota');
Route::post('anggota-komunitas', [HomeController::class, 'storeAnggota'])->name('anggota.post');

Route::get('show-picture', [HelperController::class, 'showPicture'])->name('helper.show-picture');

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
    Route::post('sendCheckbox', [BeritaController::class, 'changeAccess']);
    Route::post('sendCheckboxkegiatan', [KegiatanController::class, 'changeAccess']);
    Route::get('/berita/checkSlug', [BeritaController::class, 'checkSlug']);
    Route::get('/kegiatan/checkSlug', [KegiatanController::class, 'checkSlug']);
    Route::resource('berita', BeritaController::class);
    Route::resource('file_image', FileController::class);
    Route::resource('anggota', AnggotaController::class);
    Route::resource('partner', PartnersController::class);
    Route::resource('kegiatan', KegiatanController::class);
});