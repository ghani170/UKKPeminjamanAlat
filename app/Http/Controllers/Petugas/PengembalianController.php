<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Borrowing;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index(){
        $peminjaman = Borrowing::all();
        return view('petugas.pengembalian.index', compact('peminjaman'));
    }
}
