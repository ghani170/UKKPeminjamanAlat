<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Borrowing;
use App\Models\Tool;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index(){
        $peminjaman = Borrowing::with(['user', 'loanDetail.tool'])->get();
        return view('admin.peminjaman.index', compact('peminjaman'));
    }

    public function edit(Borrowing $peminjaman){
        $alat = Tool::all();
        return view('admin.peminjaman.edit', compact('alat', 'peminjaman'));
    }

    public function update(Request $request, Borrowing $peminjaman){
        $request->validate([
            'status' => 'required|in:pending,dipinjam,dikembalikan',
            'tanggal_kembali' => 'nullable|date',
        ]);

        $peminjaman->update([
            'status' => $request->input('status'),
            'tanggal_kembali' => $request->input('tanggal_kembali'),
        ]);

        return redirect()->route('admin.peminjaman.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Borrowing $peminjaman){
        $peminjaman->delete();
        return redirect()->route('admin.peminjaman.index')->with('success', 'Data berhasil dihapus');
    }

}
