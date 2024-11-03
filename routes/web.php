<?php

use App\Http\Controllers\GuruController;
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

Route::get('ADMdashboard', function () {
    return view('/ADMpage/ADMdashboard',["title" => "E-Rapor | SMK Nusantara"]);
});
Route::get('profil', function () {
    return view('/USRpage/profil',["title" => "E-Rapor | SMK Nusantara"]);
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
Route::get('cetakRapor', function () {
    return view('/ADMpage/cetakRapor',["title" => "E-Rapor | SMK Nusantara"]);
});

//route page tambahan
Route::get('tentang', function () {
    return view('/ADMpage/ADMtentang',["title" => "E-Rapor | SMK Nusantara"]);
});
