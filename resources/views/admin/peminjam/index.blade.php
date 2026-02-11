@extends('layout.app')
@section('title', 'Create Peminjaman')
@section('content')
    <div class="flex-1 overflow-y-auto p-8">
        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="px-8 py-6 border-b border-slate-100 flex items-center justify-between">
                <h3 class="font-bold text-slate-900 text-lg">Peminjam</h3>
                <a href="{{ route('admin.peminjam.create') }}"
                    class="px-5 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition duration-150 shadow-md">Create
                    Peminjam</a>
            </div>
            <div class="px-8 mt-6">
                {{-- Alert Success --}}
                @if (session('success'))
                    <div id="alert-success"
                        class="group flex items-center p-4 mb-4 text-emerald-800 border border-emerald-100 rounded-2xl bg-emerald-50/50 backdrop-blur-sm shadow-sm transition-all duration-300 hover:shadow-md"
                        role="alert">
                        <div class="flex-shrink-0 p-2 bg-emerald-100 rounded-xl text-emerald-600">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-4 text-sm font-semibold tracking-wide">
                            {{ session('success') }}
                        </div>
                        <button type="button" onclick="document.getElementById('alert-success').remove()"
                            class="ml-auto -mx-1.5 -my-1.5 bg-emerald-50 text-emerald-500 rounded-lg focus:ring-2 focus:ring-emerald-400 p-1.5 hover:bg-emerald-200 inline-flex items-center justify-center h-8 w-8 transition-colors"
                            data-dismiss-target="#alert-success" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif

                {{-- Alert Error --}}
                @if (session('error'))
                    <div id="alert-error"
                        class="group flex items-center p-4 mb-4 text-rose-800 border border-rose-100 rounded-2xl bg-rose-50/50 backdrop-blur-sm shadow-sm transition-all duration-300 hover:shadow-md"
                        role="alert">
                        <div class="flex-shrink-0 p-2 bg-rose-100 rounded-xl text-rose-600">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                            </svg>
                        </div>
                        <div class="ml-4 text-sm font-semibold tracking-wide">
                            {{ session('error') }}
                        </div>
                        <button type="button" onclick="document.getElementById('alert-error').remove()"
                            class="ml-auto -mx-1.5 -my-1.5 bg-rose-50 text-rose-500 rounded-lg focus:ring-2 focus:ring-rose-400 p-1.5 hover:bg-rose-200 inline-flex items-center justify-center h-8 w-8 transition-colors"
                            data-dismiss-target="#alert-error" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif
            </div>
            <div class="overflow-x-auto">

                <table class="w-full text-left">
                    <thead class="bg-slate-50 text-slate-500 text-xs uppercase font-bold">
                        <tr>
                            <th class="px-8 py-4 text-center">Name</th>
                            <th class="px-8 py-4 text-center">Email</th>
                            <th class="px-8 py-4 text-center">Created At</th>
                            <th class="px-4 py-3 text-center">Action</th>

                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse ($peminjam as $p)
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-8 py-5 text-center">
                                    <span class="font-medium text-slate-900 text-sm">{{ $p->name }}</span>
                                </td>
                                <td class="px-8 py-5 text-center">
                                    <span class="font-medium text-slate-900 text-sm">{{ $p->email }}</span>
                                </td>
                                <td class="px-8 py-5 text-center">
                                    <span
                                        class="font-medium text-slate-900 text-sm">{{ $p->created_at->format('d M Y') }}</span>
                                </td>
                                <td class="px-8 py-5 text-sm text-slate-500">
                                    <div class="flex justify-center items-center gap-2">
                                        <a href="{{ route('admin.peminjam.edit', $p->id) }}"
                                            class="px-3 py-1 bg-yellow-400 hover:bg-yellow-500 text-white rounded-md text-sm font-medium transition">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.peminjam.destroy', $p->id) }}" method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus?')" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="px-3 py-1 bg-red-500 hover:bg-red-600 text-white rounded-md text-sm font-medium transition cursor-pointer">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            {{-- Tampilan saat data kosong --}}
                            <tr>
                                <td colspan="4" class="px-8 py-12 text-center">
                                    <div class="flex flex-col items-center justify-center">
                                        <div class="p-3 bg-slate-100 rounded-full mb-4">
                                            <svg class="w-8 h-8 text-slate-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                            </svg>
                                        </div>
                                        <p class="text-slate-500 font-medium">Belum ada data peminjam.</p>
                                        <p class="text-slate-400 text-xs mt-1">Silakan klik tombol "Create Peminjam" untuk
                                            menambah data baru.</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection