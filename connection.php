<?php

// Establishing Connection
$con = new mysqli('localhost', 'root', '', 'database');

// Check Connection
if (!$con) {
    die("Connection failed" . mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD']==('POST')){
    $name=$_POST['name'];
    $cname=$_POST['cname'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];


    $sql = "INSERT INTO `db` (`name`, `cname`, `mobile`, `email`) VALUES ('$name', '$cname', '$mobile', '$email')";

    $result=mysqli_query($con, $sql);

    if(!$result){
        die(mysqli_error($con));
    }
}
?>