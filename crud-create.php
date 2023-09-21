<?php

include 'connect.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_kel = $_POST['jenis_kel'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];

mysqli_query($connect, "INSERT INTO users value ('$id', '$nama', '$umur', '$jenis_kel', '$no_telp', '$alamat')");

header("location:crud-read.php");

?>