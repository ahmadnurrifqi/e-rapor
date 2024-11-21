<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gurus = Guru::join('users', 'gurus.user_id', '=', 'users.id')
            ->orderBy('users.name')
            ->paginate(15);

        return view('/ADMpage/dataGuru',[
            "title" => "E-Rapor | SMK Nusantara", 
            "gurus" => $gurus
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
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        Guru::create([
            "user_id" => $user->id,
            "nik" => $request->nik,
            "nuptk" => $request->nuptk,
            "npy" => $request->npy,
            "tempat_lahir" => $request->tempat_lahir,
            "tanggal_lahir" => $request->tanggal_lahir,
            "jenis_kelamin" => $request->jenis_kelamin,
            "agama" => $request->agama,
            "studi_terakhir" => $request->studi_terakhir,
            "tahun_gabung" => $request->tahun_gabung,
            "alamat" => $request->alamat,
            "no_telp" => $request->no_telp,
        ]);

        return redirect()->route('guru.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guru $guru)
    {
        return view('/ADMpage/editDataGuru', [
            "title" => "E-Rapor | SMK Nusantara",
            "guru" => $guru,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guru $guru)
    {
        $guru->user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $guru->update([
            "nik" => $request->nik,
            "nuptk" => $request->nuptk,
            "npy" => $request->npy,
            "tempat_lahir" => $request->tempat_lahir,
            "tanggal_lahir" => $request->tanggal_lahir,
            "jenis_kelamin" => $request->jenis_kelamin,
            "agama" => $request->agama,
            "studi_terakhir" => $request->studi_terakhir,
            "tahun_gabung" => $request->tahun_gabung,
            "alamat" => $request->alamat,
            "no_telp" => $request->no_telp,
        ]);

        if ($request->password) {
            $guru->user->update([
                'password' => $request->password,
            ]);
        }

        return redirect()->route('guru.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guru $guru)
    {
        User::where('id', $guru->user_id)->delete();
        $guru->delete();

        return redirect()->route('guru.index');
    }
}
