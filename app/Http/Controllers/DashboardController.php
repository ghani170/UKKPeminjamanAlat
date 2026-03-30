<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tool;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if($user->role === 'admin'){
            $totalKategori = Category::count();
            $totalPeminjam = User::where('role', 'peminjam')->count();
            $totalPetugas = User::where('role', 'petugas')->count();
            $totalAlat = Tool::count();
            return view('admin.dashboard', compact('totalKategori', 'totalPeminjam', 'totalPetugas', 'totalAlat'));
        }elseif($user->role === 'peminjam'){
            return view('peminjam.dashboard');
        }elseif($user->role === 'petugas'){
            return view('petugas.dashboard');
        }else{
            abort(403, 'Role Undifined');
        }
    }
}
