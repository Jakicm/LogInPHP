<?php

// Start the session
session_start();

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

try {
    $dsn = "mysql:host=$servername;dbname=$database";
    $conn = new PDO($dsn, $username, $password);

    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
// Retrieve the submitted username and password
$username = $_POST['username'];
$password = $_POST['password'];

// Query the database to find the user with the submitted username and password
$stmt = $conn->prepare("SELECT id, username FROM users WHERE username = ? AND password = ?");
$stmt->execute([$username, $password]);
$result = $stmt->fetch();

// Verify that the query returned a result
if ($result) {
  // Set a session variable to indicate that the user is logged in
  $_SESSION['user_id'] = $result['id'];

  // Redirect the user to a protected page, or display a success message
  header("Location: ../index.php");

  exit();
}

// If the login failed, display an error message
echo "Invalid username or password.";


?>
