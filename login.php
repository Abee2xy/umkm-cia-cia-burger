<?php

$servername = "localhost";
$database = "web_umkm";
$username = "root";
$password = "";

$conn = mysqli_connect($localhost, $username, $password, $database);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
} else {
    echo "Connection Success";
}