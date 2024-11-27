<?php

use App\Http\Controllers\EkstrakurikularController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TahunAjaranController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('login',["title" => "E-Rapor | SMK Nusantara"]);
});

//route user admin
Route::get('ADMdashboard', function () {
    return view('/ADMpage/ADMdashboard',["title" => "E-Rapor | SMK Nusantara"]);
});
// route biodata admin
Route::get('dataAkun', function () {
    return view('/ADMpage/dataAkun',["title" => "E-Rapor | SMK Nusantara"]);
});

Route::get('dataGuru', [GuruController::class, 'index']);

Route::get('dataSiswa', function () {
    return view('/ADMpage/dataSiswa',["title" => "E-Rapor | SMK Nusantara"]);
});
// route data pembelajaran admin
Route::get('dataTahunAjaran', function () {
    return view('/ADMpage/dataTahunAjaran',["title" => "E-Rapor | SMK Nusantara"]);
});
Route::get('dataKelas', function () {
    return view('/ADMpage/dataKelas',["title" => "E-Rapor | SMK Nusantara"]);
});
Route::get('dataMapel', function () {
    return view('/ADMpage/dataMapel',["title" => "E-Rapor | SMK Nusantara"]);
});
Route::get('dataEkstrakurikuler', function () {
    return view('/ADMpage/dataEkstrakurikuler',["title" => "E-Rapor | SMK Nusantara"]);
});
Route::get('dataPrestasi', function () {
    return view('/ADMpage/dataPrestasi',["title" => "E-Rapor | SMK Nusantara"]);
});
//route menu rapor nilai admin
Route::get('nilaiAkhirADM', function () {
    return view('/ADMpage/nilaiAkhir',["title" => "E-Rapor | SMK Nusantara"]);
});
Route::get('detailNilaiAkhir', function () {
    return view('/ADMpage/detailNilaiAkhir',["title" => "E-Rapor | SMK Nusantara"]);
});
Route::get('cetakRapor', function () {
    return view('/ADMpage/cetakRapor',["title" => "E-Rapor | SMK Nusantara"]);
});
Route::get('detailRapor', function () {
    return view('/ADMpage/detailRapor',["title" => "E-Rapor | SMK Nusantara"]);
});
//route page tambahan
Route::get('tentang', function () {
    return view('/ADMpage/ADMtentang',["title" => "E-Rapor | SMK Nusantara"]);
});
Route::get('editDataSiswa', function () {
    return view('/ADMpage/editDataSiswa',["title" => "E-Rapor | SMK Nusantara"]);
});
Route::get('editDataGuru', function () {
    return view('/ADMpage/editDataGuru',["title" => "E-Rapor | SMK Nusantara"]);
});
Route::get('editDataAkun', function () {
    return view('/ADMpage/editDataAkun',["title" => "E-Rapor | SMK Nusantara"]);
});

//route user guru
Route::get('USRdashboard', function () {
    return view('/USRpage/USRdashboard',["title" => "E-Rapor | SMK Nusantara"]);
});
Route::get('nilaiPelajaran', function () {
    return view('/USRpage/nilaiPelajaran',["title" => "E-Rapor | SMK Nusantara"]);
});
Route::get('detailPelajaran', function () {
    return view('/USRpage/detailPelajaran',["title" => "E-Rapor | SMK Nusantara"]);
});
Route::get('spiritual', function () {
    return view('/USRpage/spiritual',["title" => "E-Rapor | SMK Nusantara"]);
});
Route::get('kehadiran', function () {
    return view('/USRpage/kehadiran',["title" => "E-Rapor | SMK Nusantara"]);
});
Route::get('catatan', function () {
    return view('/USRpage/catatan',["title" => "E-Rapor | SMK Nusantara"]);
});
Route::get('nilaiEkskul', function () {
    return view('/USRpage/nilaiEkskul',["title" => "E-Rapor | SMK Nusantara"]);
});
Route::get('detailEkskul', function () {
    return view('/USRpage/detailEkskul',["title" => "E-Rapor | SMK Nusantara"]);
});
Route::get('nilaiAkhirUSR', function () {
    return view('/USRpage/nilaiAkhir',["title" => "E-Rapor | SMK Nusantara"]);
});
Route::get('profil', function () {
    return view('/USRpage/profil',["title" => "E-Rapor | SMK Nusantara"]);
});
Route::get('tentangUSR', function () {
    return view('/USRpage/USRtentang',["title" => "E-Rapor | SMK Nusantara"]);
});

