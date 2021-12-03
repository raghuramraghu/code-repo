<?php
function  database($server_name,$username,$password,$dbname){
    $conn= new mysqli($server_name,$username,$password,$dbname);
    if($conn->connect_error){
        print "connection failed".$conn->connect_error;
    }

    }

   

    // $sql="INSERT INTO contacts VALUES (1,'thiru','kallai')";


    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    // $connection=new database('localhost','raghu','password','person')



$conn->close();
database('localhost','raghu','password','person');


?>