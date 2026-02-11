<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PeminjamController extends Controller
{
    public function index() {
        $peminjam = User::where('role', 'peminjam')->get();
        return view('admin.peminjam.index', compact('peminjam'));
    }

    public function create(){
        
        return view('admin.peminjam.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|unique:users,password',
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'peminjam',
        ]);

        return redirect()->route('admin.peminjam.index')->with('success', 'Peminjam berhasil ditambahkan.');
    }

    public function edit($id){
        $peminjam = User::findOrFail($id);
        return view('admin.peminjam.edit', compact('peminjam'));
    }

    public function update(Request $request, $id){
        $peminjam = User::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $peminjam->id,
            'password' => 'nullable|string|min:8|unique:users,password,' . $peminjam->id,
        ]);

        $data = [
            'name' => $data['name'],
            'email' => $data['email'],
        ];

        if ($request->password){
            $data['password'] = Hash::make($request->password);
        }

        $peminjam->update($data);

        return redirect()->route('admin.peminjam.index')->with('success', 'Peminjam berhasil diperbarui.');
    }

    public function destroy(User $peminjam){
        $peminjam->delete();
        return redirect()->route('admin.peminjam.index')->with('success', 'Peminjam berhasil dihapus');
    }
}
