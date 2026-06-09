@extends('layouts.app')

@section('content')

<h3 class="mb-4">Dashboard</h3>

<div class="row">

    <div class="col-md-4 mb-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6>Total Surat</h6>
                <h2>{{ $totalSurat }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6>Surat Hari Ini</h6>
                <h2>{{ $suratHariIni }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6>Total Jenis Surat</h6>
                <h2>{{ $totalJenis }}</h2>
            </div>
        </div>
    </div>

</div>

<div class="card shadow-sm">
    <div class="card-header">
        Surat Terbaru
    </div>

    <div class="card-body">

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jenis Surat</th>
                </tr>
            </thead>

            <tbody>

                @foreach($suratTerbaru as $item)

                <tr>
                    <td>{{ $item->nama_mahasiswa }}</td>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->jenisSurat->nama_jenis ?? '-' }}</td>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>
</div>

@endsection