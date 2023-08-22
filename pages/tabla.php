<?php

include("connection.php");   



$sql = "SELECT my_table.data1, my_table.data2, users.username
FROM my_table
INNER JOIN users ON my_table.user_id = users.id";

$stmt = $conn->prepare($sql);
$stmt->execute();
$note = $stmt->fetchAll(PDO::FETCH_ASSOC);


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
                        <th>Title</th>
                        <th>Note</th>
                        <th>User</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($note as $notes): ?>
                        <tr>
                        <td><?php echo $notes['data1']; ?></td>
                        <td><?php echo $notes['data2']; ?></td>
                        <td><?php echo $notes['username']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                        </table>
    </div>
    
</body>
</html>