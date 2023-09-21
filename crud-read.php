<?php

include "connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktek HTML dan PHP</title>
</head>
<style>
    td{
        padding: 5px 20px;
    }

    .btn-top{
        padding: 10px;
        margin: 10px;
    }
</style>
<body>

    <h1 style="text-align:center">Praktek HTML dan PHP</h1>

    <div style="display:flex;  justify-content: center; align-items:center">
    <a href="input-create.php"><button class="btn-top">Add Data</button></a>
    <a href="table-laki.php"><button class="btn-top">Data Laki-Laki</button></a>
    <a href="table-perm.php"><button class="btn-top">Data Perempuan</button></a>
    </div>

    <table border="1" style="margin:auto">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Nomor Telepon</th>
            <th>Alamat</th>
            <th>Option</th>
        </tr>
        <?php
        $data = mysqli_query($connect, "SELECT * FROM users");
        while ($stud = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php print $stud['id']?></td>
            <td><?php print $stud['nama']?></td>
            <td><?php print $stud['umur']?></td>
            <td><?php print $stud['jenis_kel']?></td>
            <td><?php print $stud['no_telp']?></td>
            <td><?php print $stud['alamat']?></td>
            <td>
                <a href="input-update.php?id=<?php echo $stud['id']?>"><button>Edit</button></a>
                <a href="crud-delete.php?id=<?php echo $stud['id']?>" onclick="return confirm('Yaqin mau menghapus data?')"><button>Delete</button></a>
                <a href="input-detailpagi.php?id=<?php echo $stud['id']?>"><button>Details</button></a>
            </td>
        </tr>
        <?php } ?>
    </table>


</body>
</html>