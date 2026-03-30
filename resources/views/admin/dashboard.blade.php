@extends('layout.app')
@section('title', 'Dashboard Admin')

@section('content')
    <div class="flex-1 overflow-y-auto p-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">
            <div class="bg-white rounded-xl shadow-md p-4">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-sm text-gray-600">Total Peminjam</p>
                        <h4 class="text-2xl font-semibold">{{ $totalPeminjam }}</h4>
                    </div>
                    <div class="bg-blue-800 text-white p-3 rounded-lg shadow">
                        <i class="fa-solid fa-folder-open px-1 py-1"></i>
                    </div>
                </div>

                <hr class="my-3">

                <p class="text-sm">
                    <span class="font-semibold text-yellow-600"><a
                            href="{{ route('admin.peminjam.index') }}">Lihat Peminjam</a></span>
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-md p-4">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-sm text-gray-600">Total Petugas</p>
                        <h4 class="text-2xl font-semibold">{{ $totalPetugas }}</h4>
                    </div>
                    <div class="bg-blue-800 text-white p-3 rounded-lg shadow">
                        <i class="fa-solid fa-folder-open px-1 py-1"></i>
                    </div>
                </div>

                <hr class="my-3">

                <p class="text-sm">
                    <span class="font-semibold text-blue-600"><a
                            href="{{ route('admin.petugas.index') }}">Lihat Petugas</a></span>
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-md p-4">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-sm text-gray-600">Total Kategori Alat</p>
                        <h4 class="text-2xl font-semibold">{{ $totalKategori }}</h4>
                    </div>
                    <div class="bg-blue-800 text-white p-3 rounded-lg shadow">
                        <i class="fa-solid fa-folder-open px-1 py-1"></i>
                    </div>
                </div>

                <hr class="my-3">

                <p class="text-sm">
                    <span class="font-semibold text-red-600"><a
                            href="{{ route('admin.kategori.index') }}">Lihat Kategori Alat</a></span>
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-md p-4">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-sm text-gray-600">Total Alat</p>
                        <h4 class="text-2xl font-semibold">{{ $totalAlat }}</h4>
                    </div>
                    <div class="bg-blue-800 text-white p-3 rounded-lg shadow">
                        <i class="fa-solid fa-folder-open px-1 py-1"></i>
                    </div>
                </div>

                <hr class="my-3">

                <p class="text-sm">
                    <span class="font-semibold text-red-600"><a
                            href="{{ route('admin.alat.index') }}">Lihat Alat</a></span>
                </p>
            </div>

        </div>
    </div>

@endsection