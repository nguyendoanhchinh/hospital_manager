<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="hospital";
// Create connection
$connect = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$connect) {
    die("ket boi that bat: " . mysqli_connect_error());
}


?>