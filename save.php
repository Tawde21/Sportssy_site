<?php

$server = "localhost";
$db_username = "root";
$password = "";
$db_name = "signup";

$con = mysqli_connect($server, $db_username, $password, $db_name);

if(!$con)
{
    echo "not connected";
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];


$sql = "INSERT INTO `signup_data`(`fname`, `lname`, `email`, `password`, `contact`) VALUES ('$fname','$lname','$email','$password','$contact')";

$result = mysqli_query($con, $sql);

if($result){
    echo "data submitted";
}

else{
    echo"data not submitted";
}


?>