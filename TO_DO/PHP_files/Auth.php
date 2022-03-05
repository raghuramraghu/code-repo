<?php
include_once 'database.php';

$user_email = $_POST['email'];
$user_pass = $_POST['password'];

$data = new database('localhost','raghu','75300','user_data');
$password_match = $data->get_details($user_email,$user_pass);
echo $password_match;


?>