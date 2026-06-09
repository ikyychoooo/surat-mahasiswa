<!DOCTYPE html>
<html>
<head>

    <title>Cetak Surat</title>

    <style>

        body{
            font-family:Times New Roman;
            margin:40px;
        }

        .kop{
            text-align:center;
        }

        .judul{
            text-align:center;
            margin-top:30px;
        }

    </style>

</head>
<body onload="window.print()">

<div class="kop">

    <h2>UNIVERSITAS CONTOH</h2>

    <p>
        Jl. Pendidikan No.1
    </p>

    <hr>

</div>

<div class="judul">

    <h3>
        {{ $surat->jenisSurat->nama_jenis }}
    </h3>

</div>

<br>

<p>
    Yang bertanda tangan di bawah ini menerangkan bahwa:
</p>

<table>

<tr>
    <td>Nama</td>
    <td>: {{ $surat->nama_mahasiswa }}</td>
</tr>

<tr>
    <td>NIM</td>
    <td>: {{ $surat->nim }}</td>
</tr>

<tr>
    <td>Program Studi</td>
    <td>: {{ $surat->prodi }}</td>
</tr>

</table>

<br>

<p>
    Surat ini dibuat untuk keperluan:
</p>

<p>
    {{ $surat->keperluan }}
</p>

<br><br>

<div style="text-align:right">

    <p>
        {{ date('d F Y') }}
    </p>

    <br><br><br>

    <p>
        Kepala Akademik
    </p>

</div>

</body>
</html>