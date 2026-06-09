<?php

namespace App\Http\Controllers;

use App\Models\JenisSurat;
use Illuminate\Http\Request;

class JenisSuratController extends Controller
{
    public function index()
    {
        $jenisSurats = JenisSurat::latest()->paginate(10);

        return view('jenis-surat.index', compact('jenisSurats'));
    }

    public function create()
    {
        return view('jenis-surat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_jenis' => 'required'
        ]);

        JenisSurat::create([
            'nama_jenis' => $request->nama_jenis
        ]);

        return redirect()
            ->route('jenis-surat.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        $jenisSurat = JenisSurat::findOrFail($id);

        return view('jenis-surat.edit', compact('jenisSurat'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_jenis' => 'required'
        ]);

        JenisSurat::findOrFail($id)
            ->update([
                'nama_jenis' => $request->nama_jenis
            ]);

        return redirect()
            ->route('jenis-surat.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy(string $id)
    {
        JenisSurat::findOrFail($id)->delete();

        return redirect()
            ->route('jenis-surat.index')
            ->with('success', 'Data berhasil dihapus');
    }
}