@extends('layouts.app')

@section('content')

<h3>Edit Surat</h3>

<div class="card">
<div class="card-body">

<form action="{{ route('surat.update',$surat->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama Mahasiswa</label>
        <input type="text"
               name="nama_mahasiswa"
               class="form-control"
               value="{{ $surat->nama_mahasiswa }}">
    </div>

    <div class="mb-3">
        <label>NIM</label>
        <input type="text"
               name="nim"
               class="form-control"
               value="{{ $surat->nim }}">
    </div>

    <div class="mb-3">
        <label>Program Studi</label>
        <input type="text"
               name="prodi"
               class="form-control"
               value="{{ $surat->prodi }}">
    </div>

    <div class="mb-3">

        <label>Jenis Surat</label>

        <select name="jenis_surat_id"
                class="form-control">

            @foreach($jenisSurats as $jenis)

            <option value="{{ $jenis->id }}"
            {{ $surat->jenis_surat_id == $jenis->id ? 'selected' : '' }}>

                {{ $jenis->nama_jenis }}

            </option>

            @endforeach

        </select>

    </div>

    <div class="mb-3">
        <label>Keperluan</label>

        <textarea name="keperluan"
                  class="form-control">{{ $surat->keperluan }}</textarea>
    </div>

    <div class="mb-3">
        <label>Tanggal Pengajuan</label>

        <input type="date"
               name="tanggal_pengajuan"
               class="form-control"
               value="{{ $surat->tanggal_pengajuan }}">
    </div>

    <button class="btn btn-primary">
        Update
    </button>

</form>

</div>
</div>

@endsection