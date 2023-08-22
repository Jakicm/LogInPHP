<?php

// Start the session
session_start();

// Connect to the database
$servername = "JAKIC\SQLEXPRESS2019";
$username = "";
$password = "";
$dbname = "CRM";

try {
  $conn = new PDO("sqlsrv:Server=$servername;Database=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  exit();
}


// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
  // Redirect the user to the login page
  header("Location: login.php");

  exit();
} 


?>