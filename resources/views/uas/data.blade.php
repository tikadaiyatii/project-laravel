<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f4f4;
        }

        .container{
            width:90%;
            margin:30px auto;
            background:white;
            padding:20px;
            border-radius:10px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table,th,td{
            border:1px solid #ccc;
        }

        th,td{
            padding:10px;
            text-align:center;
        }

        a{
            text-decoration:none;
            padding:5px 10px;
            color:white;
            border-radius:5px;
        }

        .edit{
            background:green;
        }

        .hapus{
            background:red;
        }

        .tambah{
            background:green;
            color:white;
            padding:10px 15px;
            text-decoration:none;
            border-radius:5px;
        }
    </style>
</head>

<body>

<div class="container">

<h2>Data Pendaftaran Mahasiswa</h2>

<div style="margin-bottom:15px; text-align:right;">
    <a href="/create" class="tambah">
        + Tambah Mahasiswa Baru
    </a>
</div>

<table>

<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>

@php
$no = 1;
@endphp

@foreach($data as $d)

<tr>

    <td>{{ $no++ }}</td>
    <td>{{ $d->nama }}</td>
    <td>{{ $d->tempat_lahir }}</td>
    <td>{{ $d->tanggal_lahir }}</td>
    <td>{{ $d->alamat }}</td>

    <td>

        <a class="edit" href="/edit/{{ $d->id }}">
            Edit
        </a>

        <a class="hapus"
           onclick="return confirm('Yakin hapus data?')"
           href="/hapus/{{ $d->id }}">
            Hapus
        </a>

    </td>

</tr>

@endforeach

</table>

</div>

</body>
</html>