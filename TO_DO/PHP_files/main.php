<?php
	include 'database.php';
	include 'signup.class.php';

$data = new database('localhost','raghu','75300','user_data');
$data->get_connection($_POST['username'],$_POST['email'],passwords_hash($_POST['password']));