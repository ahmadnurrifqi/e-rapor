<?php

use App\Http\Controllers\NilaiEkskulController;
use App\Http\Controllers\NilaiPelajaranController;
use App\Http\Controllers\RaporController;
use Illuminate\Support\Facades\Route;

// User Routes
Route::middleware(['auth', 'role:guru'])->group(function () {
    Route::get('USRdashboard', function () {
        return view('/USRpage/USRdashboard',["title" => "E-Rapor | SMK Nusantara"]);
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

    Route::controller(NilaiEkskulController::class)->group(function () {
        Route::get('/nilaiEkskul', 'index')->name('ekskul.index');
    });
});