<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JenisSurat;

class JenisSuratSeeder extends Seeder
{
    public function run(): void
    {
        JenisSurat::create([
            'nama_jenis' => 'Surat Keterangan Mahasiswa Aktif'
        ]);

        JenisSurat::create([
            'nama_jenis' => 'Surat Pengantar PKL'
        ]);

        JenisSurat::create([
            'nama_jenis' => 'Surat Pengantar Penelitian'
        ]);
    }
}