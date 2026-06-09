@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">

    <h3>Jenis Surat</h3>

    <a href="{{ route('jenis-surat.create') }}"
       class="btn btn-primary">

       Tambah Jenis Surat

    </a>

</div>

<table class="table table-bordered">

    <thead>
        <tr>
            <th>No</th>
            <th>Nama Jenis Surat</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

        @foreach($jenisSurats as $item)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $item->nama_jenis }}</td>

            <td>

                <a href="{{ route('jenis-surat.edit',$item->id) }}"
                   class="btn btn-warning btn-sm">

                    Edit

                </a>

                <form action="{{ route('jenis-surat.destroy',$item->id) }}"
                      method="POST"
                      class="d-inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">

                        Hapus

                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

{{ $jenisSurats->links() }}

@endsection