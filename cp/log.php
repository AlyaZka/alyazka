<?php
include("login_signup/loginserv.php"); // Include loginserv for checking email and password
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" type="text/css" href="login_signup/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="login_signup/main.css">

    <link rel="icon" type="image/png" href="виви.png"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	  <link rel="icon" type="image/png" href="виви.png"/>

</head>

<body> 
 <div class="login">
   <div class="limiter">
      <div class="container-signup">
        <div class="wrap-login100">
	       <form class="text-center border border-light p-5" action="" method="post">
                <p class="h4 mb-4">Login</p>
                <!-- E-mail -->
                <input class="form-control" id="email" name="user"  type="email" placeholder="Email" autocomplete="on" required>
                <br>
                <!-- Password -->
				        <input class="form-control" id="pass" name="pass"  type="password" placeholder="Password" autocomplete="on" required>
				
			        	<input class="btn btn-info btn-outline-warning my-4 btn-block" type="submit" id="register" name="submit" value="Login">
			        	<p class="regtext">Ще не зареестровані? <a href= "signup.php">Вам сюди</a>!</p>
		    </form>
       </div>
      </div>
    </div>
  </div>
</body>
</html>