<?php

namespace App\Http\Controllers;

use App\Models\EkskulMember;
use App\Models\Ekstrakurikular;
use App\Models\NilaiPengetahuanC3;
use App\Models\PredikatEkstrakurikular;
use App\Models\Rapor;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class NilaiEkskulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ekskuls = Ekstrakurikular::where('guru_id', auth()->user()->guru->id)->get();

        return view('/USRpage/nilaiEkskul', [
            "title" => "E-Rapor | SMK Nusantara",
            "ekskuls" => $ekskuls,
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NilaiPengetahuanC3 $nilaiPengetahuanC3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ekstrakurikular $ekskul)
    {
        $ekskulMembers = EkskulMember::where('ekstrakurikular_id', $ekskul->id)->get();
        $tahun_ajaran_id = TahunAjaran::where('is_active', true)->pluck('id')->first();

        return view('/USRpage/detailEkskul', [
            "title" => "E-Rapor | SMK Nusantara",
            "ekskul" => $ekskul,
            "ekskulMembers" => $ekskulMembers,
            "tahun_ajaran_id" => $tahun_ajaran_id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ekstrakurikular $ekskul)
    {
        $tahun_ajaran_id = TahunAjaran::where('is_active', true)->pluck('id')->first();

        foreach ($request->siswaId as $i => $siswaId) {
            $rapor = Rapor::where('siswa_id', $siswaId)
                ->where('tahun_ajaran_id', $tahun_ajaran_id)
                ->first();

            if (!$rapor) {
                $rapor = Rapor::create([
                    'siswa_id' => $siswaId,
                    'tahun_ajaran_id' => $tahun_ajaran_id,
                ]);
            }

            $predikatEkskul = PredikatEkstrakurikular::where('rapor_id', $rapor->id)
                ->where('ekstrakurikular_id', $ekskul->id)
                ->first();

            if (!$predikatEkskul) {
                $predikatEkskul = PredikatEkstrakurikular::create([
                    'rapor_id' => $rapor->id,
                    'ekstrakurikular_id' => $ekskul->id,
                ]);
            }

            $predikatEkskul->update([
                'predikat' => $request->predikat[$i],
                'keterangan' => $request->keterangan[$i],
            ]);
        }

        return redirect()->route('nilai.ekskul.edit', ['ekskul' => $ekskul->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NilaiPengetahuanC3 $nilaiPengetahuanC3)
    {
        //
    }
}
