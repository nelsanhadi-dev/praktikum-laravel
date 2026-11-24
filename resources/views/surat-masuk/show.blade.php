@extends('layouts.app')
@section('title', 'Detail Surat Masuk')
@section('content')
<div class="mx-auto max-w-3xl">
    <div class="mb-6">
        <p class="text-sm font-bold uppercase tracking-[0.18em] text-blue-600">Detail Arsip</p>
        <h1 class="mt-1 text-3xl font-black tracking-tight text-slate-950">Detail Surat Masuk</h1>
    </div>

    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
        <dl class="divide-y divide-slate-100">
            <div class="grid gap-2 px-6 py-5 sm:grid-cols-3"><dt class="text-sm font-bold text-slate-500">Nomor</dt><dd class="sm:col-span-2 font-semibold text-slate-900">{{ $surat->nomor_surat }}</dd></div>
            <div class="grid gap-2 px-6 py-5 sm:grid-cols-3"><dt class="text-sm font-bold text-slate-500">Tanggal</dt><dd class="sm:col-span-2 text-slate-700">{{ $surat->tanggal }}</dd></div>
            <div class="grid gap-2 px-6 py-5 sm:grid-cols-3"><dt class="text-sm font-bold text-slate-500">Pengirim</dt><dd class="sm:col-span-2 text-slate-700">{{ $surat->pengirim }}</dd></div>
            <div class="grid gap-2 px-6 py-5 sm:grid-cols-3"><dt class="text-sm font-bold text-slate-500">Perihal</dt><dd class="sm:col-span-2 text-slate-700">{{ $surat->perihal }}</dd></div>
            <div class="grid gap-2 px-6 py-5 sm:grid-cols-3"><dt class="text-sm font-bold text-slate-500">Keterangan</dt><dd class="sm:col-span-2 whitespace-pre-line text-slate-700">{{ $surat->keterangan ?? '-' }}</dd></div>
        </dl>
    </div>

    <div class="mt-6">
        <a href="{{ route('surat-masuk.index') }}" class="inline-flex items-center justify-center rounded-xl bg-slate-900 px-5 py-3 text-sm font-bold text-white transition hover:bg-slate-800">← Kembali</a>
    </div>
</div>
@endsection
