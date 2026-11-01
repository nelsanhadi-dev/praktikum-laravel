<?php

namespace App\Http\Controllers;

use App\Models\OutgoingLetter;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $suratKeluar = OutgoingLetter::all();

        return view('surat-keluar.index', compact('suratKeluar'));
    }

    public function show($id)
    {
        $suratKeluarShow = OutgoingLetter::findOrFail($id);

        return view('surat-keluar.show', compact('suratKeluarShow'));
    }
}
