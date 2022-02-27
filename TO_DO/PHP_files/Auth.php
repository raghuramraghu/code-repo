<?php


$email = $_POST['email'];
$pass = $_POST['password'];

	function passwords_hash($password){
		$array = [ 'cost'=>12];
		$password = password_hash($password,PASSWORD_BCRYPT,$array);

		if(password_verify('',$password)){
			echo "password valid";
		}else{
			echo "password invalid";
		}

	}

	passwords_hash("");

?>