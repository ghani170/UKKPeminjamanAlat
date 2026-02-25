<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tool;
use Illuminate\Http\Request;

class AlatController extends Controller
{
    public function index(){
        $alat = Tool::all();
        $kategori = Category::all();
        return view('admin.alat.index', compact('alat', 'kategori'));
    }

    public function create(){
        $kategori = Category::all();
        return view('admin.alat.create', compact('kategori'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'nama_alat' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'jumlah_stok' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        Tool::create([
            'nama_alat' => $data['nama_alat'],
            'deskripsi' => $data['deskripsi'],
            'jumlah_stok' => $data['jumlah_stok'],
            'category_id' => $data['category_id'],
        ]);

        return redirect()->route('admin.alat.index')->with('success', 'data alat berhasil ditambah');

    }

    public function edit($id){
        $alat = Tool::findOrFail($id);
        $kategori = Category::all();
        return view('admin.alat.edit', compact('alat', 'kategori'));
    }

    public function update(Request $request, $id){
        $alat = Tool::findOrFail($id);

        $data = $request->validate([
            'nama_alat' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'jumlah_stok' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        $data = [
            'nama_alat' => $data['nama_alat'],
            'deskripsi' => $data['deskripsi'],
            'jumlah_stok' => $data['jumlah_stok'],
            'category_id' => $data['category_id'],
        ];

        $alat->update($data);

        return redirect()->route('admin.alat.index')->with('success', 'data alat berhasil diedit');
    }

    public function destroy(String $id){
        $alat = Tool::findOrFail($id);
        $alat->delete();
        return redirect()->route('admin.alat.index')->with('success', 'data alat berhasil dihapus');
    }
}
