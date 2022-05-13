<?php

include "config.php";
//SELECT `slid`, `name`, `lid`, `image` FROM `sublocation` WHERE 1
$name = $_POST['name'];
$lid = $_POST['lid'];

$target_path = "images/";

$target_path = $target_path . basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
    $sql = "INSERT INTO  sublocation (name,lid,image)
            values('$name','$lid',' $target_path' )";

    if ($conn->query($sql) === TRUE) {
        // echo "New record created successfully";
        header('Location:managesublocations.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} 

?>