<?php

include 'config.php';

$pid = $_POST['pid'];
$name = $_POST['name'];
$address = $_POST['address'];
$p_hour = $_POST['p_hour'];
$p_month = $_POST['p_month'];



$sql = " UPDATE parking SET name='$name',address='$address',p_hour='$p_hour',p_month='$p_month' WHERE pid='$pid' ";

if ($conn->query($sql) === TRUE) {
//        echo "New record created successfully";
//    echo "Error: " . $sql . "<br>" . $conn->error;
     header('Location:manageparkings.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
