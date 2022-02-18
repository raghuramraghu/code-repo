<?php
//include 'database.php';
class database {
    private $conn;
    private $sql;
    public $servername;
    public $username;
    public $password;
    public $dbname;

    public function __construct($sname,$uname,$pass,$dname){
        $this->servername = $sname;
        $this->username = $uname;
        $this->password = $pass;
        $this->dbname = $dname;
    }
    public function get_connection(){
        $conn =new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        if($conn->connect_error){
            print "connection error".$conn->connect_error;
        }else{
            print "connection success";
        }
    }
}
    


$data = new database("localhost","raghu","75300","user_data");
$data->get_connection();


?>
