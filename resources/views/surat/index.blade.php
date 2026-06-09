@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">

```
<h3>Data Surat</h3>

<a href="{{ route('surat.create') }}"
   class="btn btn-primary">
    Tambah Surat
</a>
```

</div>

@if(session('success'))

<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<form method="GET" action="{{ route('surat.index') }}">

```
<div class="row mb-3">

    <div class="col-md-4">

        <input type="text"
               name="search"
               class="form-control"
               placeholder="Cari Nama / NIM"
               value="{{ request('search') }}">

    </div>

    <div class="col-md-2">

        <button class="btn btn-secondary">
            Cari
        </button>

    </div>

</div>
```

</form>

<div class="card shadow-sm">

```
<div class="card-body">

    <table class="table table-bordered table-striped">

        <thead class="table-dark">

            <tr>

                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Program Studi</th>
                <th>Jenis Surat</th>
                <th width="260">Aksi</th>

            </tr>

        </thead>

        <tbody>

            @forelse($surats as $surat)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $surat->nama_mahasiswa }}</td>

                <td>{{ $surat->nim }}</td>

                <td>{{ $surat->prodi }}</td>

                <td>{{ $surat->jenisSurat->nama_jenis ?? '-' }}</td>

                <td>

                    <a href="{{ route('surat.show', $surat->id) }}"
                       class="btn btn-info btn-sm">
                        Detail
                    </a>

                    <a href="{{ route('surat.edit', $surat->id) }}"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <a href="{{ route('surat.print', $surat->id) }}"
                       class="btn btn-success btn-sm"
                       target="_blank">
                        Cetak
                    </a>

                    <form action="{{ route('surat.destroy', $surat->id) }}"
                          method="POST"
                          class="d-inline">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                            Hapus
                        </button>

                    </form>

                </td>

            </tr>

            @empty

            <tr>
                <td colspan="6" class="text-center">
                    Data surat belum tersedia
                </td>
            </tr>

            @endforelse

        </tbody>

    </table>

    <div class="mt-3">
        {{ $surats->links() }}
    </div>

</div>
```

</div>

@endsection
