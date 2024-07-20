<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function register(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        //Simpan data pengguna
        $user = DB::table('users')->insert([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan masuk.');
        } else {
            return redirect()->back()->with('error', 'Registrasi gagal. Silakan coba lagi.');
        }
    }
}

