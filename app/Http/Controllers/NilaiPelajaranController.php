<?php

namespace App\Http\Controllers;

use App\Models\KelasAjaran;
use App\Models\Mapel;
use App\Models\MapelRapor;
use App\Models\NilaiKeterampilanC4;
use App\Models\NilaiPengetahuanC3;
use App\Models\Rapor;
use App\Models\Siswa;
use Illuminate\Http\Request;

class NilaiPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelasAjarans = KelasAjaran::whereHas('mapel', function ($q) {
            $q->where('guru_id', auth()->user()->guru->id);
        })->get();

        return view('/USRpage/nilaiPelajaran', [
            "title" => "E-Rapor | SMK Nusantara",
            "kelasAjarans" => $kelasAjarans,
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
    public function show(NilaiKeterampilanC4 $nilaiKeterampilanC4)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KelasAjaran $kelasAjaran)
    {
        $siswas = Siswa::where('kelas_id', $kelasAjaran->kelas->id)
            ->with(['rapor' => function ($q) use ($kelasAjaran) {
                $q->where('tahun_ajaran_id', $kelasAjaran->kelas->tahun_ajaran_id);
            }])
            ->get();

        return view('/USRpage/detailPelajaran', [
            "title" => "E-Rapor | SMK Nusantara",
            "kelasAjaran" => $kelasAjaran,
            "siswas" => $siswas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KelasAjaran $kelasAjaran)
    {
        foreach ($kelasAjaran->kelas->siswa as $i => $siswa) {
            $rapor = Rapor::where('siswa_id', $siswa->id)
                ->where('tahun_ajaran_id', $kelasAjaran->kelas->tahun_ajaran_id)
                ->first();

            if (!$rapor) {
                $rapor = Rapor::create([
                    'siswa_id' => $siswa->id,
                    'tahun_ajaran_id' => $kelasAjaran->kelas->tahun_ajaran_id,
                ]);
            }

            $mapelRapor = MapelRapor::where('rapor_id', $rapor->id)
                ->where('mapel_id', $kelasAjaran->mapel->id)
                ->first();

            if (!$mapelRapor) {
                $mapelRapor = MapelRapor::create([
                    'rapor_id' => $rapor->id,
                    'mapel_id' => $kelasAjaran->mapel->id,
                ]);
            }

            $nilaiPengetahuanC3 = NilaiPengetahuanC3::where('id', $mapelRapor->nilai_pengetahuan_c3_s_id)->first();
            if ($nilaiPengetahuanC3) {
                // dd($nilaiPengetahuanC3, $request->all());
                $nilaiPengetahuanC3->update([
                    'nilai' => $request->pengetahuanC3[$i],
                    'predikat' => $request->predikatC3[$i],
                    'deskripsi' => $request->deskripsiC3[$i],
                ]);
            } else {
                $nilaiC3 = NilaiPengetahuanC3::create([
                    'nilai' => $request->pengetahuanC3[$i],
                    'predikat' => $request->predikatC3[$i],
                    'deskripsi' => $request->deskripsiC3[$i],
                ]);

                $mapelRapor->update([
                    'nilai_pengetahuan_c3_s_id' => $nilaiC3->id,
                ]);
            }

            $nilaiKeterampilanC4 = NilaiKeterampilanC4::where('id', $mapelRapor->nilai_keterampilan_c4_s_id )->first();
            if ($nilaiKeterampilanC4) {
                $nilaiKeterampilanC4->update([
                    'nilai' => $request->keterampilanC4[$i],
                    'predikat' => $request->predikatC4[$i],
                    'deskripsi' => $request->deskripsiC4[$i],
                ]);
            } else {
                $nilaiC3 = NilaiKeterampilanC4::create([
                    'nilai' => $request->keterampilanC4[$i],
                    'predikat' => $request->predikatC4[$i],
                    'deskripsi' => $request->deskripsiC4[$i],
                ]);

                $mapelRapor->update([
                    'nilai_keterampilan_c4_s_id' => $nilaiC3->id,
                ]);
            }
        }

        return redirect()->route('nilai.pelajaran.edit', ['kelasAjaran' => $kelasAjaran->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NilaiKeterampilanC4 $nilaiKeterampilanC4)
    {
        //
    }
}
