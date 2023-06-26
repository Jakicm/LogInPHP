<?php
$servername = "cnl.h.filess.io";
$username = "Test_meetcourse";
$password = "f65e8a1bde3355b2f8a51eb374b01ffbb15907db";
$database = "Test_meetcourse";
$port = 3307; // Replace with the desired port number

$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";




?>

