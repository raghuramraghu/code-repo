<?php
class database {
    private $servername;
    private $username;
    private $password;
    private $dbname;

    public function __construct($sname,$uname,$pass,$dname){
        $this->servername = $sname;
        $this->username = $uname;
        $this->password = $pass;
        $this->dbname = $dname;
    }
    public function get_connection($uname,$mail,$pwd){
        $conn =new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        if($conn->connect_error){
            print "connection error".$conn->connect_error;
        }else{
            echo "connection success\n";

        }
        $sql = "INSERT INTO user_inputs(username,email,password) VALUES('$uname','$mail','$pwd')";
        if($conn->query($sql)==TRUE){
            print "record created succesfully";
        }else{
            print  "Error: " . $sql . "<br>" . $conn->error;
        }


        $conn->close();
    }
}
    





?>
