<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Mapel;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mapels = Mapel::orderBy('nama')->paginate(15);

        if (request()->cari) {
            $mapels = Mapel::orderBy('nama')
                ->where('nama', 'LIKE', '%' . request()->cari . '%')
                ->paginate(15);
        }

        $teachers = Guru::join('users', 'gurus.user_id', '=', 'users.id')
            ->orderBy('users.name')
            ->get();

        $tahunAjarans = TahunAjaran::orderBy('tahun')->get();

        return view('/ADMpage/dataMapel', [
            "title" => "E-Rapor | SMK Nusantara",
            "mapels" => $mapels,
            "teachers" => $teachers,
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
        Mapel::create([
            'tahun_ajaran_id' => $request->ajaran,
            'guru_id' => $request->guru_id,
            'nama' => $request->nama,
            'singkatan' => $request->singkatan,
            'kelompok' => $request->kelompok,
            'kkm_c3' => $request->kkmc3,
            'kkm_c4' => $request->kkmc4,
        ]);

        return redirect()->route('mapel.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mapel $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mapel $mapel)
    {
        $teachers = Guru::join('users', 'gurus.user_id', '=', 'users.id')
            ->orderBy('users.name')
            ->select('gurus.*')
            ->get();

        $tahunAjarans = TahunAjaran::orderBy('tahun')->get();

        return view('/ADMpage/editDataMapel', [
            "title" => "E-Rapor | SMK Nusantara",
            "mapel" => $mapel,
            "teachers" => $teachers,
            "tahunAjarans" => $tahunAjarans,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mapel $mapel)
    {
        $mapel->update([
            'tahun_ajaran_id' => $request->ajaran,
            'guru_id' => $request->guru_id,
            'nama' => $request->nama,
            'singkatan' => $request->singkatan,
            'kelompok' => $request->kelompok,
            'kkm_c3' => $request->kkmc3,
            'kkm_c4' => $request->kkmc4,
        ]);

        return redirect()->route('mapel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mapel $mapel)
    {
        $mapel->delete();

        return redirect()->route('mapel.index');
    }
}
