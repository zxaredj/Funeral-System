<?php
$servername = "localhost";
$username = "root";
$password = ""; // Use an empty string for no password
$database = "pfs";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>