<?php

namespace App\Http\Controllers\Peminjam;

use App\Http\Controllers\Controller;
use App\Models\Borrowing;
use App\Models\LoanDetail;
use App\Models\Tool;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamAlatController extends Controller
{
    public function index()
    {
        $alat = Tool::all();
        return view('peminjam.alat.index', compact('alat'));
    }

    public function create($id)
    {
        $alat = Tool::findOrFail($id);
        return view('peminjam.alat.peminjaman', compact('alat'));
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'tool_id' => 'required|exists:tools,id',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date|after:tgl_pinjam',
            'jumlah_pinjam' => 'required|integer|min:1',
        ]);

        try {
            DB::beginTransaction();

            $alat = Tool::findOrFail($request->tool_id);

            
            if ($alat->jumlah_stok < $request->jumlah_pinjam) {
                return back()->with('error', 'Stok tidak mencukupi untuk jumlah yang diminta.');
            }

            
            $borrowing = Borrowing::create([
                'user_id' => Auth::id(),
                'tanggal_pinjam' => $request->tanggal_pinjam,
                'tanggal_kembali' => $request->tanggal_kembali,
                'status' => 'dipinjam',
                'persetujuan' => 'pending',
            ]);

           
            LoanDetail::create([
                'borrowing_id' => $borrowing->id,
                'tool_id' => $request->tool_id,
                'jumlah' => $request->jumlah_pinjam,
            ]);

            
            $alat->decrement('jumlah_stok', $request->jumlah_pinjam);

            DB::commit();
            return redirect()->back()->with('success', 'Peminjaman ' . $request->jumlah_pinjam . ' item berhasil!');

        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Gagal memproses peminjaman: ' . $e->getMessage());
        }
    }


}
