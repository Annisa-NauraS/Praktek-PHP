<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "praktekphp";

$connect = mysqli_connect($servername, $username, $password, $database);

if(mysqli_connect_error()){
    echo "Failed to Connect" . mysqli_connect_error();
}

// echo "Successful Connection!";