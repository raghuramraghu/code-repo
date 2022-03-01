<?php
	include_once  'database.php';
function passwords_hash($pass){
	$array = ['cost' => 12];
	return $password = password_hash($pass, PASSWORD_BCRYPT, $array);
}
//$pss_hash =passwords_hash($_POST['password']) ;
function user_input($username,$email,$pass){
	$data = new database("localhost","raghu","75300","user_data");

	if ($data->get_connection($username,$email,$pass)===true){
		ob_start();
		header('Location: '."http://localhost/php_files_here/TO_DO/");
		ob_end_flush();
	}else{
		echo"somthing error in reloding a page";
	}

}

$input = user_input($_POST['username'],$_POST['email'],passwords_hash($_POST['password']));

?>