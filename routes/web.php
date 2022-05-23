<?php

use App\Http\Controllers\admin\CADashboard;
use App\Http\Controllers\admin\CAKelahiran;
use App\Http\Controllers\admin\CAKeterangan_pindah_penduduk;
use App\Http\Controllers\admin\CCetak;
use App\Http\Controllers\admin\CKartu_keluarga_s;
use App\Http\Controllers\admin\CKartu_tanda_penduduk;
use App\Http\Controllers\admin\CKematian;
use App\Http\Controllers\admin\CPenduduk;
use App\Http\Controllers\penduduk\CPKk;
use App\Http\Controllers\penduduk\CPkks;
use App\Http\Controllers\penduduk\dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\penduduk\CPK;
use App\Http\Controllers\penduduk\CPKtp;

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
Route::get('/cetak/kks', [CCetak::class, 'kks']);
Route::get('/cetak/kk', [CCetak::class, 'kk']);
Route::get('/cetak/k', [CCetak::class, 'k']);
Route::get('/cetak/ktp', [CCetak::class, 'ktp']);

Route::group(
    ['middleware' => ['auth']],
    function () {
        // Route::get('admin/adashboard', function () {
        //     return view('admin/va_utama');
        // });
        Route::resource('admin/adashboard', CADashboard::class);

        Route::resource('admin/kelola-data-penduduk', CPenduduk::class);
        Route::resource('admin/kartu-keluarga-sementara', CKartu_keluarga_s::class);
        Route::post('admin/kartu-keluarga-sementara/update/{id}', [CKartu_keluarga_s::class, 'edit']);
        Route::post('admin/kartu-keluarga-sementara/updatedua/{id}', [CKartu_keluarga_s::class, 'edit_dua']);

        Route::resource('admin/keterangan-kematian', CKematian::class);
        Route::post('admin/keterangan-kematian/update/{id}', [CKematian::class, 'edit']);
        Route::post('admin/keterangan-kematian/updatedua/{id}', [CKematian::class, 'edit_dua']);

        Route::resource('admin/kartu-tanda-penduduk', CKartu_tanda_penduduk::class);
        Route::post('admin/kartu-tanda-penduduk/update/{id}', [CKartu_tanda_penduduk::class, 'edit']);
        Route::post('admin/kartu-tanda-penduduk/updatedua/{id}', [CKartu_tanda_penduduk::class, 'edit_dua']);

        Route::resource('admin/keterangan-pindah-penduduk', CAKeterangan_pindah_penduduk::class);



        Route::resource('admin/cetak/kks', CCetak::class);
        Route::get('admin/cetak/kk', [CCetak::class, 'kkf']);
        Route::get('admin/cetak/k', [CCetak::class, 'kf']);
        Route::get('admin/cetak/ktp', [CCetak::class, 'ktpf']);

        Route::resource('admin/kelahiran', CAKelahiran::class);
        Route::post('admin/kelahiran/update/{id}', [CAKelahiran::class, 'edit']);
        Route::post('admin/kelahiran/updatedua/{id}', [CAKelahiran::class, 'edit_dua']);


        Route::resource('penduduk/dashboard', dashboard::class);
        Route::resource('penduduk/pkks', CPkks::class);
        Route::resource('penduduk/pkk', CPKk::class);
        Route::resource('penduduk/pk', CPK::class);
        Route::resource('penduduk/pktp', CPKtp::class);
    }
);



// Route::get('dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
