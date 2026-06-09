@extends('layouts.app')

@section('content')

<h3>Tambah Surat</h3>

<div class="card">

    <div class="card-body">

        <form action="{{ route('surat.store') }}"
              method="POST">

            @csrf

            <div class="mb-3">

                <label>Nama Mahasiswa</label>

                <input type="text"
                       name="nama_mahasiswa"
                       class="form-control">

            </div>

            <div class="mb-3">

                <label>NIM</label>

                <input type="text"
                       name="nim"
                       class="form-control">

            </div>

            <div class="mb-3">

                <label>Program Studi</label>

                <input type="text"
                       name="prodi"
                       class="form-control">

            </div>

            <div class="mb-3">

                <label>Jenis Surat</label>

                <select name="jenis_surat_id"
                        class="form-control">

                    @foreach($jenisSurats as $jenis)

                    <option value="{{ $jenis->id }}">
                        {{ $jenis->nama_jenis }}
                    </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-3">

                <label>Keperluan</label>

                <textarea name="keperluan"
                          class="form-control"></textarea>

            </div>

            <div class="mb-3">

                <label>Tanggal Pengajuan</label>

                <input type="date"
                       name="tanggal_pengajuan"
                       class="form-control">

            </div>

            <button class="btn btn-primary">

                Simpan

            </button>

        </form>

    </div>

</div>

@endsection