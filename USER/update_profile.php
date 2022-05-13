<?php

include 'config.php';

$uid = $_POST['uid'];
$uname = $_POST['uname'];
$uemail = $_POST['uemail'];
$uphone = $_POST['uphone'];
$upass = $_POST['upass'];



$sql = " UPDATE user SET name='$uname', email='$uemail', phone='$uphone', pass='$upass' WHERE uid='$uid' ";

if ($conn->query($sql) === TRUE) {
//        echo "New record created successfully";
//    echo "Error: " . $sql . "<br>" . $conn->error;
     header('Location:home.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
