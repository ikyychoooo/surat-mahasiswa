<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $fillable = [
        'nama_mahasiswa',
        'nim',
        'prodi',
        'jenis_surat_id',
        'keperluan',
        'tanggal_pengajuan'
    ];

    public function jenisSurat()
    {
        return $this->belongsTo(JenisSurat::class);
    }
}