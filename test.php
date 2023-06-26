<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";
$port = 3306; // Replace with the desired port number

$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$sql = "SELECT * FROM `users`;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch data from the result set
    while ($row = $result->fetch_assoc()) {
        // Access the column values
        $id = $row["id"];
        $username = $row["username"];
        $password = $row["password"];

        // Do something with the data
        echo "ID: " . $id . "<br>";
        echo "Username: " . $username . "<br>";
        echo "password: " . $password . "<br>";
        echo "<br>";
    }
} else {
    echo "No users found";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-QWDrTHNQ2ysGKdc6O+yAi9Z+kN+HT+CQCnJBfYzrkr3Jl9X+jUa+CrkQ2n1eVW/" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
        <script>

        $(document).ready(function () {
            $('#notes').DataTable();
        });
        </script> 

</head>
<body>
<div class="container">
    <br>
    <h1>Notes:</h1>
    <br>
    <table id="notes" class="table table-striped table-bordered">
                        <thead class="thead-dark">
                        <tr>
                        <th>username</th>
                        <th>password</th>
             
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($result as $results): ?>
                        <tr>
          
                        <td><?php echo $results['username']; ?></td>
                        <td><?php echo $results['password']; ?></td>
                        </tr>
                        <?php endforeach; ?>

                        </tbody>
                        </table>
    </div>
    
</body>
</html>