<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Rapor;
use App\Models\Siswa;
use App\Models\KelasAjaran;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Spatie\LaravelPdf\Facades\Pdf;

class RaporController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tahunAjaran = TahunAjaran::where('is_active', true)->first();

        $kelas = Kelas::where('guru_id', auth()->user()->guru->id)
            ->where('tahun_ajaran_id', $tahunAjaran->id)
            ->with([
                'siswa' => function ($q) {
                    $q->orderBy('nama');
                }
            ])
            ->first();

        if (!$kelas) {
            abort(404);
        }

        $kelasAjarans = KelasAjaran::where('kelas_id', $kelas->id)->get();

        return view('/USRpage/nilaiAkhir', [
            "title" => "E-Rapor | SMK Nusantara",
            'tahunAjaran' => $tahunAjaran,
            'kelas' => $kelas,
            'kelasAjarans' => $kelasAjarans,
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
    public function show(Rapor $rapor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rapor $rapor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rapor $rapor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rapor $rapor)
    {
        //
    }

    public function raporEdit()
    {
        $tahunAjaran = TahunAjaran::where('is_active', true)->first();

        $kelas = Kelas::where('guru_id', auth()->user()->guru->id)
            ->where('tahun_ajaran_id', $tahunAjaran->id)
            ->first();

        $siswas = [];

        if ($kelas) {
            $siswas = Siswa::where('kelas_id', $kelas->id)
                ->orderBy('nama')
                ->with([
                    'rapor' => function ($q) use ($tahunAjaran) {
                        $q->where('tahun_ajaran_id', $tahunAjaran->id)->get();
                    }
                ])
                ->paginate(15);
        }

        return view('//USRpage//' . request()->path(), [
            "title" => "E-Rapor | SMK Nusantara",
            "tahunAjaran" => $tahunAjaran,
            "kelas" => $kelas,
            "siswas" => $siswas,
        ]);
    }

    public function raporUpdate(Request $request, Kelas $kelas)
    {
        $path = request()->segment(1);

        foreach ($request->siswaId as $i => $siswaId) {
            $rapor = Rapor::where('siswa_id', $siswaId)
                ->where('tahun_ajaran_id', $kelas->tahun_ajaran_id)
                ->first();

            if (!$rapor) {
                $rapor = Rapor::create([
                    'siswa_id' => $siswaId,
                    'tahun_ajaran_id' => $kelas->tahun_ajaran_id,
                ]);
            }

            switch ($path) {
                case 'spiritual':
                    $rapor->update([
                        'sikap_spiritual' => $request->spiritual[$i],
                    ]);
                    break;
                case 'catatan':
                    $rapor->update([
                        'catatan_wali_kelas' => $request->catatan[$i],
                    ]);
                    break;
                case 'kehadiran':
                    $rapor->update([
                        'sakit' => $request->sakit[$i],
                        'izin' => $request->izin[$i],
                        'tanpa_keterangan' => $request->tanpa_keterangan[$i],
                    ]);
                    break;
            }
        }

        return redirect()->route($path . '.edit');
    }

    public function raporPrint()
    {
        $kelases = Kelas::orderBy('nama_kelas')->paginate(15);
        
        if (request()->get('cari')) {
            $kelases = Kelas::orderBy('nama_kelas')
                ->where('tingkat_kelas', 'LIKE', '%' . request()->cari . '%')
                ->orWhere('nama_kelas', 'LIKE', '%' . request()->cari . '%')
                ->paginate(15);
        }

        return view('/ADMpage/cetakRapor', [
            "title" => "E-Rapor | SMK Nusantara",
            "kelases" => $kelases,
        ]);
    }

    public function raporDetail(Kelas $kelas)
    {
        $siswas = Siswa::where('kelas_id', $kelas->id)->paginate(15);

        return view('/ADMpage/detailRapor', [
            "title" => "E-Rapor | SMK Nusantara",
            "kelas" => $kelas,
            "siswas" => $siswas,
        ]);
    }

    public function raporPrintKelas(Kelas $kelas)
    {
        Pdf::view('export.rapor-kelas', [
            'kelas' => $kelas,
        ])
            ->format('a4')
            ->save('rapor.pdf');

        return redirect('/rapor.pdf');
    }

    public function raporPrintSiswa(Siswa $siswa)
    {
        Pdf::view('export.rapor-siswa', [
            'siswa' => $siswa,
        ])
            ->format('a4')
            ->save('rapor.pdf');

        return redirect('/rapor.pdf');
    }

    public function nilaiAkhir()
    {
        $classes = Kelas::orderBy('nama_kelas')->paginate(15);

        if (request()->get('cari')) {
            $classes = Kelas::orderBy('nama_kelas')
                ->where('tingkat_kelas', 'LIKE', '%' . request()->cari . '%')
                ->orWhere('nama_kelas', 'LIKE', '%' . request()->cari . '%')
                ->paginate(15);
        }

        return view('ADMpage.nilaiAkhir', [
            "title" => "E-Rapor | SMK Nusantara",
            'classes' => $classes,
        ]);
    }

    public function detailNilaiAkhir(Kelas $kelas)
    {
        $kelasAjarans = KelasAjaran::where('kelas_id', $kelas->id)->get();

        return view('ADMpage.detailNilaiAkhir', [
            "title" => "E-Rapor | SMK Nusantara",
            'kelas' => $kelas,
            'kelasAjarans' => $kelasAjarans,
        ]);
    }
}
