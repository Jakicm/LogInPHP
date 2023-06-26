<?php
// Define variables and set to empty values
$name = $email = $password = $confirm_password = '';
$nameErr = $emailErr = $passwordErr = $confirmPasswordErr = '';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate name
    if (empty($_POST['name'])) {
        $nameErr = 'Name is required';
    } else {
        $name = test_input($_POST['name']);
        // Check if name contains only letters and whitespace
        if (!preg_match('/^[a-zA-Z ]*$/', $name)) {
            $nameErr = 'Only letters and whitespace allowed';
        }
    }
    // Validate prezime

    if (empty($_POST['name'])) {
        $nameErr = 'Name is required';
    } else {
        $name = test_input($_POST['name']);
        // Check if name contains only letters and whitespace
        if (!preg_match('/^[a-zA-Z ]*$/', $name)) {
            $nameErr = 'Only letters and whitespace allowed';
        }
    }

    // Validate email
    if (empty($_POST['email'])) {
        $emailErr = 'Email is required';
    } else {
        $email = test_input($_POST['email']);
        // Check if email address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = 'Invalid email format';
        }
    }

    // Validate password
    if (empty($_POST['password'])) {
        $passwordErr = 'Password is required';

    } elseif (strlen($_POST['password']) < 4) {
        $passwordErr = 'Password should be at least 4 characters long';
    
    } else {
        $password = test_input($_POST['password']);
        // Password validation logic can be added here
    }

    // Validate confirm password
    if (empty($_POST['confirm_password'])) {
        $confirmPasswordErr = 'Confirm password is required';
    } elseif ($_POST['password'] !== $_POST['confirm_password']) {
    $passwordErr = 'Password and confirm password should match';
    } else {
        $password = test_input($_POST['password']);
    }

    // If all fields are valid, you can proceed with further processing
    if (empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($confirmPasswordErr)) {
        // Database connection parameters
        $servername = "your_servername";
        $username = "your_username";
        $password = "your_password";
        $dbname = "your_dbname";

        try {
            // Create a new PDO instance
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // Set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Prepare and execute the INSERT statement
            $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            // Clear form values
            $name = $email = $password = $confirm_password = '';

            // Display success message or redirect to another page
            echo 'Registration successful!';
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

        // Close the connection
        $conn = null;
    }
}

// Helper function to sanitize form inputs
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
<div class='container'>
<h2>User Registration</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="name">Name:</label><br>
        <input type="text" name="name" value="<?php echo $name; ?>">
        <span><?php echo $nameErr; ?></span><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" value="<?php echo $email; ?>">
        <span><?php echo $emailErr; ?></span><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" value="<?php echo $password; ?>">
        <span><?php echo $passwordErr; ?></span><br><br>

        <label for="confirm_password">Confirm Password:</label><br>
        <input type="password" name="confirm_password" value="<?php echo $confirm_password; ?>">
        <span><?php echo $confirmPasswordErr; ?></span><br><br>

        <input type="submit" value="Register">
    </form>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>