<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Create</title>
</head>
<body>
    <h1 style="text-align:center">Student Form</h1>

    <form action="crud-create.php" method="POST">

    <label for="id">Masukkan ID Anda</label> <br>
    <input type="text" id="id" name="id">
    <br><br>
    <label for="nama">Masukkan Nama Anda</label> <br>
    <input type="text" id="nama" name="nama">
    <br><br>
    <label for="umur">Masukkan Umur Anda</label> <br>
    <input type="text" id="umur" name="umur">
    <br><br>
    <label for="jenis_kel">Masukkan Jenis Kelamin Anda</label> <br>
    <input type="text" id="jenis_kel" name="jenis_kel">
    <br><br>
    <label for="no_telp">Masukkan Nomor Telepon Anda</label> <br>
    <input type="text" id="no_telp" name="no_telp">
    <br><br>
    <label for="alamat">Masukkan Alamat Anda</label> <br>
    <input type="text" id="alamat" name="alamat">
    <br><br>
    <button type="submit">Simpan Data</button>
    </form>
    <a href="crud-read.php" onclick="return confirm('Data belum tersimpan, yaqin mau kembali?')"><button>Kembali</button></a>
</body>
</html>