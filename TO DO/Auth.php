<?php
$not =null;
if($not($_POST("submit"))){
    $email=$_POST['email'];
    $pass=$_POST['password'];

    print $email;
    print $pass;

}


?>