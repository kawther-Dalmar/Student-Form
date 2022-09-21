<?php

//object oriented
//proceturel


//host
//user
//password
//database


$conn = new mysqli('localhost','root','','mydb');

if($conn->connect_error){
    echo $conn->error;
} else{
    // echo "success";
}


?>