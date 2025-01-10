<?php

namespace App\Http\Controllers;

use App\Models\EkskulMember;
use App\Models\Ekstrakurikular;
use App\Models\Guru;
use App\Models\Siswa;
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
            ->select('gurus.*')
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

        return redirect()->route('admin.ekskul.index');
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
            ->select('gurus.*')
            ->get();

        $tahunAjarans = TahunAjaran::orderBy('tahun')->get();

        $ekskulMembers = EkskulMember::where('ekstrakurikular_id', $ekskul->id)->get();
        $tambahSiswas = Siswa::orderBy('nama')
            ->whereDoesntHave('ekskulMember', function ($q) use ($ekskul) {
                $q->where('ekstrakurikular_id', $ekskul->id);
            })->get();

        if (request()->get('listSiswa')) {
            $ekskulMembers = EkskulMember::where('ekstrakurikular_id', $ekskul->id)
                ->whereHas('siswa', function ($q) {
                    $q->where('nama', 'LIKE', '%' . request()->get('listSiswa') . '%');
                })
                ->get();
        }
        if (request()->get('unlistedSiswa')) {
            $tambahSiswas = Siswa::orderBy('nama')
                ->whereDoesntHave('ekskulMember', function ($q) use ($ekskul) {
                    $q->where('ekstrakurikular_id', $ekskul->id);
                })
                ->where('nama', 'LIKE', '%' . request()->get('unlistedSiswa') . '%')
                ->get();
        }

        return view('/ADMpage/editDataEkstrakurikuler', [
            "title" => "E-Rapor | SMK Nusantara",
            "ekskul" => $ekskul,
            "teachers" => $teachers,
            "tahunAjarans" => $tahunAjarans,
            "ekskulMembers" => $ekskulMembers,
            "tambahSiswas" => $tambahSiswas,
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

        return redirect()->route('admin.ekskul.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ekstrakurikular $ekskul)
    {
        $ekskul->delete();

        return redirect()->route('admin.ekskul.index');
    }

    public function addSiswa(Ekstrakurikular $ekskul, Siswa $siswa)
    {
        EkskulMember::create([
            'ekstrakurikular_id' => $ekskul->id,
            'siswa_id' => $siswa->id,
        ]);

        return redirect()->route('ekskul.edit', ['ekskul' => $ekskul->id]);
    }

    public function deleteSiswa(Ekstrakurikular $ekskul, EkskulMember $ekskulMember)
    {
        $ekskulMember->delete();

        return redirect()->route('ekskul.edit', ['ekskul' => $ekskul->id]);
    }
}
