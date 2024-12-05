<?php

$host = "localhost";
$user = "root";
$password = "00000000";
$dbName = "online";

$con = mysqli_connect($host, $user, $password, $dbName);


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
