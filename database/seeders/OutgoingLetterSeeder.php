<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutgoingLetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nomor_surat' => '001/SK/X/2026',
                'tanggal'     => '2026-10-04',
                'tujuan'      => 'Dinas Pendidikan',
                'perihal'     => 'Undangan Rapat',
                'keterangan'  => 'Undangan rapat koordinasi program pendidikan',
            ],
            [
                'nomor_surat' => '002/SK/X/2026',
                'tanggal'     => '2026-10-05',
                'tujuan'      => 'Dinas Kesehatan',
                'perihal'     => 'Permohonan Data',
                'keterangan'  => 'Permohonan data kesehatan mahasiswa',
            ],
            [
                'nomor_surat' => '003/SK/X/2026',
                'tanggal'     => '2026-10-06',
                'tujuan'      => 'Kantor Kecamatan',
                'perihal'     => 'Pemberitahuan Kegiatan',
                'keterangan'  => null,
            ],
        ];

        // Nomor surat yang sama akan diperbarui, bukan ditambahkan ulang.
        foreach ($data as $surat) {
            DB::table('outgoing_letters')->updateOrInsert(
                ['nomor_surat' => $surat['nomor_surat']],
                $surat + ['created_at' => now(), 'updated_at' => now()]
            );
        }
    }
}
