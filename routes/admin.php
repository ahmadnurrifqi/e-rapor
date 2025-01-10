<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TahunAjaranController;
use App\Http\Controllers\EkstrakurikularController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\RaporController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Admin Routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('ADMdashboard', function () {
        return view('/ADMpage/ADMdashboard', ["title" => "E-Rapor | SMK Nusantara"]);
    });

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

        Route::get('/dataKelas/{kelas}/add/{siswa}', 'addSiswa')->name('kelas.addSiswa');
        Route::get('/dataKelas/{kelas}/delete/{siswa}', 'deleteSiswa')->name('kelas.deleteSiswa');

        Route::get('/dataKelas/{kelas}/add/mapel/{mapel}', 'addMapel')->name('kelas.addMapel');
        Route::get('/dataKelas/{kelas}/delete/mapel/{kelasAjaran}', 'deleteMapel')->name('kelas.deleteMapel');
    });

    Route::controller(MapelController::class)->group(function () {
        Route::get('/dataMapel', 'index')->name('mapel.index');
        Route::post('/dataMapel/store', 'store')->name('mapel.store');
        Route::get('/editDataMapel/{mapel}', 'edit')->name('mapel.edit');
        Route::post('/editDataMapel/{mapel}/update', 'update')->name('mapel.update');
        Route::get('/dataMapel/destroy/{mapel}', 'destroy')->name('mapel.destroy');
    });

    Route::controller(EkstrakurikularController::class)->group(function () {
        Route::get('/dataEkstrakurikuler', 'index')->name('admin.ekskul.index');
        Route::post('/dataEkstrakurikuler/store', 'store')->name('ekskul.store');
        Route::get('/editDataEkstrakurikuler/{ekskul}', 'edit')->name('ekskul.edit');
        Route::post('/editDataEkstrakurikuler/{ekskul}/update', 'update')->name('ekskul.update');
        Route::get('/dataEkstrakurikuler/destroy/{ekskul}', 'destroy')->name('ekskul.destroy');
        Route::get('/dataEkstrakurikuler/{ekskul}/add/siswa/{siswa}', 'addSiswa')->name('ekskul.addSiswa');
        Route::get('/dataEkstrakurikuler/{ekskul}/delete/siswa/{ekskulMember}', 'deleteSiswa')->name('ekskul.deleteSiswa');
    });

    Route::controller(PrestasiController::class)->group(function () {
        Route::get('/dataPrestasi', 'index')->name('prestasi.index');
        Route::post('/dataPrestasi/store', 'store')->name('prestasi.store');
        Route::get('/editDataPrestasi/{prestasi}', 'edit')->name('prestasi.edit');
        Route::post('/editDataPrestasi/{prestasi}/update', 'update')->name('prestasi.update');
        Route::get('/dataPrestasi/destroy/{prestasi}', 'destroy')->name('prestasi.destroy');
    });

    Route::controller(RaporController::class)->group(function () {
        Route::get('/cetakRapor', 'raporPrint')->name('rapor.kelas');
        Route::get('/cetakRapor/detailRapor/{kelas}', 'raporDetail')->name('rapor.kelas.detail');
        Route::get('/cetakRapor/kelas/{kelas}', 'raporPrintKelas')->name('rapor.print.kelas');
        Route::get('/cetakRapor/siswa/{siswa}', 'raporPrintSiswa')->name('rapor.print.siswa');
        Route::get('/nilaiAkhirADM', 'nilaiAkhir')->name('nilai.akhir');
        Route::get('/detailNilaiAkhir/{kelas}', 'detailNilaiAkhir')->name('detail.nilai.akhir');
    });
});