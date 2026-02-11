<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            $user = Auth::user();

            if ($user->role === 'admin'){
                return redirect()->route('admin.dashboard');
            }elseif ($user->role === 'petugas'){
                return redirect()->route('petugas.dashboard');
            }elseif ($user->role === 'peminjam'){
                return redirect()->route('peminjam.dashboard');
            }else {
                Auth::logout();
                return redirect()->route('login')->withErrors('Role pengguna tidak dikenali.');
            }
        }
        return back()->withErrors(['email' => 'email atau password salah.'])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Berhasil Logout');
    }
}
