<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Surat;

class SuratSeeder extends Seeder
{
    public function run(): void
    {
        Surat::create([
            'nama_mahasiswa' => 'Budi Santoso',
            'nim' => '2204111001',
            'prodi' => 'Teknik Informatika',
            'jenis_surat_id' => 1,
            'keperluan' => 'Persyaratan Beasiswa',
            'tanggal_pengajuan' => now()
        ]);

        Surat::create([
            'nama_mahasiswa' => 'Siti Aisyah',
            'nim' => '2204111002',
            'prodi' => 'Sistem Informasi',
            'jenis_surat_id' => 2,
            'keperluan' => 'PKL Dinas Kominfo',
            'tanggal_pengajuan' => now()
        ]);
    }
}