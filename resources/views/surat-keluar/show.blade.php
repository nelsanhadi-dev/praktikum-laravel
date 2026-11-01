
@extends('layouts.app')

@section('title', 'Detail Surat Keluar')

@section('content')
    <h1>Detail Surat Keluar</h1>

    <p>
        <strong>Nomor Surat:</strong>
        {{ $suratKeluarShow->nomor_surat }}
    </p>

    <p>
        <strong>Tanggal:</strong>
        {{ $suratKeluarShow->tanggal }}
    </p>

    <p>
        <strong>Tujuan:</strong>
        {{ $suratKeluarShow->tujuan }}
    </p>

    <p>
        <strong>Perihal:</strong>
        {{ $suratKeluarShow->perihal }}
    </p>

    <a href="{{ route('surat-keluar.index') }}">Kembali ke Daftar Surat Keluar</a>
@endsection
