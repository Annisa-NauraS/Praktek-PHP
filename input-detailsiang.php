<?php

include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Input</title>
</head>
<body>

<h1>Data Pagi</h1>
<a href="crud-read.php"><button>Kembali</button></a>
<a href="input-detailpagi.php"><button>Data Pagi</button></a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nomor Bootcamp</th>
            <th>Nama Perserta</th>
            <th>Nama Bootcamp</th>
            <th>Jadwal Kelas</th>
        </tr>
        <?php
        $data = mysqli_query($connect, "SELECT bootcamp.*, users.nama FROM users INNER JOIN bootcamp ON users.id=bootcamp.id where bootcamp.jadwal='Siang'");
        while ($stud = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php print $stud['id']?></td>
            <td><?php print $stud['no_bootcamp']?></td>
            <td><?php print $stud['nama']?></td>
            <td><?php print $stud['bootcamp']?></td>
            <td><?php print $stud['jadwal']?></td>
        </tr>

        <?php } ?>
    </table>

    
</body>
</html>