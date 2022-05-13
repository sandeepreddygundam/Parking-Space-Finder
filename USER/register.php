 <?php
    include 'config.php';

    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
     $qus = $_POST['qus'];
    $answer = $_POST['answer'];



$query = "SELECT * from user where email='$email';";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($result);
            if(!$row)
            {
$query1="insert into user(name, email, phone, pass, qus, answer,status) values('$fname', '$email', '$phone', '$pass', '$qus', '$answer','Active');";

$retval = mysqli_query($conn,$query1);

echo "<script>alert('User registered Successfully please login.');document.location='login.html'</script>";
}else{

   echo "<script>alert('User Id exists. Please use different email Id');document.location='register.html'</script>";
}

    ?>

    