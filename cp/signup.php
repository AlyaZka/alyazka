<?php
require_once('login_signup/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="login_signup/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="login_signup/main.css">

    <link rel="icon" type="image/png" href="виви.png"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<body>

<div class="limiter">
  <div class="container-signup">
    <div class="wrap-login100">
        <form class="text-center border border-light p-5" action="signup.php" method="post">
            <p class="h4 mb-4">Sign up</p>

            <!-- name -->

               <input class="form-control" id="firstname" type="text" name="firstname" placeholder="First name" autocomplete="on" required>
               <br>
          <input class="form-control" id="lastname"  type="text" name="lastname" placeholder="Last name" autocomplete="on" required>
		  <br>
		  <input class="form-control" id="patronymic"  type="text" name="patronymic" placeholder="Patronymic" autocomplete="on" required>
          <br>
           <!-- E-mail -->
          <input class="form-control" id="email"  type="email" name="email" placeholder="Email" autocomplete="on" required>
          <br>
          <!-- Phone -->
          <input class="form-control" id="phone"  type="text" name="phone" placeholder="Phone" autocomplete="on" required pattern="^((9|\+380)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{9,12}$" value="+380" oninput="
          var allowedChars = ['+','0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];  var newValue = event.target.value;
          var newValueChar = newValue[newValue.length - 1];

          var oldValue = newValue.slice(0, -1);
            if(!allowedChars.includes(newValueChar)){
              this.value = oldValue;
            }
          ">
          <br>
          <!-- Password -->
          <input class="form-control" id="password"  type="password" name="password" placeholder="Password" autocomplete="on" required>

          <input class="btn btn-info btn-outline-warning my-4 btn-block" type="submit" id="register" name="create" value="Sign Up">
		
		  <p class="regtext">Вже зареестровані? <a href= "log.php">Вам сюди</a>!</p>

		  <p align="left">*Будь ласка введіть Ваші реальне П.І.Б</p>
        </form>
    </div>
  </div>
</div>

<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){

			var firstname    	= $('#firstname').val();
			var lastname   	    = $('#lastname').val();
			var patronymic   	= $('#patronymic').val();
			var email 	     	= $('#email').val();
			var phone           = $('#phone').val();
			var password     	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,patronymic: patronymic,email: email,phone: phone,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
								setTimeout(function() {window.location.href = "log.php"}, 3000);
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

		});		

		
	});
	
</script>
</body>
</html>