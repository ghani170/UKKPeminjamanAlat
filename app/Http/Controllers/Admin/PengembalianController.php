<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Borrowing;
use App\Models\Tool;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index(){
        $peminjaman = Borrowing::with(['user', 'loanDetail.tool'])->get();
        return view('admin.pengembalian.index', compact('peminjaman'));
    }

    public function edit(Borrowing $pengembalian){
        $alat = Tool::all();
        return view('admin.pengembalian.edit', compact('alat', 'pengembalian'));
    }

    public function update(Request $request, Borrowing $pengembalian){
        $request->validate([
            'tanggal_kembali' => 'nullable|date',
        ]);

        $pengembalian->update([
            'tanggal_kembali' => $request->input('tanggal_kembali'),
        ]);

        return redirect()->route('admin.pengembalian.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Borrowing $pengembalian){
        $pengembalian->delete();
        return redirect()->route('admin.pengembalian.index')->with('success', 'Data berhasil dihapus');
    }
}
