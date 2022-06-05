<!DOCTYPE html>
<html lang="en">
<head>
  <title>Easy Park</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
      .navbar {
    border-radius: 0px;
}

.navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 0px;
    border: 1px solid transparent;
}
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <img src="images/logo.webp"  style="height:60px;margin-top:10px"/>
    </div>
    <ul class="nav navbar-nav navbar-right">
     
      <li ><a href="logout.php"><button class="btn btn-danger navbar-btn"><span class="glyphicon glyphicon-log-in"></span> Logout</button></a></li>
    
    </ul>
    
    
    
  </div>
</nav>
  
<div class="container-fluid">
  <div class="row">
      <div class="col-md-3" style="height:700px;background-color:#d9534f">
          
          
   
     <div class="form-group">
         
      <!--<img src="images/logo.webp"  style="height:60px;margin-top:10px"/>-->
  
         </div>
          <div class="form-group">
               <hr/>
          </div>
           <div class="form-group">
               <h2 style="color:white">Dashboard</h2>
          </div>
     <a href="managelocations.php" style="color:white;margin:10px;font-size:20px;text-align:left" >
         
         <button class="btn btn-danger form-control" style="text-align:left;font-size:20px;height:70px">Location</button>
         </a><br/>
     <a href="managesublocations.php" style="color:white;margin:10px;font-size:20px;text-align:left"><button class="btn btn-danger form-control" style="text-align:left;font-size:20px;height:70px">Sub Location</button></a><br/>
      <a href="manageparkings.php" style="color:white;margin:10px;font-size:20px;text-align:left"><button class="btn btn-danger form-control" style="text-align:left;font-size:20px;height:70px">Parking</button></a><br/>
      <a href="viewallbookings.php" style="color:white;margin:10px;font-size:20px;text-align:left"><button class="btn btn-danger form-control" style="text-align:left;font-size:20px;height:70px">All Bookings</button></a><br/>
     <a href="viewusers.php" style="color:white;margin:10px;font-size:20px;text-align:left"><button class="btn btn-danger form-control" style="text-align:left;font-size:20px;height:70px">User Information</button></a><br/>
      <a href="viewcontacts.php" style="color:white;margin:10px;font-size:20px;text-align:left"><button class="btn btn-danger form-control" style="text-align:left;font-size:20px;height:70px">Contact Information</button></a><br/>
          
      </div>
      <div class="col-md-9">
          
          <h1 style"text-align:center;margin-top:200px">Welcome To Admin Dashboard</h1>
      </div>

        <?php include('config.php'); ?>

<div class="row">

<div class="col-xl-3 col-md-6">

<div class="card bg-primary text-white mb-4"> <div class="card-body">

Total number of parking slots

<?php

$dash_parking_query = "SELECT * from parking";
$dash_parking_query_run = mysqli_query($conn, $dash_parking_query);

if ($parking_total = mysqli_num_rows($dash_parking_query_run))
{
echo '<h4 class="mb-0"> '.$parking_total.' </h4>';
}
else
{

echo '<h4 class="mb-8"> No Data </h4>';
}
?>

</div>
</div>
</div>
<div class="row">

<div class="col-xl-3 col-md-6">

<div class="card bg-primary text-white mb-4"> <div class="card-body">

Total number of booked parking slots

<?php

$dash_parking_booked_query = "SELECT * from parking  WHERE status='Booked'";
$dash_parking_booked_query_run = mysqli_query($conn, $dash_parking_booked_query );

if ($parkingbooked_total = mysqli_num_rows($dash_parking_booked_query_run))
{
echo '<h4 class="mb-0"> '.$parkingbooked_total.' </h4>';
}
else
{

echo '<h4 class="mb-8"> No Data </h4>';
}
?>

</div>
</div>
</div>
<div class="row">

<div class="col-xl-3 col-md-6">

<div class="card bg-primary text-white mb-4"> <div class="card-body">

Total number of available parking slots

<?php

$dash_parking_open_query = "SELECT * from parking  WHERE status='Open Now'";
$dash_parking_open_query_run = mysqli_query($conn, $dash_parking_open_query );

if ($parkingopen_total = mysqli_num_rows($dash_parking_open_query_run))
{
echo '<h4 class="mb-0"> '.$parkingopen_total.' </h4>';
}
else
{

echo '<h4 class="mb-8"> No Data </h4>';
}
?>

</div>
</div>
</div>
<div class="row">

<div class="col-xl-3 col-md-6">

<div class="card bg-primary text-white mb-4"> <div class="card-body">

Total number of users

<?php

$dash_user_query = "SELECT * from user";
$dash_user_query_run = mysqli_query($conn, $dash_user_query );

if ($user_total = mysqli_num_rows($dash_user_query_run))
{
echo '<h4 class="mb-0"> '.$user_total.' </h4>';
}
else
{

echo '<h4 class="mb-8"> No Data </h4>';
}
?>

</div>
</div>
</div>
<div class="col-xl-3 col-md-6">

<div class="card bg-primary text-white mb-4"> <div class="card-body">

Total number of active users

<?php

$dash_user_active_query = "SELECT * from user WHERE status='Active'";
$dash_user_active_query_run = mysqli_query($conn, $dash_user_active_query);

if ($useractive_total = mysqli_num_rows($dash_user_active_query_run))
{
echo '<h4 class="mb-0"> '.$useractive_total.' </h4>';
}
else
{

echo '<h4 class="mb-8"> No Data </h4>';
}
?>

</div>
</div>
</div>
<div class="col-xl-3 col-md-6">
<div class="card bg-primary text-white mb-4"> <div class="card-body">

Total number of blocked users

<?php

$dash_user_blocked_query = "SELECT * from user WHERE status='Blocked'";
$dash_user_blocked_query_run = mysqli_query($conn, $dash_user_blocked_query);

if ($userblocked_total = mysqli_num_rows($dash_user_blocked_query_run))
{
echo '<h4 class="mb-0"> '.$userblocked_total.' </h4>';
}
else
{

echo '<h4 class="mb-8"> No Data </h4>';
}
?>

</div>
</div>
</div>
