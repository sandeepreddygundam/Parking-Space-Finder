<?php

include 'config.php';

$lid = $_POST['lid'];
$name = $_POST['name'];



$sql = " UPDATE location SET name='$name' WHERE lid='$lid' ";

if ($conn->query($sql) === TRUE) {
//        echo "New record created successfully";
//    echo "Error: " . $sql . "<br>" . $conn->error;
     header('Location:managelocations.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
