<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In</title>
    <link href="./css/style.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    </head>

<body>

<<div class="container bootstrap snippets bootdey">
    <div class="row login-page"> 
        <div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4"> 
    		<img src="./resources/user.svg" class="user-avatar img-thumbnail"> 
    		<h1>LogIn</h1> 
            <form method="post" action="./pages/check.php">
    		<form role="form" class="ng-pristine ng-valid"> 
    			<div class="form-content"> 
    				<div class="form-group"> 
    					<input type="text" id="username" name="username" class="form-control input-underline input-lg" placeholder="username"> 
    				</div> 
    				<div class="form-group"> 
    					<input type="password" id="password" name="password" class="form-control input-underline input-lg" placeholder="password"> 
    				</div> 
    			</div> 
    			<button class="btn btn-info btn-lg">
                    Log in
    			</button> &nbsp; 
    		</form> 
    	</div> 
    </div>
</div>

</body>
</html>