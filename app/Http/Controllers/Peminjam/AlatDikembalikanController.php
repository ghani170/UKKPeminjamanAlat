<?php

namespace App\Http\Controllers\Peminjam;

use App\Http\Controllers\Controller;
use App\Models\Borrowing;
use App\Models\ReturnItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlatDikembalikanController extends Controller
{

    public function index(){
        $user = Auth::user();
        $peminjaman = Borrowing::where('user_id', $user->id)->get();
        return view('peminjam.alat.dikembalikan', compact('peminjaman'));
    }

    public function edit($id){
        $peminjaman = Borrowing::with('loanDetail.tool')->findOrFail($id);
        return view('peminjam.kembalikan', compact('peminjaman'));
    }

    public function update(Request $request, $id){
        $request->validate([
        'kondisi' => 'required|string',
        'catatan' => 'nullable|string',
    ]);

    $peminjaman = Borrowing::with('loanDetail.tool')->findOrFail($id);

    
    ReturnItem::create([
        'borrowing_id' => $peminjaman->id,
        'tanggal_kembali' => Carbon::now(),
        'kondisi' => $request->kondisi,
        'catatan' => $request->catatan,
    ]);

    $peminjaman->status = 'dikembalikan'; // <-- TAMBAHKAN INI
    $peminjaman->save();
    
    $tool = $peminjaman->loanDetail->tool;
    $tool->jumlah_stok += $peminjaman->loanDetail->jumlah;
    $tool->save();

    return redirect()->route('peminjam.dipinjam.index')
        ->with('success', 'Barang berhasil dikembalikan');
    }
}
