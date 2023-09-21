<?php

include 'connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM users where id='$id'");

header('location:crud-read.php');

?>