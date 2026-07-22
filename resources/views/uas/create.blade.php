<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pendaftaran Mahasiswa</title>
</head>

<body>

<h2>Form Tambah Data Mahasiswa</h2>

<form action="/simpan" method="post">

<table>

<tr>
    <td>Nama</td>
    <td><input type="text" name="nama" required></td>
</tr>

<tr>
    <td>Tempat Lahir</td>
    <td><input type="text" name="tempat_lahir" required></td>
</tr>

<tr>
    <td>Tanggal Lahir</td>
    <td><input type="date" name="tanggal_lahir" required></td>
</tr>

<tr>
    <td>Jenis Kelamin</td>
    <td>
        <input type="radio" name="jk" value="Laki-laki"> Laki-laki
        <input type="radio" name="jk" value="Perempuan"> Perempuan
    </td>
</tr>

<tr>
    <td>Alamat</td>
    <td><textarea name="alamat" required></textarea></td>
</tr>

<tr>
    <td>Sekolah Asal</td>
    <td><input type="text" name="sekolah" required></td>
</tr>

<tr>
    <td>Nilai Matematika</td>
    <td><input type="number" name="mtk" min="0" max="100" required></td>
</tr>

<tr>
    <td>Nilai Bahasa Inggris</td>
    <td><input type="number" name="bing" min="0" max="100" required></td>
</tr>

<tr>
    <td>Nilai Bahasa Indonesia</td>
    <td><input type="number" name="bindo" min="0" max="100" required></td>
</tr>

<tr>
    <td>Jurusan Pilihan 1</td>
    <td>
        <select name="jur1">
            <option value="">-- Pilih Jurusan --</option>
            <option value="SISTEM INFORMASI">Sistem Informasi</option>
            <option value="TEKNIK INFORMATIKA">Teknik Informatika</option>
            <option value="MANAJEMEN">Manajemen</option>
            <option value="AKUNTANSI">Akuntansi</option>
        </select>
    </td>
</tr>

<tr>
    <td>Jurusan Pilihan 2</td>
    <td>
        <select name="jur2">
            <option value="">-- Pilih Jurusan --</option>
            <option value="SISTEM INFORMASI">Sistem Informasi</option>
            <option value="TEKNIK INFORMATIKA">Teknik Informatika</option>
            <option value="MANAJEMEN">Manajemen</option>
            <option value="AKUNTANSI">Akuntansi</option>
        </select>
    </td>
</tr>

<tr>
    <td>Alasan Masuk</td>
    <td>
        <textarea name="alasan" rows="4"></textarea>
    </td>
</tr>

<tr>
    <td colspan="2" align="center">
        <input type="submit" value="Simpan Data">
    </td>
</tr>

</table>

</form>

</body>
</html>