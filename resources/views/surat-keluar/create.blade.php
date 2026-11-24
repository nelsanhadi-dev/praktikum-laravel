@extends('layouts.app')
@section('title', 'Tambah Surat Keluar')
@section('content')
<div class="mx-auto max-w-3xl">
    <div class="mb-6">
        <p class="text-sm font-bold uppercase tracking-[0.18em] text-cyan-600">Surat Keluar</p>
        <h1 class="mt-1 text-3xl font-black tracking-tight text-slate-950">Tambah Surat Keluar</h1>
        <p class="mt-2 text-sm text-slate-500">Lengkapi data surat keluar pada formulir berikut.</p>
    </div>

    <form action="{{ route('surat-keluar.store') }}" method="POST" class="space-y-6 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
        @csrf

        <div>
            <label class="mb-2 block text-sm font-bold text-slate-700">Nomor Surat</label>
            <input name="nomor_surat" value="{{ old('nomor_surat') }}" class="w-full rounded-xl border border-slate-300 px-4 py-3 outline-none transition focus:border-cyan-500 focus:ring-4 focus:ring-cyan-500/10">
            @error('nomor_surat') <p class="mt-2 text-sm font-medium text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="mb-2 block text-sm font-bold text-slate-700">Tanggal</label>
            <input type="date" name="tanggal" value="{{ old('tanggal') }}" class="w-full rounded-xl border border-slate-300 px-4 py-3 outline-none transition focus:border-cyan-500 focus:ring-4 focus:ring-cyan-500/10">
            @error('tanggal') <p class="mt-2 text-sm font-medium text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="mb-2 block text-sm font-bold text-slate-700">Tujuan</label>
            <input name="tujuan" value="{{ old('tujuan') }}" class="w-full rounded-xl border border-slate-300 px-4 py-3 outline-none transition focus:border-cyan-500 focus:ring-4 focus:ring-cyan-500/10">
            @error('tujuan') <p class="mt-2 text-sm font-medium text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="mb-2 block text-sm font-bold text-slate-700">Perihal</label>
            <input name="perihal" value="{{ old('perihal') }}" class="w-full rounded-xl border border-slate-300 px-4 py-3 outline-none transition focus:border-cyan-500 focus:ring-4 focus:ring-cyan-500/10">
            @error('perihal') <p class="mt-2 text-sm font-medium text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="mb-2 block text-sm font-bold text-slate-700">Keterangan</label>
            <textarea name="keterangan" rows="5" class="w-full resize-y rounded-xl border border-slate-300 px-4 py-3 outline-none transition focus:border-cyan-500 focus:ring-4 focus:ring-cyan-500/10">{{ old('keterangan') }}</textarea>
            @error('keterangan') <p class="mt-2 text-sm font-medium text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="flex flex-col-reverse gap-3 border-t border-slate-100 pt-6 sm:flex-row sm:justify-end">
            <a href="{{ route('surat-keluar.index') }}" class="inline-flex items-center justify-center rounded-xl border border-slate-300 bg-white px-5 py-3 text-sm font-bold text-slate-700 transition hover:bg-slate-50">Batal</a>
            <button type="submit" class="inline-flex items-center justify-center rounded-xl bg-cyan-600 px-5 py-3 text-sm font-black text-white shadow-lg shadow-cyan-600/20 transition hover:-translate-y-0.5 hover:bg-cyan-700">Simpan</button>
        </div>
    </form>
</div>
@endsection
