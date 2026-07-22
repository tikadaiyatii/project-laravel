<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>
</head>
<body>

<h2>Edit Data Mahasiswa</h2>

<form action="/update/{{ $data->id }}" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{ $data->id }}">

    <table>

        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="nama" value="{{ $data->nama }}">
            </td>
        </tr>

        <tr>
            <td>Tempat Lahir</td>
            <td>
                <input type="text" name="tempat_lahir" value="{{ $data->tempat_lahir }}">
            </td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td>
                <input type="date" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}">
            </td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <input type="radio" name="jk" value="Laki-laki"
                {{ $data->jk == 'Laki-laki' ? 'checked' : '' }}>
                Laki-laki

                <input type="radio" name="jk" value="Perempuan"
                {{ $data->jk == 'Perempuan' ? 'checked' : '' }}>
                Perempuan
            </td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat">{{ $data->alamat }}</textarea>
            </td>
        </tr>

        <tr>
            <td>Sekolah Asal</td>
            <td>
                <input type="text" name="sekolah" value="{{ $data->sekolah }}">
            </td>
        </tr>

        <tr>
            <td>Nilai Matematika</td>
            <td>
                <input type="number" name="mtk" value="{{ $data->mtk }}">
            </td>
        </tr>

        <tr>
            <td>Nilai Bahasa Inggris</td>
            <td>
                <input type="number" name="bing" value="{{ $data->bing }}">
            </td>
        </tr>

        <tr>
            <td>Nilai Bahasa Indonesia</td>
            <td>
                <input type="number" name="bindo" value="{{ $data->bindo }}">
            </td>
        </tr>

        <tr>
            <td>Jurusan Pilihan 1</td>
            <td>
                <input type="text" name="jur1" value="{{ $data->jurusan1 }}">
            </td>
        </tr>

        <tr>
            <td>Jurusan Pilihan 2</td>
            <td>
                <input type="text" name="jur2" value="{{ $data->jurusan2 }}">
            </td>
        </tr>

        <tr>
            <td>Alasan Masuk</td>
            <td>
                <textarea name="alasan">{{ $data->alasan }}</textarea>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="submit" value="Update">
                <a href="/mahasiswa">Kembali</a>
            </td>
        </tr>

    </table>

</form>

</body>
</html>