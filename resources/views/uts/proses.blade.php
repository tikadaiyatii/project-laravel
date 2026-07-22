<?php
include(app_path('koneksi.php'));

$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$sekolah = $_POST['sekolah'];
$mtk = $_POST['mtk'];
$bing = $_POST['bing'];
$bindo = $_POST['bindo'];
$jur1 = $_POST['jur1'];
$jur2 = $_POST['jur2'];
$alasan = $_POST['alasan'];

$query = "INSERT INTO pendaftaran (
nama,
tempat_lahir,
tanggal_lahir,
jenis_kelamin,
alamat,
sekolah_asal,
nilai_mtk,
nilai_bing,
nilai_bindo,
jurusan1,
jurusan2,
alasan
) VALUES (
'$nama',
'$tempat_lahir',
'$tanggal_lahir',
'$jk',
'$alamat',
'$sekolah',
'$mtk',
'$bing',
'$bindo',
'$jur1',
'$jur2',
'$alasan'
)";

$simpan = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pendaftaran</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container{
            width: 700px;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }

        h2{
            text-align: center;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        td{
            padding: 10px;
            border: 1px solid #ccc;
        }

        .success{
            background: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">

<?php
if($simpan){
    echo "<div class='success'>Data berhasil disimpan ke database!</div>";
}else{
    echo "<div class='success'>Data gagal disimpan!</div>";
}
?>

<h2>Data Pendaftaran</h2>

<table>

    <tr>
        <td>Nama</td>
        <td><?php echo $nama; ?></td>
    </tr>

    <tr>
        <td>Tempat Lahir</td>
        <td><?php echo $tempat_lahir; ?></td>
    </tr>

    <tr>
        <td>Tanggal Lahir</td>
        <td><?php echo $tanggal_lahir; ?></td>
    </tr>

    <tr>
        <td>Jenis Kelamin</td>
        <td><?php echo $jk; ?></td>
    </tr>

    <tr>
        <td>Alamat</td>
        <td><?php echo $alamat; ?></td>
    </tr>

    <tr>
        <td>Sekolah Asal</td>
        <td><?php echo $sekolah; ?></td>
    </tr>

    <tr>
        <td>Nilai Matematika</td>
        <td><?php echo $mtk; ?></td>
    </tr>

    <tr>
        <td>Nilai Bahasa Inggris</td>
        <td><?php echo $bing; ?></td>
    </tr>

    <tr>
        <td>Nilai Bahasa Indonesia</td>
        <td><?php echo $bindo; ?></td>
    </tr>

    <tr>
        <td>Jurusan Pilihan 1</td>
        <td><?php echo $jur1; ?></td>
    </tr>

    <tr>
        <td>Jurusan Pilihan 2</td>
        <td><?php echo $jur2; ?></td>
    </tr>

    <tr>
        <td>Alasan Masuk</td>
        <td><?php echo $alasan; ?></td>
    </tr>

</table>

<br><br>

<div style="text-align:center;">

    <a href="index.php" 
       style="
       padding:12px 25px;
       background:#333;
       color:white;
       text-decoration:none;
       border-radius:5px;
       ">
       
       Kembali ke Beranda

    </a>

</div>

</body>
</html>