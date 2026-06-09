<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Pengajuan Surat Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f5f7fa;
        }

        .sidebar{
            width:250px;
            height:100vh;
            position:fixed;
            background:#1e3a5f;
            color:white;
        }

        .sidebar a{
            color:white;
            text-decoration:none;
            display:block;
            padding:10px;
            border-radius:6px;
        }

        .sidebar a:hover{
            background:rgba(255,255,255,.15);
        }

        .content{
            margin-left:250px;
            padding:20px;
        }

        .navbar-custom{
            background:white;
            padding:15px;
            border-radius:10px;
            margin-bottom:20px;
        }

    </style>
</head>

<body>

<div class="sidebar p-3">

    <h4>Surat Mahasiswa</h4>

    <hr>

    <a href="{{ route('dashboard') }}">
        Dashboard
    </a>

    <a href="{{ route('surat.index') }}">
        Data Surat
    </a>

    <a href="{{ route('jenis-surat.index') }}">
        Jenis Surat
    </a>

    <hr>

    <form method="POST"
          action="{{ route('logout') }}">

        @csrf

        <button class="btn btn-danger btn-sm">
            Logout
        </button>

    </form>

</div>

<div class="content">

    <div class="navbar-custom shadow-sm">
        <h5 class="mb-0">
            Sistem Pengajuan Surat Mahasiswa
        </h5>
    </div>

    @yield('content')

</div>

</body>
</html>