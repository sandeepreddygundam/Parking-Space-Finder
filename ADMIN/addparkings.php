<?php

include "config.php";
//SELECT `pid`, `name`, `address`, `image`, `p_hour`, `p_month`, `status`, `slid` FROM `parking` WHERE 1
$name = $_POST['name'];
$address = $_POST['address'];
$hprice = $_POST['hprice'];
$mprice = $_POST['mprice'];
$status = $_POST['status'];
$lid = $_POST['lid'];

$target_path = "images/";

$target_path = $target_path . basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
    $sql = "INSERT INTO  parking (name,address,p_hour,p_month,status,slid,image)
            values('$name','$address','$hprice','$mprice','$status','$lid',' $target_path' )";

    if ($conn->query($sql) === TRUE) {
        // echo "New record created successfully";
        header('Location:manageparkings.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} 

?>