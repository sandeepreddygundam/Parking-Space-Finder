<?php
session_start();

include 'config.php';

$uname = $_POST['uname'];
$pass = $_POST['pass'];

$sql = "SELECT email,pass FROM user where email='$uname' and pass='$pass' ";
$result = $conn->query($sql);


$_SESSION["email"] = $uname;


if ($result->num_rows > 0) {

  // fetch data
  $id = mysqli_fetch_array($result);

  //   echo "Error: " . $sql . "<br>" . $conn->error;
  header('Location:home.php');
} else {
  echo "<script>alert('Invalid Details');document.location='index.html'</script>";
}
$conn->close();
?>
