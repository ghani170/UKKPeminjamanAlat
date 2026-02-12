@extends('layout.app')
@section('title', 'Create Peminjam')
@section('content')
<div class="flex-1 overflow-y-auto p-8">
<form action="{{ route('admin.kategori.store') }}" method="POST" enctype="multipart/form-data"
        class="bg-white shadow-xl rounded-xl p-8">
        @csrf

        {{-- 1. Field Title Project --}}
        <div class="mb-5">
            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Nama Kategori</label>

            <input type="text" name="nama_kategori" id="title"
                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 
                focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                value="{{ old('nama_kategori') }}" placeholder="Masukan Nama Peminjam">

            @error('nama_kategori')
            <small class="text-red-600 mt-1 block">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-5">
            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>

            <textarea name="deskripsi" id="" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 
                focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150" placeholder="Masukan deskripsi">{{ old('deskripsi') }}</textarea>

            @error('deskripsi')
            <small class="text-red-600 mt-1 block">{{ $message }}</small>
            @enderror
        </div>

        {{-- Bagian Tombol Aksi --}}
        <div class="flex items-center gap-4 border-t pt-5 mt-5">
            <button type="submit"
                class="bg-blue-600 text-white font-semibold px-6 py-2.5 rounded-lg 
                hover:bg-blue-700 transition duration-150 shadow-md">
                <i class="fa-solid fa-save mr-1"></i> Simpan Peminjam
            </button>

            <a href="{{ route('admin.kategori.index') }}"
                class="px-6 py-2.5 border border-gray-400 rounded-lg text-gray-700 
                hover:bg-gray-100 transition duration-150">
                Batal / Kembali
            </a>
        </div>

    </form>
    </div>
@endsection