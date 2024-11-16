<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function login(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if ($request->captha === $request->capthaKey) {
            if (Auth::Attempt($data, true)) {
                session()->flash('success', 'Berhasil login');
    
                return redirect('ADMdashboard');
            } else {
                return redirect('/')->with('error', 'Email atau password anda salah!');
            }
        }

        return redirect('/')->with('error', 'Harap ulangi captha!');
    }
}
