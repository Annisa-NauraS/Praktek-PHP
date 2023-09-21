<?php

include 'connect.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_kel = $_POST['jenis_kel'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];

$data = mysqli_query($connect, "UPDATE users SET
nama='$nama',
umur='$umur',
jenis_kel='$jenis_kel',
no_telp='$no_telp',
alamat='$alamat'
where id='$id'
");

header("location:crud-read.php");

?>