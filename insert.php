 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>





 <?php


 	$SALT="secure//---;";
 	function hashedpass($password){
 		global $SALT;
 		return strrev(md5($password.$SALT));

 	}
 	$hash=hashedpass();

 	$username=$_POST['user'];
 	$password=$_POST['pass'];
 	// $password=hashedpass($password);


 	if($username= $username AND $password=$password){
 		// echo $username ;
 		// echo"<br><br>";
 		  include "home.php";


 		
							
 	}else{
 		echo "log in failed";
 		
 	}

 	?>
 		<?php
 		   session_start();
 		 $cookie_name="user";
 		$cookie_value=$username;
 		setcookie($cookie_name,$cookie_value,time()+60);//expire in 60 seconds



 		if(!isset($_COOKIE[$cookie_name])){
 			// echo"cookie name" .$cookie_name."<br>not set";
 			echo"cookie not set please reload ";

 		}else{
 			echo"cookie set";
 			// echo "cookie name <br>" .$cookie_name."<br>is set";
 			// echo"<br>";
 			// echo "values are<br>" .$_COOKIE[$cookie_name];
 		}
?>

	
	</body>
	</html>