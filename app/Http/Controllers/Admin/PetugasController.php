<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    public function index(){
        $petugas = User::where('role', 'petugas')->get();
        return view('admin.petugas.index', compact('petugas'));
    }

    public function create(){
        return view('admin.petugas.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:225',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|unique:users,password',
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'petugas',
        ]);

        return redirect()->route('admin.petugas.index')->with('success', 'petugas berhasil ditambahkan');
    }

    public function edit($id){
        $petugas = User::findOrFail($id);
        return view('admin.petugas.edit', compact('petugas'));
    }

    public function update(Request $request, $id){
        $petugas = User::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $petugas->id,
            'password' => 'nullable|string|min:8|unique:users,password,' . $petugas->id,
        ]);

        $data = [
            'name' => $data['name'],
            'email' => $data['email'],
        ];

        if ($request->password){
            $data['password'] = Hash::make($request->password);
        }

        $petugas->update($data);

        return redirect()->route('admin.petugas.index')->with('success', 'petugas berhasil ditambahkan');
    }

    public function destroy(String $id){
        $petugas = User::findOrFail($id);
        $petugas->delete();
        return redirect()->route('admin.petugas.index')->with('success', 'petugas berhasil dihapus');
    }

}
