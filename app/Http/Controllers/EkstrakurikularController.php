<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikular;
use App\Models\Guru;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class EkstrakurikularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ekskuls = Ekstrakurikular::orderBy('nama')->paginate(15);

        if (request()->cari) {
            $ekskuls = Ekstrakurikular::orderBy('nama')
                ->where('nama', 'LIKE', '%' . request()->cari . '%')
                ->paginate(15);
        }

        $teachers = Guru::join('users', 'gurus.user_id', '=', 'users.id')
            ->orderBy('users.name')
            ->get();

        $tahunAjarans = TahunAjaran::orderBy('tahun')->get();

        return view('/ADMpage/dataEkstrakurikuler', [
            "title" => "E-Rapor | SMK Nusantara",
            "ekskuls" => $ekskuls,
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
        Ekstrakurikular::create([
            'guru_id' => $request->guru_id,
            'tahun_ajaran_id' => $request->tahun_ajaran_id,
            'nama' => $request->nama,
        ]);

        return redirect()->route('ekskul.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ekstrakurikular $ekstrakurikular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ekstrakurikular $ekskul)
    {
        $teachers = Guru::join('users', 'gurus.user_id', '=', 'users.id')
            ->orderBy('users.name')
            ->get();

        $tahunAjarans = TahunAjaran::orderBy('tahun')->get();

        return view('/ADMpage/editDataEkstrakurikuler', [
            "title" => "E-Rapor | SMK Nusantara",
            "ekskul" => $ekskul,
            "teachers" => $teachers,
            "tahunAjarans" => $tahunAjarans,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ekstrakurikular $ekskul)
    {
        $ekskul->update([
            'guru_id' => $request->guru_id,
            'tahun_ajaran_id' => $request->tahun_ajaran_id,
            'nama' => $request->nama,
        ]);

        return redirect()->route('ekskul.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ekstrakurikular $ekskul)
    {
        $ekskul->delete();

        return redirect()->route('ekskul.index');
    }
}
