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
    
                if (auth()->user()->hasRole('admin')) {
                    return redirect('ADMdashboard');
                }
                return redirect('USRdashboard');
            } else {
                return redirect('/')->with('error', 'Email atau password anda salah!');
            }
        }

        return redirect('/')->with('error', 'Harap ulangi captha!');
    }

    public function logout()
    {
        Auth::guard('web')->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
