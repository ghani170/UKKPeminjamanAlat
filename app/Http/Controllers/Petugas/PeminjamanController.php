<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Borrowing;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjaman = Borrowing::all();
        return view('petugas.peminjaman.index', compact('peminjaman'));
    }

    public function updatePersetujuan(Request $request, Borrowing $peminjaman){
        $request->validate([
            'persetujuan' => 'required|in:pending,disetujui,ditolak',
        ]);

        $peminjaman->persetujuan = $request->persetujuan;
        $peminjaman->save();
        return redirect()->route('petugas.peminjaman.index')->with('success', 'Persetujuan berhasil diupdate');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
