@extends('layout.app')
@section('title', 'Create Petugas')
@section('content')
<div class="flex-1 overflow-y-auto p-8">
<form action="{{ route('admin.petugas.store') }}" method="POST" enctype="multipart/form-data"
        class="bg-white shadow-xl rounded-xl p-8">
        @csrf

        {{-- 1. Field Title Project --}}
        <div class="mb-5">
            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Nama Petugas</label>

            <input type="text" name="name" id="title"
                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 
                focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                value="{{ old('name') }}" placeholder="Masukan Nama Petugas">

            @error('name')
            <small class="text-red-600 mt-1 block">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-5">
            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>

            <input type="email" name="email" id="email"
                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 
                focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                value="{{ old('email') }}" placeholder="Masukan Email">

            @error('email')
            <small class="text-red-600 mt-1 block">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-5">
            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>

            <input type="password" name="password" id="password"
                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 
                focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                value="{{ old('password') }}" placeholder="Masukan Password">

            @error('password')
            <small class="text-red-600 mt-1 block">{{ $message }}</small>
            @enderror
        </div>

        {{-- Bagian Tombol Aksi --}}
        <div class="flex items-center gap-4 border-t pt-5 mt-5">
            <button type="submit"
                class="bg-blue-600 text-white font-semibold px-6 py-2.5 rounded-lg 
                hover:bg-blue-700 transition duration-150 shadow-md">
                <i class="fa-solid fa-save mr-1"></i> Simpan Petugas
            </button>

            <a href="{{ route('admin.petugas.index') }}"
                class="px-6 py-2.5 border border-gray-400 rounded-lg text-gray-700 
                hover:bg-gray-100 transition duration-150">
                Batal / Kembali
            </a>
        </div>

    </form>
    </div>
@endsection