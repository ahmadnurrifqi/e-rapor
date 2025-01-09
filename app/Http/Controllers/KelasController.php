<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\KelasAjaran;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = Kelas::orderBy('nama_kelas')->paginate(15);

        if (request()->cari) {
            $classes = Kelas::orderBy('nama_kelas')
                ->where('nama_kelas', 'LIKE', '%' . request()->cari . '%')
                ->paginate(15);
        }

        $teachers = Guru::join('users', 'gurus.user_id', '=', 'users.id')
            ->orderBy('users.name')
            ->get();

        $tahunAjarans = TahunAjaran::orderBy('tahun')->get();

        return view('/ADMpage/dataKelas', [
            "title" => "E-Rapor | SMK Nusantara",
            "classes" => $classes,
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
        Kelas::create([
            'guru_id' => $request->guru_id,
            'tahun_ajaran_id' => $request->tahun_ajaran_id,
            'nama_kelas' => $request->nama_kelas,
            'tingkat_kelas' => $request->tingkat_kelas,
        ]);

        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kelas)
    {
        $teachers = Guru::join('users', 'gurus.user_id', '=', 'users.id')
            ->orderBy('users.name')
            ->select('gurus.*')
            ->get();

        $tahunAjarans = TahunAjaran::orderBy('tahun')->get();

        $daftarSiswas = Siswa::where('kelas_id', $kelas->id)->get();
        $tambahSiswas = Siswa::where('kelas_id', null)->get();

        $daftarMapels = KelasAjaran::where('kelas_id', $kelas->id)->get();
        $tambahMapels = Mapel::whereDoesntHave('kelasAjaran', function ($q) use ($kelas) {
            $q->where('kelas_id', $kelas->id);
        })->get();

        if (request()->get('listSiswa')) {
            $daftarSiswas = Siswa::where('kelas_id', $kelas->id)
                ->where('nama', 'LIKE', '%' . request()->get('listSiswa') . '%')
                ->get();
        }
        if (request()->get('unlistedSiswa')) {
            $tambahSiswas = Siswa::where('kelas_id', null)
                ->where('nama', 'LIKE', '%' . request()->get('unlistedSiswa') . '%')
                ->get();
        }

        if (request()->get('listMapel')) {
            $daftarMapels = KelasAjaran::where('kelas_id', $kelas->id)
                ->whereHas('mapel', function ($q) {
                    $q->where('nama', 'LIKE', '%' . request()->get('listMapel') . '%');
                })
                ->get();
        }
        if (request()->get('unlistedMapel')) {
            $tambahMapels = Mapel::where('nama', 'LIKE', '%' . request()->get('unlistedMapel') . '%')
                ->whereDoesntHave('kelasAjaran', function ($q) use ($kelas) {
                    $q->where('kelas_id', $kelas->id);
                })->get();
        }

        return view('/ADMpage/editDataKelas', [
            "title" => "E-Rapor | SMK Nusantara",
            "class" => $kelas,
            "teachers" => $teachers,
            "tahunAjarans" => $tahunAjarans,
            "daftarSiswas" => $daftarSiswas,
            "tambahSiswas" => $tambahSiswas,
            "daftarMapels" => $daftarMapels,
            "tambahMapels" => $tambahMapels,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelas $kelas)
    {
        $kelas->update([
            'guru_id' => $request->guru_id,
            'tahun_ajaran_id' => $request->tahun_ajaran_id,
            'nama_kelas' => $request->nama_kelas,
            'tingkat_kelas' => $request->tingkat_kelas,
        ]);

        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kelas)
    {
        $kelas->delete();

        return redirect()->route('kelas.edit');
    }

    public function addSiswa(Kelas $kelas, Siswa $siswa)
    {
        $siswa->update([
            'kelas_id' => $kelas->id,
        ]);

        return redirect()->route('kelas.edit', ['kelas' => $kelas->id]);
    }

    public function deleteSiswa(Kelas $kelas, Siswa $siswa)
    {
        $siswa->update([
            'kelas_id' => null,
        ]);

        return redirect()->route('kelas.edit', ['kelas' => $kelas->id]);
    }

    public function addMapel(Kelas $kelas, Mapel $mapel)
    {
        $isExist = KelasAjaran::where('mapel_id', $mapel->id)->where('kelas_id', $kelas->id)->exists();

        if (!$isExist) {
            KelasAjaran::create([
                'mapel_id' => $mapel->id,
                'kelas_id' => $kelas->id,
            ]);
        }

        return redirect()->route('kelas.edit', ['kelas' => $kelas->id]);
    }

    public function deleteMapel(Kelas $kelas, KelasAjaran $kelasAjaran)
    {
        $kelasAjaran->delete();

        return redirect()->route('kelas.edit', ['kelas' => $kelas->id]);
    }
}
