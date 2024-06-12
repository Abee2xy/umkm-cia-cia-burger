<?php
require 'login.php';

$email = $_POST["Email"];
$password = $_POST["Password"];
$query_sql = "SELECT * FROM account

WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {

    header("Location: index2.html");
        
 } else {
    
    echo "<center><h1>Email or Password is wrong. Please try logging in again.</h1> <button><strong><a href='index.html'>Login</a></strong></button></center>";
}