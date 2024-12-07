<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::orderBy('nama')->paginate(15);

        if (request()->cari) {
            $siswas = Siswa::orderBy('nama')
                ->where('nama', 'LIKE', '%' . request()->cari . '%')
                ->paginate(15);
        }

        return view('/ADMpage/dataSiswa', [
            "title" => "E-Rapor | SMK Nusantara",
            "siswas" => $siswas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Siswa::create([
            "nama" => $request->nama,
            "nis" => $request->nis,
            "nisn" => $request->nisn,
            "tempat_lahir" => $request->tempat_lahir,
            "tanggal_lahir" => $request->tanggal_lahir,
            "jenis_kelamin" => $request->jenis_kelamin,
            "agama" => $request->agama,
            "alamat" => $request->alamat,
            "no_telp" => $request->no_telp,
            "konsentrasi_keahlian" => $request->konsentrasi_keahlian,
        ]);

        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        return view('/ADMpage/editDataSiswa', [
            "title" => "E-Rapor | SMK Nusantara",
            "siswa" => $siswa,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $siswa->update([
            "nama" => $request->nama,
            "nis" => $request->nis,
            "nisn" => $request->nisn,
            "tempat_lahir" => $request->tempat_lahir,
            "tanggal_lahir" => $request->tanggal_lahir,
            "jenis_kelamin" => $request->jenis_kelamin,
            "agama" => $request->agama,
            "alamat" => $request->alamat,
            "no_telp" => $request->no_telp,
            "konsentrasi_keahlian" => $request->konsentrasi_keahlian,
        ]);

        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect()->route('siswa.index');
    }
}
