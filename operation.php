<?php


include 'conn.php';

//when we need to regester

//POST
//GET

if(isset($_POST['insert'])){

    $studentid = $_POST['student_id'];
    $studentname = $_POST['student_name'];
    $studentcalss =  $_POST['student_calss'];


    //prepering query
    $query = "INSERT INTO students(id,name,calss) values('$studentid','$studentname','$studentcalss')";

     //Excute query
    $result = $conn->query($query);

    if($result){
        echo "successfully";
        header("location:list.php");
    } else{
        $conn->error;
    }
}

if(isset($_POST['update'])){
    $studentid = $_POST['student_id'];
    $studentname = $_POST['student_name'];
    $studentcalss =  $_POST['student_calss'];


    //prepering query
    $query = "UPDATE students set name= '$studentname',calss= '$studentcalss' where id= '$studentid'";
     //Excute query
    $result = $conn->query($query);

    if($result){
        echo "successfully";
        header("location:list.php");
    } else{
        $conn->error;
    }
}
 
if(isset($_GET['id'])){
    $studentid = $_GET['id'];

//prepering query
$query = "DELETE FROM students where id = '$studentid'";
 //Excute query
$result = $conn->query($query);

if($result){
    echo "successfully";
    header("location:list.php");
} else{
    $conn->error;
}


}






?>