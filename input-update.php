<?php

include 'connect.php';

$id = $_GET['id'];

$data = mysqli_query($connect, "SELECT * FROM users where id='$id'");
while($edit = mysqli_fetch_array($data)){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Edit</title>
</head>
<body>
    <h1 style="text-align:center">Student Form</h1>

    <form action="crud-update.php" method="POST">

    <input type="hidden" id="id" name="id" value="<?php print $edit['id'];?>">
    <br><br>
    <label for="nama">Masukkan Nama Anda</label> <br>
    <input type="text" id="nama" name="nama" value="<?php print $edit['nama'];?>">
    <br><br>
    <label for="umur">Masukkan Umur Anda</label> <br>
    <input type="text" id="umur" name="umur" value="<?php print $edit['umur'];?>">
    <br><br>
    <label for="jenis_kel">Masukkan Jenis Kelamin Anda</label> <br>
    <input type="text" id="jenis_kel" name="jenis_kel" value="<?php print $edit['jenis_kel'];?>">
    <br><br>
    <label for="no_telp">Masukkan Nomor Telepon Anda</label> <br>
    <input type="text" id="no_telp" name="no_telp" value="<?php print $edit['no_telp'];?>">
    <br><br>
    <label for="alamat">Masukkan Alamat Anda</label> <br>
    <input type="text" id="alamat" name="alamat" value="<?php print $edit['alamat'];?>">
    <br><br>
    <button type="submit">Simpan Data</button>
    <?php } ?>
    </form>


    <a href="crud-read.php" onclick="return confirm('Data belum tersimpan, yaqin mau kembali?')"><button>Kembali</button></a>
</body>
</html>