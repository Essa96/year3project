<?php

$conn = null;
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "memser_db";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Unable to connect: " . mysqli_connect_error());
}
