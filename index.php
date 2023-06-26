<?php

include("./pages/connection.php");   

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
<title>Notes</title>
</head>
<body>
<a href="">Notes</a>
<div class="container">
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Note:</div>
                <div class="card-body">
                    <h5 class="card-title">Unos novih beleški: </h5>
                </div>
                </div>
                <form method="post" action="insert.php">
                <div class="container">
                <div class="row">
                <div class="col-4" style="margin-bottom: 20px;">
                <label for="data1" class="form-label">Title:</label>
                <input type="text" name="data3" id="data1" class="form-control" maxlength="20" required>
                </div>
                <div class="w-100"></div>
                <div class="col-4" style="margin-bottom: 20px;">
                <label for="data2" class="form-label">Note:</label>
                <input type="text" name="data4" id="data2" class="form-control" maxlength="20" required>
                </div>
                <div class="w-100"></div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </div>
                </form>
                </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
