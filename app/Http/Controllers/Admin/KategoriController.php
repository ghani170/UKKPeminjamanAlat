<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tool;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $kategori = Category::all();
        return view('admin.kategori.index', compact('kategori'));
    }

    public function create(){
        return view('admin.kategori.create');
    }

    public function store(Request $request, Category $kategori){
    
        $data = $request->validate([
            'nama_kategori' => 'required|string|max:255|unique:categories,nama_kategori,' . $kategori->id,
            'deskripsi' => 'required|string',
        ]);

        Category::create([
            'nama_kategori' => $data['nama_kategori'],
            'deskripsi' => $data['deskripsi'],
        ]);

        return redirect()->route('admin.kategori.index')->with('kategori berhasil ditambahkan');
    }

    public function edit($id){
        $kategori = Category::findOrFail($id);
        return view('admin.kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id){
        $kategori = Category::findOrFail($id);

        $data = $request->validate([
            'nama_kategori' => 'required|string|max:255|unique:categories,nama_kategori,' . $kategori->id,
            'deskripsi' => 'required|string',
        ]);

        $data = [
            'nama_kategori' => $data['nama_kategori'],
            'deskripsi' => $data['deskripsi'],
        ];

        $kategori->update($data);

        return redirect()->route('admin.kategori.index')->with('success', 'kategori berhasil diupdate');
    }

    public function destroy(String $id){
        $kategori = Category::findOrFail($id);
        $kategori->delete();
        return redirect()->route('admin.kategori.index')->with('success', 'kategori berhasil dihapus');
    }
}
