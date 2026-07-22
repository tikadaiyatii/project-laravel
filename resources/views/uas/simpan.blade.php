<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$tempat = $_POST['tempat_lahir'];
$tanggal = $_POST['tanggal_lahir'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$sekolah = $_POST['sekolah'];
$mtk = $_POST['mtk'];
$bing = $_POST['bing'];
$bindo = $_POST['bindo'];
$jur1 = $_POST['jur1'];
$jur2 = $_POST['jur2'];
$alasan = $_POST['alasan'];

$query = mysqli_query($conn,
"INSERT INTO pendaftaran
(
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
)
VALUES
(
'$nama',
'$tempat',
'$tanggal',
'$jk',
'$alamat',
'$sekolah',
'$mtk',
'$bing',
'$bindo',
'$jur1',
'$jur2',
'$alasan'
)");

if($query){
    header("Location:data.php");
}else{
    echo "Data gagal disimpan";
}

?>