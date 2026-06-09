@extends('layouts.app')

@section('content')

<h3>Detail Surat</h3>

<div class="card">
    <div class="card-body">

        <table class="table">

            <tr>
                <th>Nama Mahasiswa</th>
                <td>{{ $surat->nama_mahasiswa }}</td>
            </tr>

            <tr>
                <th>NIM</th>
                <td>{{ $surat->nim }}</td>
            </tr>

            <tr>
                <th>Program Studi</th>
                <td>{{ $surat->prodi }}</td>
            </tr>

            <tr>
                <th>Jenis Surat</th>
                <td>{{ $surat->jenisSurat->nama_jenis }}</td>
            </tr>

            <tr>
                <th>Keperluan</th>
                <td>{{ $surat->keperluan }}</td>
            </tr>

            <tr>
                <th>Tanggal Pengajuan</th>
                <td>{{ $surat->tanggal_pengajuan }}</td>
            </tr>

        </table>

    </div>
</div>

@endsection