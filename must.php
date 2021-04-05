<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// Create connection
$conn = mysqli_connect("localhost", "root", "", "lahtp");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$user=$_POST['user'];
$pass=$_POST['pass'];
$sql = "INSERT INTO batch3 (username,password)
VALUES ('$user' ,'$pass')";

if (mysqli_query($conn, $sql)) {
  echo "";
} else {
  echo "Error fail: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>