<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginProcess(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login gagal');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Bisa menggunakan $request atau seperti ini:
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
