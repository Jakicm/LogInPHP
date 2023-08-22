
<?php
include("./pages/connection.php");   



$data3 = $_POST['data3']; 
$data4 = $_POST['data4'];

// Insert the data into the table, along with the user ID
$stmt = $conn->prepare("INSERT INTO my_table (data1, data2, user_id) VALUES (:data1, :data2, :user_id)");
$stmt->bindParam(':data1', $data3);
$stmt->bindParam(':data2', $data4);
$stmt->bindParam(':user_id', $_SESSION['user_id']);
$stmt->execute();

// Redirect the user to a success page
// header("Location: success.php");
echo("Podaci su uspešno dodati.");
exit();

?>