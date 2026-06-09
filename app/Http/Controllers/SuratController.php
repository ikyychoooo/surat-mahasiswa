<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\JenisSurat;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index(Request $request)
    {
        $query = Surat::with('jenisSurat');

        if ($request->search) {
            $query->where('nama_mahasiswa', 'like', '%' . $request->search . '%')
                  ->orWhere('nim', 'like', '%' . $request->search . '%');
        }

        $surats = $query->latest()->paginate(10);

        return view('surat.index', compact('surats'));
    }

    public function create()
    {
        $jenisSurats = JenisSurat::all();

        return view('surat.create', compact('jenisSurats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mahasiswa' => 'required',
            'nim' => 'required',
            'prodi' => 'required',
            'jenis_surat_id' => 'required',
            'keperluan' => 'required',
            'tanggal_pengajuan' => 'required',
        ]);

        Surat::create([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'jenis_surat_id' => $request->jenis_surat_id,
            'keperluan' => $request->keperluan,
            'tanggal_pengajuan' => $request->tanggal_pengajuan,
        ]);

        return redirect()
            ->route('surat.index')
            ->with('success', 'Data surat berhasil disimpan');
    }

    public function show(string $id)
    {
        $surat = Surat::with('jenisSurat')
            ->findOrFail($id);

        return view('surat.show', compact('surat'));
    }

    public function edit(string $id)
    {
        $surat = Surat::findOrFail($id);

        $jenisSurats = JenisSurat::all();

        return view(
            'surat.edit',
            compact('surat', 'jenisSurats')
        );
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_mahasiswa' => 'required',
            'nim' => 'required',
            'prodi' => 'required',
            'jenis_surat_id' => 'required',
            'keperluan' => 'required',
            'tanggal_pengajuan' => 'required',
        ]);

        $surat = Surat::findOrFail($id);

        $surat->update([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'jenis_surat_id' => $request->jenis_surat_id,
            'keperluan' => $request->keperluan,
            'tanggal_pengajuan' => $request->tanggal_pengajuan,
        ]);

        return redirect()
            ->route('surat.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy(string $id)
    {
        Surat::findOrFail($id)->delete();

        return redirect()
            ->route('surat.index')
            ->with('success', 'Data berhasil dihapus');
    }
    public function print($id)
{
    $surat = Surat::with('jenisSurat')
        ->findOrFail($id);

    return view('surat.print', compact('surat'));
}
}