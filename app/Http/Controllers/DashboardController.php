<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\JenisSurat;

class DashboardController extends Controller
{
    public function index()
    {
        $totalSurat = Surat::count();

        $suratHariIni = Surat::whereDate(
            'tanggal_pengajuan',
            today()
        )->count();

        $totalJenis = JenisSurat::count();

        $suratTerbaru = Surat::latest()
            ->take(5)
            ->get();

        return view('dashboard.index', compact(
            'totalSurat',
            'suratHariIni',
            'totalJenis',
            'suratTerbaru'
        ));
    }
}