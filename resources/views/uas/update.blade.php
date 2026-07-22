<?php

include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat_lahir'];
$tanggal = $_POST['tanggal_lahir'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$sekolah = $_POST['sekolah'];
$mtk = $_POST['mtk'];
$bing = $_POST['bing'];
$bindo = $_POST['bindo'];
$jur1 = $_POST['jurusan1'];
$jur2 = $_POST['jurusan2'];
$alasan = $_POST['alasan'];

mysqli_query($conn, "UPDATE pendaftaran SET

nama='$nama',
tempat_lahir='$tempat',
tanggal_lahir='$tanggal',
jenis_kelamin='$jk',
alamat='$alamat',
sekolah_asal='$sekolah',
nilai_mtk='$mtk',
nilai_bing='$bing',
nilai_bindo='$bindo',
jurusan1='$jur1',
jurusan2='$jur2',
alasan='$alasan'

WHERE id='$id'
");

header("Location:data.php");

?>