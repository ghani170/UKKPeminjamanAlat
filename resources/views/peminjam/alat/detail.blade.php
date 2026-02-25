@extends('layout.app')
@section('title', 'Detail Peminjaman')
@section('content')
    <div class=" bg-slate-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">

                <div class="relative px-8 py-10 bg-slate-900">
                    <div class="relative z-10">
                        <span
                            class="inline-block px-3 py-1 rounded-full bg-blue-500/10 text-blue-400 text-xs font-bold uppercase tracking-widest mb-3">
                            Detail Transaksi
                        </span>
                        <h1 class="text-3xl font-bold text-white tracking-tight">
                            {{ $peminjaman->loanDetail->tool->nama_alat }}
                        </h1>
                        
                    </div>
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 w-32 h-32 bg-blue-600/10 rounded-full blur-3xl"></div>
                </div>

                <div class="p-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                        <div class="space-y-6">
                            <div>
                                <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">Periode
                                    Pinjam</label>
                                <div class="mt-3 flex items-start gap-4">
                                    <div
                                        class="flex-shrink-0 w-10 h-10 bg-emerald-50 rounded-xl flex items-center justify-center text-emerald-600">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm text-slate-500">Tanggal Ambil</p>
                                        <p class="text-base font-semibold text-slate-900">
                                            {{ \Carbon\Carbon::parse($peminjaman->tanggal_pinjam)->format('d F Y') }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 flex items-start gap-4">
                                <div
                                    class="flex-shrink-0 w-10 h-10 bg-amber-50 rounded-xl flex items-center justify-center text-amber-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-slate-500">Estimasi Kembali</p>
                                    <p class="text-base font-semibold text-slate-900">
                                        {{ \Carbon\Carbon::parse($peminjaman->tanggal_kembali)->format('d F Y') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-6 bg-slate-50 p-6 rounded-2xl border border-slate-100">
                            <div>
                                <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">Kuantitas</label>
                                <div class="mt-2 flex items-baseline gap-2">
                                    <span class="text-4xl font-black text-slate-900">{{ $peminjaman->loanDetail->jumlah }}</span>
                                    <span class="text-slate-500 font-medium">Unit Alat</span>
                                </div>
                            </div>

                            <div class="pt-4 border-t border-slate-200">
                                <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">Status</label>
                                <div class="mt-2">
                                    <span
                                        class="inline-flex items-center px-3 py-1 rounded-lg text-sm font-semibold bg-blue-100 text-blue-700">
                                        <span class="w-2 h-2 bg-blue-500 rounded-full mr-2 animate-pulse"></span>
                                        {{ $peminjaman->status }}
                                    </span>
                                </div>
                            </div>
                            <div class="pt-4 border-t border-slate-200">
                                <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">Persetujuan</label>
                                <div class="mt-2">
                                    <span
                                        class="inline-flex items-center px-3 py-1 rounded-lg text-sm font-semibold bg-blue-100 text-blue-700">
                                        <span class="w-2 h-2 bg-blue-500 rounded-full mr-2 animate-pulse"></span>
                                        {{ $peminjaman->persetujuan }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="mt-10 pt-8 border-t border-slate-100 flex flex-col sm:flex-row gap-4">
                        <button
                            class="flex-1 bg-slate-900 hover:bg-slate-800 text-white font-bold py-3 px-6 rounded-xl transition-all shadow-lg shadow-slate-200 active:scale-[0.98]">
                            Unduh Bukti Pinjam (PDF)
                        </button>
                        <button
                            class="flex-1 bg-white hover:bg-slate-50 text-slate-700 border border-slate-200 font-bold py-3 px-6 rounded-xl transition-all active:scale-[0.98]">
                            Laporkan Masalah Alat
                        </button>
                    </div> -->
                </div>
            </div>
    </div>
@endsection