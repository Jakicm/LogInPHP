<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "test";
$port = 3306;

// Create a connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the submitted username and password
$username = $_POST['username'];
$password = $_POST['password'];

// Query the database to find the user with the submitted username and password
$stmt = $conn->prepare("SELECT id, username FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($id, $username);
$stmt->fetch();

// Verify that the query returned a result
if ($id) {
    // Set a session variable to indicate that the user is logged in
    $_SESSION['user_id'] = $id;

    // Redirect the user to a protected page, or display a success message
    header("Location: index.php");
    exit();
}

// If the login failed, display an error message
echo "Invalid username or password.";
?>