// route new rosyan
Route::get('/rapor', function () {
    return view('export.rapor');
});

Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::controller(SiswaController::class)->group(function () {
    Route::get('/dataSiswa', 'index')->name('siswa.index');
    Route::post('/dataSiswa/store', 'store')->name('siswa.store');
    Route::get('/editDataSiswa/{siswa}', 'edit')->name('siswa.edit');
    Route::post('/editDataSiswa/{siswa}/update', 'update')->name('siswa.update');
    Route::get('/dataSiswa/destroy/{siswa}', 'destroy')->name('siswa.destroy');
});

Route::controller(GuruController::class)->group(function () {
    Route::get('/dataGuru', 'index')->name('guru.index');
    Route::post('/dataGuru/store', 'store')->name('guru.store');
    Route::get('/editDataGuru/{guru}', 'edit')->name('guru.edit');
    Route::post('/editDataGuru/{guru}/update', 'update')->name('guru.update');
    Route::get('/dataGuru/destroy/{guru}', 'destroy')->name('guru.destroy');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/dataAkun', 'index')->name('user.index');
    Route::post('/dataAkun/store', 'store')->name('user.store');
    Route::get('/editDataAkun/{user}', 'edit')->name('user.edit');
    Route::post('/editDataAkun/{user}/update', 'update')->name('user.update');
    Route::get('/dataAkun/destroy/{user}', 'destroy')->name('user.destroy');
});

Route::controller(TahunAjaranController::class)->group(function () {
    Route::get('/dataTahunAjaran', 'index')->name('tahun-ajaran.index');
    Route::post('/dataTahunAjaran/store', 'store')->name('tahun-ajaran.store');
    Route::get('/editTahunAjaran/{tahunAjaran}', 'edit')->name('tahun-ajaran.edit');
    Route::post('/editTahunAjaran/{tahunAjaran}/update', 'update')->name('tahun-ajaran.update');
    Route::get('/dataTahunAjaran/destroy/{tahunAjaran}', 'destroy')->name('tahun-ajaran.destroy');
});

Route::controller(KelasController::class)->group(function () {
    Route::get('/dataKelas', 'index')->name('kelas.index');
    Route::post('/dataKelas/store', 'store')->name('kelas.store');
    Route::get('/editDataKelas/{kelas}', 'edit')->name('kelas.edit');
    Route::post('/editDataKelas/{kelas}/update', 'update')->name('kelas.update');
    Route::get('/dataKelas/destroy/{kelas}', 'destroy')->name('kelas.destroy');
});

Route::controller(MapelController::class)->group(function () {
    Route::get('/dataMapel', 'index')->name('mapel.index');
    Route::post('/dataMapel/store', 'store')->name('mapel.store');
    Route::get('/editDataMapel/{mapel}', 'edit')->name('mapel.edit');
    Route::post('/editDataMapel/{mapel}/update', 'update')->name('mapel.update');
    Route::get('/dataMapel/destroy/{mapel}', 'destroy')->name('mapel.destroy');
});

Route::controller(EkstrakurikularController::class)->group(function () {
    Route::get('/dataEkstrakurikuler', 'index')->name('ekskul.index');
    Route::post('/dataEkstrakurikuler/store', 'store')->name('ekskul.store');
    Route::get('/editDataEkstrakurikuler/{ekskul}', 'edit')->name('ekskul.edit');
    Route::post('/editDataEkstrakurikuler/{ekskul}/update', 'update')->name('ekskul.update');
    Route::get('/dataEkstrakurikuler/destroy/{ekskul}', 'destroy')->name('ekskul.destroy');
});

Route::controller(PrestasiController::class)->group(function () {
    Route::get('/dataPrestasi', 'index')->name('prestasi.index');
    Route::post('/dataPrestasi/store', 'store')->name('prestasi.store');
    Route::get('/editDataPrestasi/{prestasi}', 'edit')->name('prestasi.edit');
    Route::post('/editDataPrestasi/{prestasi}/update', 'update')->name('prestasi.update');
    Route::get('/dataPrestasi/destroy/{prestasi}', 'destroy')->name('prestasi.destroy');
});
