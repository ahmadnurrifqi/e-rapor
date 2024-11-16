<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use App\Models\Rapor;
use App\Models\Siswa;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestasis = Prestasi::join('rapors', 'prestasis.rapor_id', '=', 'rapors.id')
            ->join('siswas', 'rapors.siswa_id', '=', 'siswas.id')
            ->orderBy('siswas.nama')
            ->select('prestasis.*')
            ->paginate(10);

        $siswas = Siswa::orderBy('nama')->get();

        $tahunAjarans = TahunAjaran::orderBy('tahun')->get();

        return view('/ADMpage/dataPrestasi', [
            "title" => "E-Rapor | SMK Nusantara",
            "prestasis" => $prestasis,
            "siswas" => $siswas,
            "tahunAjarans" => $tahunAjarans,
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
        $rapor = Rapor::where('siswa_id', $request->siswa_id)
            ->where('tahun_ajaran_id', $request->tahun_ajaran_id)
            ->first();

        if (!$rapor) {
            $rapor = Rapor::create([
                'siswa_id' => $request->siswa_id,
                'tahun_ajaran_id' => $request->tahun_ajaran_id,
            ]);
        }

        Prestasi::create([
            'rapor_id' => $rapor->id,
            'uraian_prestasi' => $request->uraian_prestasi,
            'jenis_prestasi' => $request->jenis_prestasi,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('prestasi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestasi $prestasi)
    {
        $siswas = Siswa::orderBy('nama')->get();

        $tahunAjarans = TahunAjaran::orderBy('tahun')->get();

        return view('/ADMpage/editDataPrestasi', [
            "title" => "E-Rapor | SMK Nusantara",
            "prestasi" => $prestasi,
            "siswas" => $siswas,
            "tahunAjarans" => $tahunAjarans,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prestasi $prestasi)
    {
        Rapor::where('id', $prestasi->rapor_id)->update([
            'siswa_id' => $request->siswa_id,
            'tahun_ajaran_id' => $request->tahun_ajaran_id,
        ]);

        $prestasi->update([
            'uraian_prestasi' => $request->uraian_prestasi,
            'jenis_prestasi' => $request->jenis_prestasi,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('prestasi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestasi $prestasi)
    {
        $prestasi->delete();

        return redirect()->route('prestasi.index');
    }
}
