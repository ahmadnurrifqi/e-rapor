<?php

use App\Http\Controllers\EkstrakurikularController;
use App\Http\Controllers\NilaiPelajaranController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\RaporController;
use Illuminate\Support\Facades\Route;

// User Routes
Route::middleware(['auth', 'role:guru'])->group(function () {
    Route::get('USRdashboard', function () {
        return view('/USRpage/USRdashboard',["title" => "E-Rapor | SMK Nusantara"]);
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
    
    Route::controller(NilaiPelajaranController::class)->group(function () {
        Route::get('/nilaiPelajaran', 'index')->name('nilai.pelajaran.index');
        Route::get('/detailPelajaran/{kelasAjaran}', 'edit')->name('nilai.pelajaran.edit');
        Route::post('/detailPelajaran/{kelasAjaran}/update', 'update')->name('nilai.pelajaran.update');
    });
    
    Route::controller(RaporController::class)->group(function () {
        Route::get('/spiritual', 'raporEdit')->name('spiritual.edit');
        Route::post('/spiritual/{kelas}/update', 'raporUpdate')->name('spiritual.update');
        Route::get('/kehadiran', 'raporEdit')->name('kehadiran.edit');
        Route::post('/kehadiran/{kelas}/update', 'raporUpdate')->name('kehadiran.update');
        Route::get('/catatan', 'raporEdit')->name('catatan.edit');
        Route::post('/catatan/{kelas}/update', 'raporUpdate')->name('catatan.update');
    
        Route::get('/nilaiAkhirUSR', 'index')->name('nilai.akhir.index');
    });
});