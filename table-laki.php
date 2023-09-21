<?php

include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Laki-Laki</title>
</head>
<body>
<h1 style="text-align:center">Data Siswa Laki-Laki</h1>

<table border="1" style="margin:auto">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Nomor Telepon</th>
        </tr>
        <?php
        $data = mysqli_query($connect, "SELECT * FROM users where jenis_kel='L'");
        while ($stud = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php print $stud['id']?></td>
            <td><?php print $stud['nama']?></td>
            <td><?php print $stud['jenis_kel']?></td>
            <td><?php print $stud['no_telp']?></td>
        </tr>
        <?php } ?>
    </table>
    
</body>
</html>