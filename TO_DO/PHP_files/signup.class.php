<?php
	include_once  'database.php';
function passwords_hash($pass){
	$array = ['cost' => 12];
	return $password = password_hash($pass, PASSWORD_BCRYPT, $array);
}
//$pss_hash =passwords_hash($_POST['password']) ;
function user_input($username,$email,$pass){
	$data = new database("localhost","raghu","75300","user_data");
	$data->get_connection($username,$email,$pass);

}
// this function makes redirect
function redirect($url) {

	}
$input = user_input($_POST['username'],$_POST['email'],passwords_hash($_POST['password']));
if($input == true){
	ob_start();
	header('Location: '."http://localhost:63342/php_files_here/TO_DO/index.html?_ijt=p86mvu8frovtkrcj11iee3i46o&_ij_reload=RELOAD_ON_SAVE");
	ob_end_flush();
	die();

}
?>