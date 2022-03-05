<?php
include_once "Auth.php";
include_once "signup.class.php";
class database
{
	private $servername;
	private $username;
	private $password;
	private $dbname;

	public function __construct($sname, $uname, $pass, $dname)
	{
		$this->servername = $sname;
		$this->username = $uname;
		$this->password = $pass;
		$this->dbname = $dname;
	}

	public function get_connection($uname, $mail, $pwd)
	{
		$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		if ($conn->connect_error) {
			echo "false";

		} else {
			$sql = "INSERT INTO user_inputs(username,email,password) VALUES('$uname','$mail','$pwd')";
			if ($conn->query($sql) == TRUE) {
				print "record created succesfully";
				return true;
			} else {
				print  "Error: " . $sql . "<br>" . $conn->error;
			}
		}

		return $conn->close();
	}

	public function get_details($email, $pass)
	{
		$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		if ($conn->connect_error) {
			echo "false";

		} else {
			$sql = "SELECT email, password FROM user_input";
			$result = mysqli_query($conn, $sql);
				while ($row = mysqli_fetch_assoc($result)) {
					echo  " - E-mail: " . $row["email"] . " " ."PWD". $row["password"] . "<br>";
					if($_POST['email'] and passwords_hash($_POST['password']) ==$row[$email] and $row["password"]){
						echo "password match";
					}else{
						echo "wrong email or password";
					}
				}


			}$conn->close();
		}

	}



