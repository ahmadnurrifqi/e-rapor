<?php

namespace App\Http\Controllers;

use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class TahunAjaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tahunAjarans = TahunAjaran::orderBy('tahun')->paginate(10);

        return view('/ADMpage/dataTahunAjaran',[
            "title" => "E-Rapor | SMK Nusantara",
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
        TahunAjaran::create([
            'tahun' => $request->tahun,
            'semester' => $request->semester,
            'tempat_pembagian' => $request->tempat_pembagian,
            'tanggal_pembagian' => $request->tanggal_pembagian,
        ]);

        return redirect()->route('tahun-ajaran.index');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TahunAjaran $tahunAjaran)
    {
        $tahunAjaran->delete();

        return redirect()->route('tahun-ajaran.index');
    }
}
