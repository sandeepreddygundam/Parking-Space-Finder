 <?php
    include 'config.php';

    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $sub = $_POST['sub'];
    $msg = $_POST['msg'];
  



$query = "SELECT * from user where email='$email';";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($result);
            if(!$row)
            {
$query1="insert into contact(name, email, subject, message) values('$fname', '$email', '$sub', '$msg');";

$retval = mysqli_query($conn,$query1);

echo "<script>alert('Submitted Successfully.');document.location='index.php'</script>";
}else{

   echo "<script>alert('Something Went wrong try after sometime');document.location='contact.html'</script>";
}

    ?>

    