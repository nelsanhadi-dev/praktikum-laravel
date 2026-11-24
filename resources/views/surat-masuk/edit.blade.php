@extends('layouts.app')
@section('title', 'Edit Surat Masuk')
@section('content')
<div class="mx-auto max-w-3xl">
    <div class="mb-6">
        <p class="text-sm font-bold uppercase tracking-[0.18em] text-amber-600">Surat Masuk</p>
        <h1 class="mt-1 text-3xl font-black tracking-tight text-slate-950">Edit Surat Masuk</h1>
        <p class="mt-2 text-sm text-slate-500">Perbarui data surat masuk tanpa mengubah alur CRUD.</p>
    </div>

    <form action="{{ route('surat-masuk.update', $surat->id) }}" method="POST" class="space-y-6 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
        @csrf
        @method('PUT')

        <div>
            <label class="mb-2 block text-sm font-bold text-slate-700">Nomor Surat</label>
            <input name="nomor_surat" value="{{ old('nomor_surat', $surat->nomor_surat) }}" class="w-full rounded-xl border border-slate-300 px-4 py-3 outline-none transition focus:border-amber-500 focus:ring-4 focus:ring-amber-500/10">
            @error('nomor_surat') <p class="mt-2 text-sm font-medium text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="mb-2 block text-sm font-bold text-slate-700">Tanggal</label>
            <input type="date" name="tanggal" value="{{ old('tanggal', $surat->tanggal) }}" class="w-full rounded-xl border border-slate-300 px-4 py-3 outline-none transition focus:border-amber-500 focus:ring-4 focus:ring-amber-500/10">
            @error('tanggal') <p class="mt-2 text-sm font-medium text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="mb-2 block text-sm font-bold text-slate-700">Pengirim</label>
            <input name="pengirim" value="{{ old('pengirim', $surat->pengirim) }}" class="w-full rounded-xl border border-slate-300 px-4 py-3 outline-none transition focus:border-amber-500 focus:ring-4 focus:ring-amber-500/10">
            @error('pengirim') <p class="mt-2 text-sm font-medium text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="mb-2 block text-sm font-bold text-slate-700">Perihal</label>
            <input name="perihal" value="{{ old('perihal', $surat->perihal) }}" class="w-full rounded-xl border border-slate-300 px-4 py-3 outline-none transition focus:border-amber-500 focus:ring-4 focus:ring-amber-500/10">
            @error('perihal') <p class="mt-2 text-sm font-medium text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="mb-2 block text-sm font-bold text-slate-700">Keterangan</label>
            <textarea name="keterangan" rows="5" class="w-full resize-y rounded-xl border border-slate-300 px-4 py-3 outline-none transition focus:border-amber-500 focus:ring-4 focus:ring-amber-500/10">{{ old('keterangan', $surat->keterangan) }}</textarea>
            @error('keterangan') <p class="mt-2 text-sm font-medium text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="flex flex-col-reverse gap-3 border-t border-slate-100 pt-6 sm:flex-row sm:justify-end">
            <a href="{{ route('surat-masuk.index') }}" class="inline-flex items-center justify-center rounded-xl border border-slate-300 bg-white px-5 py-3 text-sm font-bold text-slate-700 transition hover:bg-slate-50">Batal</a>
            <button type="submit" class="inline-flex items-center justify-center rounded-xl bg-amber-500 px-5 py-3 text-sm font-black text-white shadow-lg shadow-amber-500/20 transition hover:-translate-y-0.5 hover:bg-amber-600">Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection
