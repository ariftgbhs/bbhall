<?php
$host = "localhost";
$user = "root";
$password = "";
$name = "bbhall";

// CONNECTION TO DB
$conn = mysqli_connect($host, $user, $password, $name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
