<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index', [
            'title' => 'Login Page'
        ]);
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Mengautentikasi pengguna
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Login sukses
            return redirect()->intended('home');
        }

        // Login gagal
        return redirect()->back();
    }
}
