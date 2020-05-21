<?php
require_once('login_signup/config.php');
?>
<?php

if(isset($_POST)){

	$firstname 		= $_POST['firstname'];
	$lastname 		= $_POST['lastname'];
	$patronymic 	= $_POST['patronymic'];
	$email 			= $_POST['email'];
	$phone	        = $_POST['phone'];
	$password 		= $_POST['password'];

		$sql = "INSERT INTO user (user_firstname, user_lastname, user_patronymic, user_email, user_phone, user_pass) VALUES(?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $patronymic, $email, $phone, $password]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}