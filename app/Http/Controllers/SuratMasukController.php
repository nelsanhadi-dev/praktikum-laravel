<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index()
    {
        $suratMasuk = [
            [
                'id'          => 1,
                'nomor_surat' => '002/BAA/2025',
                'tanggal'     => '13-04-2025',
                'pengirim'    => 'KASS',
                'perihal'     => 'Edaran Akademik'
            ],
            [
                'id'          => 3,
                'nomor_surat' => '002/BSS/2026',
                'tanggal'     => '13-04-2026',
                'pengirim'    => 'tsaaS',
                'perihal'     => 'Ujian Fisik'
            ]
        ];

        return view('surat-masuk.index', compact('suratMasuk'));
    }

    public function show($id)
    {
        $suratMasuk = [
            [
                'id'          => 1,
                'nomor_surat' => '002/BAA/2025',
                'tanggal'     => '13-04-2025',
                'pengirim'    => 'KASS',
                'perihal'     => 'Edaran Akademik'
            ],
            [
                'id'          => 3,
                'nomor_surat' => '002/BSS/2026',
                'tanggal'     => '13-04-2026',
                'pengirim'    => 'tsaaS',
                'perihal'     => 'Ujian Fisik'
            ]
        ];

        $suratMasukShow = collect($suratMasuk)->firstWhere('id', (int) $id);

        if (!$suratMasukShow) {
            abort(404, 'Surat tidak ditemukan');
        }

        return view('surat-masuk.show', compact('suratMasukShow'));
    }
}