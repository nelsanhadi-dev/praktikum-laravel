@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <section class="overflow-hidden rounded-3xl bg-gradient-to-br from-slate-950 via-slate-900 to-blue-950 p-7 text-white shadow-xl shadow-slate-900/10 sm:p-10">
        <div class="max-w-3xl">
            <span class="inline-flex rounded-full border border-blue-400/20 bg-blue-400/10 px-3 py-1 text-xs font-bold uppercase tracking-[0.2em] text-blue-200">
                Dashboard
            </span>
            <h1 class="mt-5 text-3xl font-black tracking-tight sm:text-4xl">Selamat datang di Sistem Informasi Surat.</h1>
            <p class="mt-4 max-w-2xl text-sm leading-7 text-slate-300 sm:text-base">
                Gunakan menu navigasi untuk mengelola Surat Masuk dan Surat Keluar sesuai hak akses akun Anda.
            </p>
        </div>
    </section>

    <section class="mt-7 grid gap-5 md:grid-cols-2">
        <a href="{{ route('surat-masuk.index') }}" class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-900/5">
            <div class="flex items-start justify-between gap-4">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-blue-600">Arsip</p>
                    <h2 class="mt-2 text-xl font-black text-slate-900">Surat Masuk</h2>
                    <p class="mt-2 text-sm leading-6 text-slate-500">Lihat dan kelola data surat yang diterima oleh instansi.</p>
                </div>
                <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-blue-50 text-xl text-blue-600 transition group-hover:bg-blue-600 group-hover:text-white">↓</span>
            </div>
        </a>

        <a href="{{ route('surat-keluar.index') }}" class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:border-cyan-200 hover:shadow-xl hover:shadow-cyan-900/5">
            <div class="flex items-start justify-between gap-4">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-cyan-600">Arsip</p>
                    <h2 class="mt-2 text-xl font-black text-slate-900">Surat Keluar</h2>
                    <p class="mt-2 text-sm leading-6 text-slate-500">Lihat dan kelola data surat yang dikirim oleh instansi.</p>
                </div>
                <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-cyan-50 text-xl text-cyan-600 transition group-hover:bg-cyan-600 group-hover:text-white">↑</span>
            </div>
        </a>
    </section>
@endsection
