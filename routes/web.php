<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Routing\Controller as RoutingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('', function () {
    return view('homepage/index');
    // return "Hahahaha The BamboKids";
});

Route::get('/beranda', [LatihanController::class, 'beranda']);
// Route::get('/homepage', [HomepageController::class, 'index']);

Auth::routes();


Route::get('index', [\App\Http\Controller\HomepageController::class, 'index']);
Route::get('about', [HomepageController::class, 'about']);
Route::get('kategori', [HomepageController::class, 'kategory']);
Route::get('contact', [HomepageController::class, 'contact']);
Route::get('admin', [DashboardController::class, 'index']);
// Route::get('pendaftaran', [PendaftaranController::class, 'index']);
// Route::get('kategori', [KategoriController::class, 'index']);


Route::prefix('mahasiswa')->group(function () {
    Route::get('/pendaftaran', function () {
        return '<h1>Ini Halaman Pendaftaran</h1>';
        // return view('mahasiswa.pendaftaran');
    });
    Route::get('/ujian', function () {
        // return view('ujian');
        return "<h1>Ini Halamn Ujian</h1>";
    });
    Route::get('/nilai', function () {
        return "<h1>Ini Halaman Nilai</h1>";
    });
});


