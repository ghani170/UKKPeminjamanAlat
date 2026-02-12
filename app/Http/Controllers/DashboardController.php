<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if($user->role === 'admin'){
            return view('admin.dashboard');
        }elseif($user->role === 'peminjam'){
            return view('peminjam.dashboard');
        }elseif($user->role === 'petugas'){
            return view('petugas.dashboard');
        }else{
            abort(403, 'Role Undifined');
        }
    }
}
