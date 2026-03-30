@extends('layout.app')

@section('title', 'Edit Peminjaman')

@section('content')
<div class="flex-1 overflow-y-auto p-8">
    <form action="{{ route('admin.pengembalian.update', $pengembalian->id) }}" method="POST"
        class="bg-white shadow-xl rounded-xl p-8">
        @csrf
        @method('PUT')

        {{-- Nama User --}}
        <div class="mb-5">
            <label class="block text-sm font-medium text-gray-700 mb-2">Nama User</label>
            <input disabled type="text"
                class="w-full border border-gray-300 rounded-lg px-4 py-2.5"
                value="{{ $pengembalian->user->name ?? '-' }}">
        </div>

        {{-- Nama Alat --}}
        <div class="mb-5">
            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Alat</label>
            <input disabled type="text"
                class="w-full border border-gray-300 rounded-lg px-4 py-2.5"
                value="{{ $pengembalian->loanDetail->tool->nama_alat ?? '-' }}">
        </div>

        {{-- Pilih Alat (FIX: harus pakai select, bukan option doang) --}}
        <!-- <div class="mb-5">
            <label class="block text-sm font-medium text-gray-700 mb-2">Pilih Alat</label>
            <select name="tool_id"
                class="w-full border border-gray-300 rounded-lg px-4 py-2.5">
                <option value="">-- Select Alat --</option>
                @forelse ($alat as $a)
                    <option value="{{ $a->id }}"
                        {{ $a->id == ($peminjaman->loanDetail->tool_id ?? '') ? 'selected' : '' }}>
                        {{ $a->nama_alat }}
                    </option>
                @empty
                    <option disabled>-- Tools not available --</option>
                @endforelse
            </select>
        </div> -->

        {{-- Status --}}
        <div class="mb-5">
            <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
            <select disabled
    class="w-full border border-gray-300 rounded-lg px-4 py-2.5 bg-gray-100 pointer-events-none">
                <option value="">-- Select Status --</option>
                <option value="dipinjam"
                    {{ old('status', $pengembalian->status) == 'dipinjam' ? 'selected' : '' }}>
                    Dipinjam
                </option>
                <option value="dikembalikan"
                    {{ old('status', $pengembalian->status) == 'dikembalikan' ? 'selected' : '' }}>
                    Dikembalikan
                </option>
            </select>
        </div>

        {{-- Tanggal Kembali --}}
        <div class="mb-5">
            <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Kembali</label>
            <input type="date" name="tanggal_kembali"
                value="{{ old('tanggal_kembali', $pengembalian->tanggal_kembali) }}"
                class="w-full border border-gray-300 rounded-lg px-4 py-2.5">
        </div>

        {{-- Tombol --}}
        <div class="flex items-center gap-4 border-t pt-5 mt-5">
            <button type="submit"
                class="bg-blue-600 text-white font-semibold px-6 py-2.5 rounded-lg hover:bg-blue-700">
                Simpan
            </button>

            <a href="{{ route('admin.pengembalian.index') }}"
                class="px-6 py-2.5 border border-gray-400 rounded-lg text-gray-700 hover:bg-gray-100">
                Kembali
            </a>
        </div>
    </form>
</div>
@endsection