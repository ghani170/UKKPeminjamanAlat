<?php

namespace App\Http\Controllers\Peminjam;

use App\Http\Controllers\Controller;
use App\Models\Borrowing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlatDipinjamController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $peminjaman = Borrowing::where('user_id', $user->id)->get();
        return view('peminjam.alat.dipinjam', compact('peminjaman'));
    }

    public function show(string $id)
    {
        $peminjaman = Borrowing::where('id', $id)
            ->where('user_id', Auth::id())
            ->with('loanDetail.tool')
            ->firstOrFail();

        return view('peminjam.alat.detail', compact('peminjaman'));
    }
}
