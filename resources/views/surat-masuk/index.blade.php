@extends('layouts.app')
@section('title', 'Daftar Surat Masuk')
@section('content')
<div class="flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">
    <div>
        <p class="text-sm font-bold uppercase tracking-[0.18em] text-blue-600">Arsip Surat</p>
        <h1 class="mt-1 text-3xl font-black tracking-tight text-slate-950">Daftar Surat Masuk</h1>
        <p class="mt-2 text-sm text-slate-500">Data seluruh surat yang diterima dan tersimpan di sistem.</p>
    </div>
    @can('manage-letters')
        <a href="{{ route('surat-masuk.create') }}" class="inline-flex items-center justify-center rounded-xl bg-blue-600 px-5 py-3 text-sm font-black text-white shadow-lg shadow-blue-600/20 transition hover:-translate-y-0.5 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-500/20">
            + Tambah Surat
        </a>
    @endcan
</div>

@if (session('success'))
    <div class="mt-6 rounded-2xl border border-emerald-200 bg-emerald-50 px-5 py-4 text-sm font-semibold text-emerald-700">
        {{ session('success') }}
    </div>
@endif

<div class="mt-6 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <div class="overflow-x-auto">
        <table class="min-w-full text-left text-sm">
            <thead class="bg-slate-950 text-xs uppercase tracking-wider text-slate-200">
                <tr>
                    <th class="px-5 py-4 font-bold">No</th>
                    <th class="px-5 py-4 font-bold">Nomor</th>
                    <th class="px-5 py-4 font-bold">Tanggal</th>
                    <th class="px-5 py-4 font-bold">Pengirim</th>
                    <th class="px-5 py-4 font-bold">Perihal</th>
                    <th class="px-5 py-4 font-bold">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
            @forelse ($suratMasuk as $surat)
                <tr class="transition hover:bg-blue-50/60">
                    <td class="whitespace-nowrap px-5 py-4 font-semibold text-slate-500">{{ $loop->iteration }}</td>
                    <td class="whitespace-nowrap px-5 py-4 font-bold text-slate-900">{{ $surat->nomor_surat }}</td>
                    <td class="whitespace-nowrap px-5 py-4 text-slate-600">{{ $surat->tanggal }}</td>
                    <td class="px-5 py-4 text-slate-700">{{ $surat->pengirim }}</td>
                    <td class="px-5 py-4 text-slate-700">{{ $surat->perihal }}</td>
                    <td class="px-5 py-4">
                        <div class="flex flex-wrap gap-2">
                            <a href="{{ route('surat-masuk.show', $surat->id) }}" class="rounded-lg bg-slate-100 px-3 py-2 text-xs font-bold text-slate-700 transition hover:bg-slate-200">Detail</a>
                            @can('manage-letters')
                                <a href="{{ route('surat-masuk.edit', $surat->id) }}" class="rounded-lg bg-amber-100 px-3 py-2 text-xs font-bold text-amber-700 transition hover:bg-amber-200">Edit</a>
                                <form action="{{ route('surat-masuk.destroy', $surat->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Hapus surat ini?')" class="rounded-lg bg-red-100 px-3 py-2 text-xs font-bold text-red-700 transition hover:bg-red-200">Hapus</button>
                                </form>
                            @endcan
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="px-5 py-12 text-center text-sm font-medium text-slate-500">Belum ada surat masuk.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
